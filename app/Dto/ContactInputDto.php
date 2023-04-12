<?php

namespace App\Dto;

class ContactInputDto {
  public function __construct(
    public string $type,
    public string $value
  ) {}

  public function __get($prop)
  {
    return $this->$prop;
  }
}