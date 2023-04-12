<?php

namespace App\Dto;

class ProductDto {
  public function __construct(
    private string $name,
    private string $email,
    private string $password
  ) {}

  public function __get($prop)
  {
    return $this->$prop;
  }
}