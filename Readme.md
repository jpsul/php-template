# PHP template for dockerized development

## Composer
Install composer dependencies
> docker-compose run composer install
Update composer dependencies
> docker-compose run composer update

## PHP CLI
Run php from command line
> docker-compose run php --v

## PHPUnit
Run PHPUnit tests
> docker-compose run phpunit

## Web server
Start PHP-fpm and Nginx webserver
> docker-compose up -d fpm nginx

Start PHP-fpm, Nginx webserver and Mariadb
> docker-compose up -d fpm nginx test-mariadb

Note: If you want to have persistent DB storage uncomment last lines in docker-compose.yml file.