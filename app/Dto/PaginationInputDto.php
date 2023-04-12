<?php

namespace App\Dto;

class PaginationInputDto {
  public function __construct(
    private int $currentPage,
    private int $perPage
  ) {}

  public function __get($prop)
  {
    return $this->$prop;
  }
}