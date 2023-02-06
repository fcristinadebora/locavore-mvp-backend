<?php

namespace App\Exceptions;

use Exception;

class InvalidCredentialsException extends Exception
{
    public function __construct()
    {
        return new Exception("Invalid credentials", "INVALID_CREDENTIALS");
    }
}
