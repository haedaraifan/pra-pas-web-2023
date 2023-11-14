<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Handphone;
use App\Http\Controllers\HandphoneController;
use App\Models\Laptop;
use App\Http\Controllers\LaptopController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/handphone', [HandphoneController::class, 'index']);

Route::get('/handphone/{handphone}', [HandphoneController::class, 'show']);

Route::get('/laptop', [LaptopController::class, 'index']);

Route::get('/laptop/{laptop}', [LaptopController::class, 'show']);