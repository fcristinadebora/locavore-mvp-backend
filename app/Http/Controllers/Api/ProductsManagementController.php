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

class ProductsManagementController extends BaseApiController
{
    use TransformerTrait;

    public function __construct()
    {
    }
}
