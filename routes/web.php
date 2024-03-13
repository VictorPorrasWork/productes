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

Route::get('/', function () {
    return view('welcome');
});

// Productes
Route::get('/productes', [App\Http\Controllers\ProducteController::class, 'index'])->name('productes.index');
Route::get('/productes/create', [App\Http\Controllers\ProducteController::class, 'create'])->name('productes.create');
Route::post('/productes/store', [App\Http\Controllers\ProducteController::class, 'store'])->name('productes.store');
Route::get('/productes/edit/{producte}', [App\Http\Controllers\ProducteController::class, 'edit'])->name('productes.edit');
Route::post('/productes/update/{producte}', [App\Http\Controllers\ProducteController::class, 'update'])->name('productes.update');
Route::get('/productes/destroy/{producte}', [App\Http\Controllers\ProducteController::class, 'destroy'])->name('productes.destroy');