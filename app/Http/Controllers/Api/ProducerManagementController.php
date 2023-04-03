<?php

namespace App\Http\Controllers\Api;

use App\Dto\UpdateProducerAddressInputDto;
use App\Dto\UpdateProducerInputDto;
use App\Http\Requests\DeleteAccountRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProducerAddressRequest;
use App\Http\Requests\UpdateProducerRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Services\AuthService;
use App\Http\Services\ProducerManagementService;

class ProducerManagementController extends BaseApiController
{
    public function __construct(
        private AuthService $authService,
        private ProducerManagementService $producerManagementService
    ) { }

    public function updateProducer(UpdateProducerRequest $request)
    {
        $dto = UpdateProducerInputDto::fromRequest($request);
        
        return $this->sendResponse([
            'success' => true,
            'producer' => $this->producerManagementService->createOrUpdateProducer($dto)
        ]);
    }

    public function updateAddress(UpdateProducerAddressRequest $request)
    {
        $dto = UpdateProducerAddressInputDto::fromRequest($request);
        
        return $this->sendResponse([
            'success' => true,
            'address' => $this->producerManagementService->createOrUpdateAddress($dto)
        ]);
    }

    // public fucntion updateProfilePicture
    // public function updateContacts
    // public function updateAddress
}
