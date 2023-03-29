<?php

namespace App\Http\Controllers\Api;

use App\Dto\ListProductsInputDto;
use App\Http\Requests\ListProductsRequest;
use Illuminate\Http\Request;
use App\Http\Services\ProductService;
use App\Http\Traits\TransformerTrait;
use App\Models\Product;
use App\Transformers\Api\ProductTransformer;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection as SupportCollection;
use League\Fractal\TransformerAbstract;
use MatanYadaev\EloquentSpatial\Objects\Point;

class ProductsController extends BaseApiController
{
    use TransformerTrait;

    public function __construct(private ProductService $productService)
    {
    }

    public function list(ListProductsRequest $request)
    {
        $dto = ListProductsInputDto::fromRequest($request);

        $includes = ['address'];
        if ($dto->coordinates) {
            $includes[] = 'distance';
        }

        if ($dto->paginate) {
            $products = $this->productService->listPaginated($dto);
            $products = $this->transformPaginatedCollection($products, new ProductTransformer(), $includes);
        } else {
            $products = $this->productService->list($dto);
            $products = $this->transformCollection($products, new ProductTransformer(), $includes);
        }

        return $this->sendResponse($products);
    }

    public function getById(Product $product, Request $request)
    {
        if  ($request->get('lat') && $request->get('lng')) {
            $coordinates = new Point($request->get('lat'), $request->get('lng'), config('spatial.default_srid'));
            $address = $product->producer->address;
            $product->producer->address = $address->loadDistance($coordinates);
        }

        $product = fractal($product, ProductTransformer::class)
            ->parseIncludes($request->get('include'))
            ->toArray();

        return $this->sendResponse($product);
    }

    public function getBestRated(Request $request) {
        $limit = $request->input('limit') ?? config('models.list_default_max_items');

        $includes = $request->get('include') ? explode(',', $request->get('include')) : [];

        $items = $this->transformCollection(
            $this->productService->getBestRated($limit),
            new ProductTransformer(),
            $includes
        );

        return $this->sendResponse($items);
    }
}
