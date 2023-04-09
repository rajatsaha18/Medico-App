<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\admin\DashboardController;

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

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
