<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\PartidaController;
use App\Http\Controllers\DbController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('/Rankings', PartidaController::class);
//Route::delete('/delete/{id}', PartidaController::class);

Route::post('/login', [DbController::class,'login']);
Route::post('/register', [DbController::class,'RegisterUser']);
//Route::post('/delete/{id}', [DbController::class,'Delete']);

//Route::post('login', 'LoginController@login');


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
