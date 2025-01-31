<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\RoleController;

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

Route::view('/','index');


Route::get('crear-rol', [RoleController::class,'create']);
Route::get('ver-rol', [RoleController::class,'index']);
Route::get('actualizar-rol', [RoleController::class,'update']);
Route::get('borrar-rol', [RoleController::class,'delete']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
