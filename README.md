# Project Setup

1. Clone .env file and setup the settings
```sh
cp .env.example .env
````

2. Install dependencies
```sh
composer install
````

3. Setup security to be able to consume the API
```sh
php artisan passport:install && \
php artisan key:generate && \
php artisan apikey:generate apikeyname
```

4. Start development containers
```sh
make sail_start
```

5. Run migrations
```sh
make migrate
```

5. Run initial data seeder
```sh
make initial_seed
```

# Notes:
See [Makefile](Makefile) for more shortcuts