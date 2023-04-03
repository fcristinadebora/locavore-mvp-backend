<?php

namespace App\Http\Services;

use App\Dto\UpdateProducerAddressInputDto;
use App\Dto\UpdateProducerInputDto;
use App\Models\Address;
use App\Models\Producer;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\UnauthorizedException;
use MatanYadaev\EloquentSpatial\Objects\Point;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class ProducerManagementService
{
  public function __construct(
    private AuthService $authService
  ) { }

  public function createOrUpdateProducer(UpdateProducerInputDto $dto): Producer
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
    $currentUser = Auth::user();
    if (!($currentUser && $currentUser->person)) {
        throw new UnauthorizedException('User not authenticated', 401);
    }
    
    $producer = $currentUser->person->producer;
    if (!$producer) {
      throw new Exception('Must create a producer profile first');
    }

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
}
