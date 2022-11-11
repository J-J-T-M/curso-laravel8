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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::view('/lista', 'lista');

// Route::get('/lista', function () {
//     return "Curso de laravel8";
// });

// Route::view('/lista', 'lista', ['name' => 'Estudar']);
Route::get('/lista/{name?}', function ($name = null) {
    return view('lista', ['itens' => $name]);
})->where('name', '[A-Za-z]+');
