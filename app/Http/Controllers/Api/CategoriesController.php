<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseApiController;
use App\Http\Services\CategoryService;
use App\Transformers\Api\CategoryTransformer;
use Illuminate\Http\Request;

class CategoriesController extends BaseApiController
{
    public function __construct(private CategoryService $categoryService) {}

    public function getAll(Request $request) {
        return fractal($this->categoryService->getAll(), CategoryTransformer::class)->toArray();
    }
}
