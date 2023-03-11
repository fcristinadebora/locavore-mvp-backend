<?php

namespace App\Transformers\Api;

use App\Models\Address;
use League\Fractal\TransformerAbstract;

class AddressTransformer extends TransformerAbstract
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
    public function transform(Address $address)
    {
        $data = [
            'id' => $address->id,
            'city_id' => $address->city_id,
            'location' => $address->location,
            'city' => $address->city,
            'address' => $address->address
        ];

        if (isset($address->distance)) {
            $data['distance'] = round($address->distance, 2);
        }

        return $data;
    }
}
