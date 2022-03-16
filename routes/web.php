<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CPController;
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

Route::get('/colonia/search',[CPController::class,'buscarCodigo'])->name('buscar.codigo');
Route::get('/municipio/{id}',[CPController::class,'mostrarMunicipo'])->name('mostrarMunicipo.codigo');
Route::get('/ciudad/{id}',[CPController::class,'mostrarCiudad'])->name('mostrarCiudad.codigo');
Route::get('/search', function () {return view('index');})->name('index');
Route::get('', function () {return view('index');})->name('index');