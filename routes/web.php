<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);

Route::get('/', [HomeController::class, 'home']);

Route::get('/', [HomeController::class, 'home']);

//Route::get('/user/{id}/name/{name}', [UserController::class,'user']);

//Route::get('/user/{id}/name/{name}', [UserController::class,'user']);

// halaman penjualan
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);

// halaman products
//Route::prefix('category')->group(function (){
    //Route::get('/food_beverage', [ProductsController::class,'food_beverage']);
    //Route::get('/beauty_health', [ProductsController::class,'beauty_health']);
    //Route::get('/home_care', [ProductsController::class,'home_care']);
    //Route::get('/baby_kid', [ProductsController::class,'baby_kid']);
//});