<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReserveController;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/reserve', function () {
    return view('reserve');
});

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
 Route::post('/reserve', [ReserveController::class, 'store'])->middleware('auth')->name('reserve.store');
 Route::get('/reserve', [ReserveController::class, 'create'])->middleware('auth')->name('reserve.create');
