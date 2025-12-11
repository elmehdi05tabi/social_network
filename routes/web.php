<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/',[ProfileController::class,'index'])->name('profile.index');
// Route::get('/profile/{profile}/edit',[ProfileController::class,'edit'])->name('profile.edit') ;
// Route::get('profile/create',[ProfileController::class,'create'])->name('profile.create') ;
// Route::post('profile/store',[ProfileController::class,'store'])->name('profile.store');
Route::resource('profiles',ProfileController::class) ;