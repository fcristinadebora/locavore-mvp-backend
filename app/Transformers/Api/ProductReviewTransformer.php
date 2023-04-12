<?php

namespace App\Transformers\Api;

use App\Models\ProductReview;
use App\Enums\ContactType;
use League\Fractal\TransformerAbstract;

class ProductReviewTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];
    
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        //
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(ProductReview $review)
    {
        return [
            'id' => $review->id,
            'product_id' => $review->product_id,
            'person_id' => $review->person_id,
            'rate' => $review->rate,
            'comment' => $review->comment,
            'person' => $review->person && $review->person->user ? [
                'name' => $review->person->user->name
            ] : null,
            'created_at' => $review->created_at
        ];
    }
}
