<?php

use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\MainController;
use \App\Http\Controllers\CatalogController;
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
//кастомные роуты
Route::get('/', [MainController::class,'index']);
Route::get('/catalog/', [CatalogController::class,'catalog']);
Route::get('/catalog/{section}/', [CatalogController::class,'section']);
Route::get('/catalog/{section}/{product}/', [CatalogController::class,'product']);





//конец


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
