<?php

namespace App\Enums;

enum QuestionType:string{
    case SHORT_TEXT = 'shortText';
    case LONG_TEXT = 'longText';
    case OPTIONS = 'options';
}