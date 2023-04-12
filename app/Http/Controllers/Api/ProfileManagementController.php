<?php

namespace App\Http\Controllers\Api;

use App\Dto\ListProductsInputDto;
use App\Http\Requests\DeleteAccountRequest;
use App\Http\Requests\ListProductsRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Services\AuthService;
use Illuminate\Http\Request;
use App\Http\Services\ProductService;
use App\Http\Services\ProfileService;
use App\Http\Traits\TransformerTrait;
use App\Models\Product;
use App\Transformers\Api\ProductTransformer;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection as SupportCollection;
use League\Fractal\TransformerAbstract;
use MatanYadaev\EloquentSpatial\Objects\Point;

class ProfileManagementController extends BaseApiController
{
    public function __construct(
        private AuthService $authService,
        private ProfileService $profileService
    ) { }

    public function updateProfile(UpdateProfileRequest $request)
    {
        return $this->sendResponse([
            'success' => $this->profileService->updateProfile(
                $request->post('name'),
                $request->post('email')
            )
        ]);
    }

    public function updatePassword(UpdatePasswordRequest $request)
    {
        return $this->sendResponse([
            'success' => $this->authService->updatePassword(
                $request->post('current_password'),
                $request->post('password')
            )
        ]);
    }

    public function deleteAccount(DeleteAccountRequest $request)
    {
        return $this->sendResponse([
            'success' => $this->authService->deleteAccount($request->post('password'))
        ]);
    }
}
