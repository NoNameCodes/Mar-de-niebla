<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserPendingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResourceCRUDController;

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

Route::middleware(['auth:sanctum', 'verified', 'approved'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');;
});

Route::resource('resources', ResourceCRUDController::class);

Route::middleware(['auth:sanctum', 'verified', 'approved'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', [HomeController::class, 'approval'])->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('aprove/users', [UserPendingController::class, 'index'])->name('admin.users.pending.index');
        Route::get('aprove/users/{user_id}/', [UserPendingController::class, 'approve'])->name('admin.users.approve');
        Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('users/{user_id}/delete', [UserController::class, 'delete'])->name('admin.users.delete');
    });
});
Route::get('/reserve', function () {
    return view('reserve');
});

Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
Route::post('/reserve', [ReserveController::class, 'store'])->middleware('auth')->name('reserve.store');
Route::get('/reserve', [ReserveController::class, 'create'])->middleware('auth')->name('reserve.create');
