<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CarModelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransportController;

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

Route::get('/', HomeController::class)->name('home');

Route::resource('/manufacturers', ManufacturerController::class);
// Route::resource('/car_models', CarModelController::class);
// Route::resource('/transports', TransportController::class);

