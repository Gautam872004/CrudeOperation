<?php

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
use App\Http\Controllers\crudoperation;

Route::get('/product',[crudoperation::class,"productview"]);

Route::post('/insertproduct',[crudoperation::class,"insertproduct"]);

Route::get('/viewproduct',[crudoperation::class,"viewproduct"]);

Route::get('/deleteproduct/{id}',[crudoperation::class,"deleteproduct"]);

Route::get('/editproduct/{id}',[crudoperation::class,"editproduct"]);

Route::post('/updateproduct/{id}',[crudoperation::class,"updateproduct"]);

?>