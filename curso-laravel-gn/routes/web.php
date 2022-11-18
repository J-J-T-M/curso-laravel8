<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/lista/{id?}/{name?}', function ($id = null, $name = null) {
//     return view('lista', ['id' => $id,'itens' => $name]);
// })->where(['id'=>'[0-9]+','name'=> '[A-Za-z]+']);

// Route::get('/lista', function () {
//     return view('lista');
// });

// Route::get('/home', function () {
//     return view('welcome');
// })->name('home-index');

Route::prefix('tarefas')->group(function(){
    Route::get('/', [TaskController::class, 'index'])->name('tarefas-index');

    Route::get('/create', [TaskController::class, 'create'])->name('tarefas-create');

    Route::post('/', [TaskController::class, 'store'])->name('tarefas-store');

    Route::get('{id}/edit', [TaskController::class, 'edit'])->where('id','[0-9]+')->name('tarefas-edit');

    Route::put('/{id}', [TaskController::class, 'update'])->where('id','[0-9]+')->name('tarefas-update');

    Route::delete('/{id}', [TaskController::class, 'destroy'])->where('id','[0-9]+')->name('tarefas-destroy');

});

Route::get('/lista', [TaskController::class, 'index']);

