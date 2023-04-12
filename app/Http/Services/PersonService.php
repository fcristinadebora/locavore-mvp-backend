<?php

namespace App\Http\Services;

use App\Models\Person;

class PersonService
{
    public function createPerson(int $userId): Person
    {
        return Person::create([
            'user_id' => $userId
        ]);
    }
}