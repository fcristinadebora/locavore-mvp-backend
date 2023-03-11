<?php

namespace App\Http\Traits;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use League\Fractal\TransformerAbstract;

trait TransformerTrait {
    public function transformPaginatedCollection (LengthAwarePaginator $paginator, TransformerAbstract $transformer, array $includes = []): LengthAwarePaginator
    {
        $transformedItems = collect(
            $paginator->getCollection()
                ->transformWith($transformer)
                ->parseIncludes($includes)
                ->toArray()['data']
        );
        
        return $paginator->setCollection($transformedItems);
    }

    public function transformCollection (EloquentCollection $collection, TransformerAbstract $transformer, array $includes = []): Collection
    {
        $transformedItems = collect(
            $collection->transformWith($transformer)
                ->parseIncludes($includes)
                ->toArray()['data']
        );
        
        return $transformedItems;
    }
}