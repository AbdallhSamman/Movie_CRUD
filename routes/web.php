<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\MovieController;
use App\HTTP\Controllers\RegesterController;
use App\HTTP\Controllers\SessionController;
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

Route::resource('/index',MovieController::class);


Route::get('/regester',[RegesterController::class,'create'])->middleware('guest');
Route::post('/regester',[RegesterController::class,'store'])->middleware('guest');


Route::post('/logout',[SessionController::class,'destroy'])->middleware('auth');


Route::get('/login',[SessionController::class,'create'])->middleware('guest');
Route::post('/login',[SessionController::class,'store'])->middleware('guest')->name('login');

