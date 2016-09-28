# laravel 5.3 Dingo Rest Api Seed

Start quicky building you own api.

## Requirements

* Php 5.6 
 * php5.6-mbstring
 * php5.6-sqlite

## Installation

* git clone https://github.com/eleiva/laravel5.3-dingo-restful-seed.git
* composer install
* composer dump-autoload
* cp .env.sample .env
* touch database/database.sqlite
* php artisan migrate:refresh --seed
* php artisan serve
* done!


## Postman collection
https://www.getpostman.com/collections/f728a0b06fce2d6dbde3

```
GET -> http://localhost:8000/api/users
GET -> http://localhost:8000/api/users/1
POST -> http://localhost:8000/api/users
PUT -> http://localhost:8000/api/users/1
DELETE -> http://localhost:8000/api/users/1
```

## Tools and components

* Fractal (http://fractal.thephpleague.com/)
* Dingo (https://github.com/dingo/api)
