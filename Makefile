DC = $(shell which docker-compose)

prepare:
	${DC} build --no-cache
	${DC} run php-fpm composer install

up:
	${DC} up

down:
	${DC} down

test:
	${DC} run php-fpm composer test

test-cov:
	${DC} run php-fpm composer coverage