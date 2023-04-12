<?php

namespace App\Exceptions;

use Exception;

class ReviewAlreadySubmitedException extends Exception
{
    public function __construct(int $personId)
    {
        parent::__construct("Review already submitted by Person with ID {$personId}", 400);
    }
}
