<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolasController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("paises/get", [ConsolasController::class, "getPaises"]);

Route::get("registros/get", [ConsolasController::class, "getRegistros"]);

Route::post("registros/post", [ConsolasController::class,"crearRegistros"]);
Route::post("registros/delete", [ConsolasController::class,"eliminarRegistro"]);

