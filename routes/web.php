<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
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

Route::resource('profiles',ProfileController::class) ;
Route::resource('publications',PublicationController::class)  ; 
Route::get('/login',[LoginController::class,'show'])->name('login.show'); 
Route::post('/login',[LoginController::class,'login'])->name('login'); 
Route::get('/logout',[LoginController::class,'logout'])->name('logout') ; 