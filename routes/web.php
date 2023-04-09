<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;

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
Route::get('/website-doctor', [HomeController::class, 'doctorCategory'])->name('doctor.category');
Route::get('/doctor-details', [HomeController::class, 'doctorDetails'])->name('doctor.details');
