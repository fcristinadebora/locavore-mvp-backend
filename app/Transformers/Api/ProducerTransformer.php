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
        'address',
        'categories'
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
            'name' => $producer->person->user->name,
            'short_description' => $producer->short_description,
            'image' => $producer->person->profile_picture,
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

    public function includeCategories(Producer $producer)
    {
        $categories = collect($producer->categories)->transformWith(new CategoryTransformer())->toArray()['data'];

        return $this->Primitive($categories);
    }
}
