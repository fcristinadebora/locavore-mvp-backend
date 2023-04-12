<?php

namespace App\Http\Controllers\Api;

use App\Dto\CreateProducerReviewInputDto;
use App\Dto\CreateProductReviewInputDto;
use App\Dto\ListProducerReviewInputDto;
use App\Dto\ListProductReviewInputDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProducerReviewRequest;
use App\Http\Requests\CreateProductReviewRequest;
use App\Http\Services\AuthService;
use App\Http\Services\FavoriteService;
use App\Http\Services\ReviewService;
use App\Http\Traits\TransformerTrait;
use App\Models\Producer;
use App\Models\Product;
use App\Transformers\Api\ProducerReviewTransformer;
use App\Transformers\Api\ProductReviewTransformer;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class ReviewsController extends BaseApiController
{
    use TransformerTrait;

    public function __construct(
        private ReviewService $reviewService,
        private AuthService $authService
    ) {}

    public function createProductReview(CreateProductReviewRequest $request, Product $product)
    {
        $currentUser = $this->authService->getCurrentUser();
        if (!$currentUser) {
            throw new UnauthorizedException();
        }

        $dto = CreateProductReviewInputDto::fromRequest($request);
        $dto->personId = $currentUser->person->id;
        $dto->productId = $product->id;

        return $this->sendResponse([
            'success' => $this->reviewService->createProductReview($dto)
        ]);
    }

    public function createProducerReview(CreateProducerReviewRequest $request, Producer $producer)
    {
        $currentUser = $this->authService->getCurrentUser();
        if (!$currentUser) {
            throw new UnauthorizedException();
        }

        $dto = CreateProducerReviewInputDto::fromRequest($request);
        $dto->personId = $currentUser->person->id;
        $dto->producerId = $producer->id;

        return $this->sendResponse([
            'success' => $this->reviewService->createProducerReview($dto)
        ]);
    }

    public function listProductReviews(Request $request, Product $product)
    {
        $dto = ListProductReviewInputDto::fromRequest($request);
        $dto->productId = $product->id;

        if ($dto->pagination) {
            $reviews = $this->reviewService->listProductReviewsPaginated($dto);
            $reviews = $this->transformPaginatedCollection($reviews, new ProductReviewTransformer());
        } else {
            $reviews = $this->reviewService->listProductReviews($dto);
            $reviews = $this->transformCollection($reviews, new ProductReviewTransformer());
        }

        return $this->sendResponse($reviews);
    }

    public function listProducerReviews(Request $request, Producer $producer)
    {
        $dto = ListProducerReviewInputDto::fromRequest($request);
        $dto->producerId = $producer->id;

        if ($dto->pagination) {
            $reviews = $this->reviewService->listProducerReviewsPaginated($dto);
            $reviews = $this->transformPaginatedCollection($reviews, new ProducerReviewTransformer());
        } else {
            $reviews = $this->reviewService->listProducerReviews($dto);
            $reviews = $this->transformCollection($reviews, new ProducerReviewTransformer());
        }

        return $this->sendResponse($reviews);
    }
}
