<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('proovedor','App\Http\Controllers\ProovedorController')->middleware('auth');
Route::resource('clientes','App\Http\Controllers\ClienteController')->middleware('auth');
Route::resource('libros','App\Http\Controllers\LibroController')->middleware('auth');
Route::resource('prestamo','App\Http\Controllers\PrestamoController')->middleware('auth');
Route::get('download-pdf','App\Http\Controllers\ProovedorController@generarPdf')->name('pdf_p');
Route::get('download-pdf1','App\Http\Controllers\LibroController@generarPdf')->name('pdf_l');
Route::get('download-pdf2','App\Http\Controllers\PrestamoController@generarPdf')->name('pdf_pres');
Route::get('download-pdf3','App\Http\Controllers\ClienteController@generarPdf')->name('pdf_c');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
