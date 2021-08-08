<?php

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

Route::view("/","inicio")->name("inicio");

//Route::get("/registro", function() {
  //  return view("registro");
//});
Route::view("/inicio","inicio")->name("inicio");

Route::view("/registro","registro")->name("registro");
    //  return view("registro");

//Route::get("/tabla_registro", function() {
    //return view("tablaregistro");
//});

//Route::get("/inicio", function() {
    //return view("inicio");
//});

Route::view("/tablaregistro","tablaregistro")->name("tablaregistro");
