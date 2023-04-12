<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Services\AuthService;
use App\Http\Services\FavoriteService;
use App\Models\Producer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class FavoritesController extends BaseApiController
{
    public function __construct(
        private FavoriteService $favoriteService,
        private AuthService $authService
    ) {}

    public function toggleFavoriteProduct(Request $request, Product $product)
    {
        $currentUser = $this->authService->getCurrentUser();
        if (!$currentUser) {
            throw new UnauthorizedException();
        }

        return $this->sendResponse([
            'success' => $this->favoriteService->toggleFavoriteProduct(
                $currentUser->person()->first()->id, $product->id
            )
        ]);
    }

    public function toggleFavoriteProducer(Request $request, Producer $producer)
    {
        $currentUser = $this->authService->getCurrentUser();
        if (!$currentUser) {
            throw new UnauthorizedException();
        }

        return $this->sendResponse([
            'success' => $this->favoriteService->toggleFavoriteProducer(
                $currentUser->person()->first()->id, $producer->id
            )
        ]);
    }

    public function isFavoriteProducer(Request $request, Producer $producer)
    {
        $currentUser = $this->authService->getCurrentUser();
        if (!$currentUser) {
            throw new UnauthorizedException();
        }

        return $this->sendResponse([
            'is_favorite' => $this->favoriteService->isFavoriteProducer(
                $currentUser->person()->first()->id, $producer->id
            )
        ]);
    }
    
    public function isFavoriteProduct(Request $request, Product $product)
    {
        $currentUser = $this->authService->getCurrentUser();
        if (!$currentUser) {
            throw new UnauthorizedException();
        }

        return $this->sendResponse([
            'is_favorite' => $this->favoriteService->isFavoriteProduct(
                $currentUser->person()->first()->id, $product->id
            )
        ]);
    }

    public function getPersonFavoriteProducers(Request $request)
    {
        $currentUser = $this->authService->getCurrentUser();
        if (!$currentUser) {
            throw new UnauthorizedException();
        }

        $producerIds = $request->get('ids') ? explode(',', $request->get('ids')) : [];

        return $this->sendResponse($this->favoriteService->getPersonFavoriteProducers(
                $currentUser->person()->first()->id, $producerIds
            ));
    }

    public function getPersonFavoriteProducts(Request $request)
    {
        $currentUser = $this->authService->getCurrentUser();
        if (!$currentUser) {
            throw new UnauthorizedException();
        }

        $productIds = $request->get('ids') ? explode(',', $request->get('ids')) : [];

        return $this->sendResponse($this->favoriteService->getPersonFavoriteProducts(
                $currentUser->person()->first()->id, $productIds
            ));
    }
}
