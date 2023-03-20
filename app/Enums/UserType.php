<?php

namespace App\Enums;

enum UserType:string{
    case PRODUCER = 'producer';
    case CONSUMER = 'consumer';
    case PRODUCER_AND_CONSUMER = 'producerAndConsumer';
}