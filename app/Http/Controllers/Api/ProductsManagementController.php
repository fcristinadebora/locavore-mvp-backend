<?php

namespace App\Http\Controllers\Api;

use App\Dto\CreateOrUpdateProductsInputDto;
use App\Dto\ListProductsInputDto;
use App\Http\Requests\CreateOrUpdateProuctRequest;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\ListProductsRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Services\ProductManagementService;
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

class ProductsManagementController extends BaseApiController
{
    use TransformerTrait;

    public function __construct(private ProductManagementService $productManagementService)
    {
    }

    public function list(Request $request) {

        $includes = $request->input('includes') ? explode(',', $request->input('includes')) : [];
        $perPage = $request->input('per_page') ?? 0;
        $page = $request->input('page') ?? 1;
        $search = $request->input('search') ?? '';
        $products = $this->productManagementService->list($search, $page, $perPage);
        $products = $this->transformPaginatedCollection($products, new ProductTransformer(), $includes);

        return $this->sendResponse([
            'success' => true,
            'data' => $products
        ]);
        
    }

    public function getById (Product $product, Request $request) {
        $product->imageUrl = $product->getImageUrl();
        $product->categories = $product->categories;
        
        return $this->sendResponse([
            'success' => true,
            'data' => $product
        ]);
    }

    public function create(CreateProductRequest $request)
    {        
        $dto = CreateOrUpdateProductsInputDto::fromRequest($request);

        return $this->sendResponse([
            'success' => true,
            'product' => fractal(
                $this->productManagementService->create($dto),
                new ProductTransformer()
            )
        ], 201);
    }

    public function update(Product $product, UpdateProductRequest $request)
    {        
        $dto = CreateOrUpdateProductsInputDto::fromRequest($request);

        return $this->sendResponse([
            'success' => true,
            'product' => fractal(
                $this->productManagementService->update($product, $dto),
                new ProductTransformer()
            )
        ]);
    }

    public function delete(Product $product)
    {        
        return $this->sendResponse([
            'success' => $this->productManagementService->delete($product)
        ]);
    }
}
