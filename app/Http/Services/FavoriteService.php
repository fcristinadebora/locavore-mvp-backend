<?php

namespace App\Http\Services;

use App\Models\Person;
use App\Models\PersonFavoriteProducer;
use App\Models\PersonFavoriteProduct;
use Illuminate\Database\Eloquent\Collection;

class FavoriteService
{
    public function toggleFavoriteProduct(int $personId, int $productId): bool
    {
        $existingFavorite = $this->findPersonFavoriteProduct($personId, $productId);

        if ($existingFavorite) {
            return $existingFavorite->delete();
        }

        return !!$this->createFavoriteProduct($personId, $productId);
    }

    public function toggleFavoriteProducer(int $personId, int $producerId): bool
    {
        $existingFavorite = $this->findPersonFavoriteProducer($personId, $producerId);

        if ($existingFavorite) {
            return $existingFavorite->delete();
        }

        return !!$this->createFavoriteProducer($personId, $producerId);
    }

    public function createFavoriteProduct(int $personId, int $productId): PersonFavoriteProduct
    {
        return PersonFavoriteProduct::create([
            'person_id' => $personId,
            'product_id' => $productId,
        ]);
    }

    public function createFavoriteProducer(int $personId, int $producerId): PersonFavoriteProducer
    {
        return PersonFavoriteProducer::create([
            'person_id' => $personId,
            'producer_id' => $producerId,
        ]);
    }

    public function deleteFavoriteProduct(int $personId, int $productId): bool
    {
        return PersonFavoriteProduct::where($personId, $productId)->delete();
    }

    public function deleteFavoriteProducer(int $personId, int $productId): bool
    {
        return PersonFavoriteProduct::where($personId, $productId)->delete();
    }

    public function findPersonFavoriteProduct(int $personId, int $productId): ?PersonFavoriteProduct
    {
        return PersonFavoriteProduct::where('person_id', $personId)
        ->where('product_id', $productId)
        ->first();
    }

    public function findPersonFavoriteProducer(int $personId, int $producerId): ?PersonFavoriteProducer
    {
        return PersonFavoriteProducer::where('person_id', $personId)
        ->where('producer_id', $producerId)
        ->first();
    }

    public function isFavoriteProducer(int $personId, int $producerId): bool
    {
        return !!$this->findPersonFavoriteProducer($personId, $producerId);
    }

    public function isFavoriteProduct(int $personId, int $productId): bool
    {
        return !!$this->findPersonFavoriteProduct($personId, $productId);
    }

    public function getPersonFavoriteProducers(int $personId, array $producerIds = []): ?Collection
    {
        $favorites = PersonFavoriteProducer::where('person_id', $personId);

        if ($producerIds) {
            $favorites = $favorites->whereIn('producer_id', $producerIds);
        }

        return $favorites->get();
    }

    public function getPersonFavoriteProducts(int $personId, array $productIds = []): ?Collection
    {
        $favorites = PersonFavoriteProduct::where('person_id', $personId);

        if ($productIds) {
            $favorites = $favorites->whereIn('product_id', $productIds);
        }

        return $favorites->get();
    }
}