<?php

namespace App\Http\Services;

use App\Dto\UpdateProducerAddressInputDto;
use App\Dto\UpdateProducerInputDto;
use App\Models\Address;
use App\Models\Producer;
use App\Models\User;
use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ProducerManagementService
{
  public function __construct(
    private AuthService $authService,
    private FileService $fileService
  ) { }

  public function createOrUpdateProducer(UpdateProducerInputDto $dto): Producer
  {
    $producer = $this->getCurrentProducer(true);

    foreach ($dto as $key => $value) {
        // Skip null values
        if ($value === null) {
            continue;
        }

        if (in_array($key, $producer->fillable ?? []) && !is_array($value)) {
          $producer->$key = $value;
        }
                
        $producer->categories()->sync($dto->categories);
      }
      
      $producer->save();
    
    return $producer;
  }

  public function createOrUpdateAddress(UpdateProducerAddressInputDto $dto): Address
  {
    $producer = $this->getCurrentProducer();

    $address = $producer->address ?? new Address;
    $address->producer_id = $producer->id;

    foreach ($dto as $key => $value) {
        // Skip null values
        if ($value === null) {
            continue;
        }

        if (in_array($key, $address->fillable ?? []) && !is_array($value)) {
          $address->$key = $value;
        }
      }

      if ($address->lat && $address->lng) {
        $point = new Point($address->lat, $address->lng, config("spatial.default_srid"));
        $address->location = $point;
      }
      
      $address->save();
    
    return $address;
  }

  public function updateProfilePicture(?UploadedFile $file, ?bool $deleteCurrent = false): ?Producer
  {
    $producer = $this->getCurrentProducer(true);
    if (!$file && $deleteCurrent) {
      //todo delete the current one with the upload service
      $producer->profile_picture = null;
      $producer->save();
      return $producer;
    }

    if (!$file && !$deleteCurrent) {
      return $producer;
    }

    $uploadedFile = $this->fileService->upload($file, Producer::IMAGES_FOLDER);
    if ($uploadedFile) {
      $oldPicturePath = $producer->getProfilePicturePath();
      $producer->profile_picture = $uploadedFile->getFilename();

      if ($producer->save() && $oldPicturePath) {
        $this->fileService->delete($oldPicturePath);
      }
    }

    return $producer;
  }

  private function getCurrentProducer(bool $createNewIfEmpty = false)
  {
    $currentUser = Auth::user();
    if (!($currentUser && $currentUser->person)) {
        throw new UnauthorizedException('User not authenticated', 401);
    }
    
    $producer = $currentUser->person->producer;
    if (!$producer) {
        $producer = new Producer;
        $producer->person_id = $currentUser->person->id;
    }

    return $producer;
  }
}
