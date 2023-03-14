# Project Setup

1. cp .env.example .env
2. composer install
3. php artisan key:generate
3. php artisan apikey:generate apikeyname to be able to consume the api
4. make sail_start
4. make container_migration