<?php

namespace App\Dto\Traits;

use App\Dto\PaginationInputDto;
use Illuminate\Http\Request;

trait HasPaginationTrait {

    public function getPaginationFromRequest(Request $request): ?PaginationInputDto
    {
        $currentPage = $request->input("page") ?? 1;
        $perPage = $request->input("perPage") ?? 15;

        return new PaginationInputDto($currentPage, $perPage);
    }
}