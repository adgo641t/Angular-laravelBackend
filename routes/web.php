<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes

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


//** GETS */
Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::view('/login', 'login')->name('login');
Route::get('/ShowGame', [HomeController::class, 'ShowTable'])->name('Show');
Route::get('/ShowUsers',[HomeController::class, 'ShowUsers'])->middleware('auth')->name('ShowUsers');
Route::get('/logout', [DbController::class, 'logout']);
Route::get('/edit/{user}',[DbController::class, 'EditUser'])->name('edit');


//** POSTS */
Route::post('/login', [DbController::class,'login'])->name('login');
Route::post('/register', [DbController::class,'RegisterUser'])->name('register');

//** PUTS */
Route::put('/update/{user}',[DbController::class, 'Update'])->name('update');

//** DELETE */
Route::delete('/delete/{user}',[DbController::class, 'Delete'])->name('delete');





