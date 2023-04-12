<?php

namespace App\Enums;

use App\Enums\Language;
 
enum Availability:string {
    case PROMPT_DELIVERY = 'prompt_delivery';
    case TO_ORDER = 'to_order';

    public static function getLabel(string $value, string $language = ''): string {
        if (!$language) {
            $language = Language::PT_BR;
        }

        if ($language == Language::PT_BR) {
            return match ($value) {
                Availability::PROMPT_DELIVERY->value => 'Pronta entrega',
                Availability::TO_ORDER->value => 'Sob encomenda',
                default => 'unknown'
            };
        }        
    }
}