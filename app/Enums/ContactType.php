<?php

namespace App\Enums;

use App\Enums\Language;
 
enum ContactType:string {
    case WHATSAPP = 'whatsapp';
    case PHONE = 'phone';
    case EMAIL = 'email';
    case INSTAGRAM = 'instagram';
    case FACEBOOK = 'facebook';
    case WEBSITE = 'website';

    public static function getLabel(string $value, string $language = ''): string {
        if (!$language) {
            $language = Language::PT_BR;
        }

        if ($language == Language::PT_BR) {
            return match ($value) {
                self::WHATSAPP->value => 'Whatsapp',
                self::PHONE->value => 'Telefone',
                self::EMAIL->value => 'E-mail',
                self::INSTAGRAM->value => 'Instagram',
                self::FACEBOOK->value => 'Facebook',
                self::WEBSITE->value => 'Website',
                default => 'unknown'
            };
        }        
    }
}