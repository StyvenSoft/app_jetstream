#!/bin/bash

composer global require laravel/installer

laravel new example-app --jet

cd example-app

php artisan migrate

npm i

npm run dev

php artisan server