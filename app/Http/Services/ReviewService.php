<?php

namespace App\Http\Services;

use App\Dto\CreateProducerReviewInputDto;
use App\Dto\CreateProductReviewInputDto;
use App\Dto\ListProducerReviewInputDto;
use App\Dto\ListProductReviewInputDto;
use App\Dto\ListProductsInputDto;
use App\Exceptions\ReviewAlreadySubmitedException;
use App\Models\Person;
use App\Models\PersonFavoriteProducer;
use App\Models\PersonFavoriteProduct;
use App\Models\ProducerReview;
use App\Models\ProductReview;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ReviewService
{
    public function createProductReview(CreateProductReviewInputDto $dto): ProductReview
    {
        $personAlreadyReviewed = ProductReview::findByPerson($dto->productId, $dto->personId);
        if ($personAlreadyReviewed) {
            throw new ReviewAlreadySubmitedException($dto->personId);
        }

        return ProductReview::create([
            'product_id' => $dto->productId,
            'person_id' => $dto->personId,
            'rate' => $dto->rate,
            'comment' => $dto->comment,
        ]);
    }

    public function createProducerReview(CreateProducerReviewInputDto $dto): ProducerReview
    {
        $personAlreadyReviewed = ProducerReview::findByPerson($dto->producerId, $dto->personId);
        if ($personAlreadyReviewed) {
            throw new ReviewAlreadySubmitedException($dto->personId);
        }

        return ProducerReview::create([
            'producer_id' => $dto->producerId,
            'person_id' => $dto->personId,
            'rate' => $dto->rate,
            'comment' => $dto->comment,
        ]);
    }

    public function listProductReviewsPaginated(
        ListProductReviewInputDto $dto
    ): LengthAwarePaginator
    {
        return ProductReview::listPaginated(
            productId: $dto->productId,
            perPage: $dto->pagination->perPage,
            currentPage: $dto->pagination->currentPage,
            personId: $dto->personId
        );
    }

    public function listProductReviews(
        ListProductReviewInputDto $dto
    ): Collection
    {
        return ProductReview::list(
            productId: $dto->productId,
            limit: $dto->limit,
            personId: $dto->personId
        );
    }

    public function listProducerReviewsPaginated(
        ListProducerReviewInputDto $dto
    ): LengthAwarePaginator
    {
        return ProducerReview::listPaginated(
            producerId: $dto->producerId,
            perPage: $dto->pagination->perPage,
            currentPage: $dto->pagination->currentPage,
            personId: $dto->personId
        );
    }

    public function listProducerReviews(
        ListProducerReviewInputDto $dto
    ): Collection
    {
        return ProducerReview::list(
            producerId: $dto->producerId,
            limit: $dto->limit,
            personId: $dto->personId
        );
    }
}