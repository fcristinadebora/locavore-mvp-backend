sail_start:
	./vendor/bin/sail up

backend_exec_it:
	docker exec -it locavore-mvp-backend-laravel.test-1 /bin/bash

exec_backend:
	docker exec locavore-mvp-backend-laravel.test-1

apikey_generate:
	docker exec locavore-mvp-backend-laravel.test-1 php artisan apikey:generate $(name)

migrate:
	docker exec locavore-mvp-backend-laravel.test-1 php artisan migrate

rollback:
	docker exec locavore-mvp-backend-laravel.test-1 php artisan migrate:rollback 

seed:
	docker exec locavore-mvp-backend-laravel.test-1 php artisan db:seed

passport_install:
	docker exec locavore-mvp-backend-laravel.test-1 php artisan passport:install