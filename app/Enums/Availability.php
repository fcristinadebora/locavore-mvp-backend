<?php

namespace App\Enums;

use App\Enums\Language;
 
enum Availability:string {
    case PROMPT_DELIVERY = 'prompt_delivery';
    case TO_ORDER = 'to_order';

    public function label(): string {
        return static::getLabel($this);
    }

    public static function getLabel(self $value, string $language = Language::PT_BR): string {
        if ($language == Language::PT_BR) {
            return match ($value) {
                Availability::PROMPT_DELIVERY => 'Pronta entrega',
                Availability::TO_ORDER => 'Sob encomenda',
            };
        }        
    }
}