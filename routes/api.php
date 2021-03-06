<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfesoreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactanoController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::post('user/registrar', [UserController::class, 'store']);

Route::post('login', [LoginController::class, 'login']);

Route::get('profesores/inicial', [ProfesoreController::class, 'getDatosInicial'])->middleware('auth:sanctum');

Route::post('contactanos', [ContactanoController::class, 'store']);
