<?php

namespace App\Models;

use App\Enums\Availability;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailabilityProduct extends Model
{
    use HasFactory;

    function toArray() {
        return [
            'value' => $this->availability,
            'label' => Availability::getLabel($this->availability)
        ];
    }
}
