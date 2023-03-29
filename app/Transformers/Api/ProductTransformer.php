<?php

namespace App\Transformers\Api;

use App\Enums\Availability;
use App\Models\Address;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use League\Fractal\ParamBag;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;
use League\Fractal\Resource\Item;
use League\Fractal\Resource\Primitive;

class ProductTransformer extends TransformerAbstract
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
        'description',
        'address',
        'availability',
        'categories',
        'producer',
        'is_current_user_favorite',
        'average_review'
    ];
    
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Product $product)
    {
        return [
            'id' => $product->id,
            'product_id' => $product->producer_id,
            'name' => $product->name,
            'image' => $product->getImageUrl(),
            'price' => round($product->price, 2),
            'description' => $product->description,
            'unit_of_price' => $product->unit_of_price
        ];
    }

    public function includeDescription(Product $product)
    {
        return new Primitive($product->description);
    }

    public function includeAvailability(Product $product)
    {
        return new Primitive($product->availability, function ($availabilityCollection) {
            return $availabilityCollection->toArray();
        });
    }

    public function includeCategories(Product $product)
    {
        $categories = collect($product->categories)->transformWith(new CategoryTransformer())->toArray()['data'];

        return new Primitive($categories);
    }

    public function includeAverageReview(Product $product)
    {
        if ($product->reviews_avg_rate) {
            return new Primitive((float) $product->reviews_avg_rate);
        }

        return new Primitive($product->averageReview);
    }

    public function includeAddress(Product $product): ?Item
    {
        if (empty($product->producer->address)) {
            return null;
        }

        return $this->item($product->producer->address, new AddressTransformer);
    }

    public function includeProducer(Product $product): ?Item
    {
        return $this->item($product->producer, new ProducerTransformer);
    }
}
