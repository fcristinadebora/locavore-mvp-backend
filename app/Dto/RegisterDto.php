<?php

namespace App\Dto;

class RegisterDto {
  public function __construct(
    private string $name,
    private string $email,
    private string $password,
    private string $type
  ) {}

  public function __get($prop)
  {
    return $this->$prop;
  }
}