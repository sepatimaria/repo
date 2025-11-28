<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;

use App\Http\Controllers\WargaController;

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
Route::get('/', [PagesController::class, 'homepage']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/warga', [WargaController::class, 'index']);
Route::get('/warga/create', [WargaController::class, 'create']);
Route::post('/warga', [WargaController::class, 'store']);







