<?php

use App\Http\Controllers\SWELController;
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

Route::get('/', [SWELController::class, 'index']);
Route::get('/about', [SWELController::class, 'about']);
Route::get('/services', [SWELController::class, 'services']);
Route::get('/contact', [SWELController::class, 'contact']);

