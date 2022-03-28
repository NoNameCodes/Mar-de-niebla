<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserPendingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ResourceCRUDController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MisreservasController;

Route::middleware(['auth:sanctum', 'verified', 'approved', 'user'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');;
    Route::get('/form', [FormController::class, 'index']);
    Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/reserva', [ReservaController::class, 'index'])->name('reserva.index');
    Route::get('/reserva/create/resource/{resource_id}', [ReservaController::class, 'create'])->name('reserva.create');
    Route::get('/reserva/{reserva_id}', [ReservaController::class, 'show'])->name('reserva');
    Route::post('/reserva/{resource_id}', [ReservaController::class, 'store'])->name('reserva.store');
    Route::resource('resources', ResourceCRUDController::class);
    Route::get('recurso/{resource:name}', [PageController::class, 'resource'])->name('resource');
    Route::get('/approval', [HomeController::class, 'approval'])->name('approval');
    Route::get('/misreservas', [MisreservasController::class, 'index'])->name('misreservas');

});

Route::middleware(['auth:sanctum', 'verified', 'approved','admin'])->group(function () {
    Route::get('users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('users/{user_id}/delete', [UserController::class, 'delete'])->name('admin.users.delete');
    Route::get('aprove/users', [UserPendingController::class, 'index'])->name('admin.users.pending.index');
    Route::get('aprove/users/{user_id}/', [UserPendingController::class, 'approve'])->name('admin.users.approve');
});
