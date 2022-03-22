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
use App\Http\Controllers\FormController;
use App\Http\Controllers\MisreservasController;


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
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/misreservas', [MisreservasController::class, 'index'])->name('misreservas');
});

Route::resource('resources', ResourceCRUDController::class);
Route::get('recurso/{resource:name}', [PageController::class, 'resource'])->name('resource');

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

Route::get('/form', [FormController::class, 'index']);
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');


// Route::post('/reserva/{resource_id}', function ($id) {
//     return view('reserva',compact('id'));
// })->name('reserva.store');
Route::get('/reserva',[ReservaController::class,'index'])->name('reserva.index');
Route::get('/reserva/create/resource/{resource_id}', [ReservaController::class, 'create'])->name('reserva.create');
Route::get('/reserva/{reserva_id}',[ReservaController::class,'show'])->name('reserva');
Route::post('/reserva/{resource_id}', [ReservaController::class, 'store'])->name('reserva.store');
