<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


Route::get('/', [App\Http\Controllers\pages\HomeController::class, 'home'])->name("dashboard");
Route::get('/category', [App\Http\Controllers\pages\HomeController::class, 'category'])->name("category");
Route::get('/author', [App\Http\Controllers\pages\HomeController::class, 'autor'])->name("author");
Route::get('borrowings', [App\Http\Controllers\pages\HomeController::class, 'borrowings'])->name("borrowings");
