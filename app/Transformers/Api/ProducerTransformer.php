<?php

namespace App\Transformers\Api;

use App\Models\Address;
use App\Models\Producer;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Item;


class ProducerTransformer extends TransformerAbstract
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
        'longDescription',
        'long_description',
        'address',
        'categories',
        'contacts',
        'average_review',
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Producer $producer)
    {
        return [
            'id' => $producer->id,
            'name' => $producer->name,
            'short_description' => $producer->short_description,
            'profile_picture' => $producer->getProfilePictureUrl(),
            'is_enabled' => $producer->is_enabled,
            'is_complete' => $producer->isComplete()
        ];
    }

    public function includeLongDescription(Producer $producer)
    {
        return $this->Primitive($producer->long_description);
    }

    public function includeAddress(Producer $producer): ?Item
    {
        if (empty($producer->address)) {
            return null;
        }

        return $this->item($producer->address, new AddressTransformer);
    }

    public function includeAverageReview(Producer $producer)
    {
        if ($producer->reviews_avg_rate) {
            return $this->Primitive((float) $producer->reviews_avg_rate);
        }

        return $this->Primitive($producer->averageReview);
    }

    public function includeCategories(Producer $producer)
    {
        $categories = collect($producer->categories)->transformWith(new CategoryTransformer())->toArray()['data'];

        return $this->Primitive($categories);
    }

    public function includeContacts(Producer $producer)
    {
        $contacts = collect($producer->contacts)->transformWith(new ContactTransformer())->toArray()['data'];

        return $this->Primitive($contacts);
    }
}
