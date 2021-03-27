#!/bin/bash

composer global require laravel/installer

laravel new example-app --jet

cd example-app

php artisan migrate

npm i

npm run dev

php artisan server

# Crear controlador basico

php artisan make:controller NameController

# Crear controlador CRUD completo

php artisan make:controller CrudController --resource

# Comando para crear una Tabla

php artisan make:migration create_name_table


# Creando modelos de clase

php artisan make:model Name

# Instalar dashboard laravel admin LTE

composer require jeroennoten/laravel-adminlte

php artisan adminlte:install