<?php

namespace App\Transformers\Api;

use App\Models\ProducerReview;
use App\Enums\ContactType;
use League\Fractal\TransformerAbstract;

class ProducerReviewTransformer extends TransformerAbstract
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
    public function transform(ProducerReview $review)
    {
        return [
            'id' => $review->id,
            'producer_id' => $review->producer_id,
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
