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

// Inicio
Route::get('/', [App\Http\Controllers\WebController::class, 'inicio'])->name('web.inicio');
Route::get('/contacto', [App\Http\Controllers\WebController::class, 'contacto'])->name('web.contacto');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
