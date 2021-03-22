<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Retornando text de prueba
Route::get('/text', function () {
    return 'Welcome text!!';
});

// Retornando array
Route::get('/array', function () {
    $days = ['Monday', 'Tuesday', 'Webnesday', 'Thursday', 'Friday'];
    return $days;
});

// Retornando Parametros
Route::get('/name/{name}', function ($name) {
    return '<h1>My name is: '.$name.'</h1>';
});

// Retorando Parametros por defecto
Route::get('/client/{client}/', function ($client='General CLient') {
    return '<h1>Welcome: '.$client.'</h1>';
});

// Redireccionamiento de rutas

Route::get('/route1', function () {
    return 'View route 1';
})->name('RouteOne');

Route::get('/route2', function () {
    return redirect()->route('RouteOne');
});

// Validación de parametros [A-Za-z]

Route::get('/user/{id}', function ($id) {
    return 'The user id is: '. $id;
})->where('id', '[0-9]+');