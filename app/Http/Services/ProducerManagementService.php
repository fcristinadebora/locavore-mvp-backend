<?php

namespace App\Http\Services;

use App\Dto\ProducerReplaceContactsInputDto;
use App\Dto\UpdateProducerAddressInputDto;
use App\Dto\UpdateProducerInputDto;
use App\Http\Services\Traits\PrivateServiceTrait;
use App\Models\Address;
use App\Models\Contact;
use App\Models\Producer;
use App\Models\ProducerContact;
use App\Models\User;
use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ProducerManagementService
{
  use PrivateServiceTrait;

  public function __construct(
    private AuthService $authService,
    private FileService $fileService
  ) { }

  public function createOrUpdateProducer(UpdateProducerInputDto $dto): Producer
  {
    $producer = $this->getCurrentProducerOrNew(true);

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
    $producer = $this->getCurrentProducer();
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

  public function getCurrentProducer(): ?Producer
  {
    $currentUser = $this->getCurrentUserOrFail();
    
    return $currentUser->person->producer ?? null;
    
  }

  public function getCurrentProducerOrNew(): Producer
  {
    $currentUser = $this->getCurrentUserOrFail();
    $producer = $this->getCurrentProducer();

    if (!$producer) {
      $producer = new Producer;
      $producer->person_id = $currentUser->person->id;
    }

    return $producer;
  }

  public function replaceContacts(ProducerReplaceContactsInputDto $dto): array
  {
    $producer = $this->getCurrentProducer();

    $createdContacts = [];
    $producer->contacts()->delete();
    foreach ($dto->contacts as $key => $value) {
      $contact = new ProducerContact([
        'producer_id' => $producer->id,
        'type' => $value->type,
        'value' => $value->value,
      ]);
      $contact->save();
      $createdContacts[] = clone $contact;
    }

    return $createdContacts;
  }
}
