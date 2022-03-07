<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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


Route::prefix("categories")->group(function (){
    Route::get('/index',[CategoryController::class,"index"])->name('categories.index');
    Route::get('/{id}/destroy',[CategoryController::class,"destroy"])->name('categories.destroy');
    Route::get('/{id}/show',[CategoryController::class,"show"])->name('categories.show');
    Route::get('/create',[CategoryController::class,"create"])->name('categories.category');
    Route::post('/create',[CategoryController::class,"store"])->name('categories.store');
    Route::post('{id}/update',[CategoryController::class,"update"])->name('categories.update');
    Route::get('{id}/update',[CategoryController::class,"edit"])->name('categories.edit');

});

Route::prefix("users")->group(function (){
    Route::get('/index',[UserController::class,"index"])->name('users.index');
    Route::get('/{id}/destroy',[UserController::class,"destroy"])->name('users.destroy');
    Route::get('/{id}/show',[UserController::class,"show"])->name('users.show');
    Route::get('/create',[UserController::class,"create"])->name('users.category');
    Route::post('/create',[UserController::class,"store"])->name('users.store');
    Route::post('{id}/update',[UserController::class,"update"])->name('users.update');
    Route::get('{id}/update',[UserController::class,"edit"])->name('users.edit');

});