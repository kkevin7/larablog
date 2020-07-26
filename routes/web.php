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

Route::get('/hola/{nombre}/{apellido}', function ($nombre = "Usuario", $apellido = "Gónzales") {
    return "Hola $nombre $apellido conocenos: <a href='".route("nosotros")."'>nosotros</a>";
});

Route::get('/sobre-nosotros', function ($nombre = "Usuario") {
    return "<h1>Toda la información sobre nosotros</h1>";
})->name("nosotros");

Route::get('/home/{nombre?}/{apellido?}' , function ($nombre = "Usuario", $apellido = "Gónzales") {
    $posts = ["Post1","Post2","Post3", "post4"];
    $posts2 = [];
    return view("home", ['nombre' => $nombre, 'apellido' => $apellido, "posts" => $posts, "posts2" => $posts2]);
})->name("home");

// Route::get('index', 'PostController@index');
Route::resource('dashboard/post', 'dashboard\PostController');