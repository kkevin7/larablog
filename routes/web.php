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

Route::get('/test', function () {
    return "Hola Mundo";
});

Route::get('/hola/{nombre}', function ($nombre = "Usuario") {
    return "Hola $nombre conocenos: <a href='".route("nosotros")."'>nosotros</a>";
});


Route::get('/sobre-nosotros', function ($nombre = "Usuario") {
    return "<h1>Toda la información sobre nosotros</h1>";
})->name("nosotros");