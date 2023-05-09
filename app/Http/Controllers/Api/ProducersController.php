<?php

namespace App\Http\Controllers\Api;

use App\Dto\ListProducersInputDto;
use App\Http\Controllers\Api\BaseApiController;
use App\Http\Requests\ListProducersRequest;
use App\Http\Services\ProducerService;
use App\Http\Traits\TransformerTrait;
use App\Models\Producer;
use App\Traits\CoordinatesTrait;
use App\Transformers\Api\ProducerTransformer;
use Illuminate\Http\Request;
use MatanYadaev\EloquentSpatial\Objects\Point;

class ProducersController extends BaseApiController
{
    use TransformerTrait, CoordinatesTrait;

    public function __construct(private ProducerService $producerService) {}

    public function list(ListProducersRequest $request)
    {
        $dto = ListProducersInputDto::fromRequest($request);

        $includes = ['address'];
        if ($dto->coordinates) {
            $includes[] = 'distance';
        }

        if ($dto->paginate) {
            $products = $this->producerService->listPaginated($dto);
            $products = $this->transformPaginatedCollection($products, new ProducerTransformer(), $includes);
        } else {
            $products = $this->producerService->list($dto);
            $products = $this->transformCollection($products, new ProducerTransformer(), $includes);
        }

        return $this->sendResponse($products);
    }

    public function getById(Request $request, Producer $producer) {
        $coordinates = $this->getCoordinatesFromRequest($request);
        if ($coordinates) {
            $address = $producer->address;
            $producer->address = $address ? $address->loadDistance($coordinates) : null;
        }

        $producer = fractal($producer, ProducerTransformer::class)
            ->parseIncludes($request->get('include'))
            ->toArray();

        return $this->sendResponse($producer);
    }

    public function getBestRated(Request $request) {
        $limit = $request->input('limit') ?? config('models.list_default_max_items');

        $includes = $request->get('include') ? explode(',', $request->get('include')) : [];

        $items = $this->transformCollection(
            $this->producerService->getBestRated($limit),
            new ProducerTransformer(),
            $includes
        );

        return $this->sendResponse($items);
    }
}
