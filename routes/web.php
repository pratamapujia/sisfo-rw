<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\DashboardController; // Added this line to import DashboardController
use App\Http\Controllers\AdminController; // Added this line to import AdminController
use App\Models\Admin;
use App\Http\Controllers\Rt_idController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', function () {
            // return 'dashboard admin';
            return view('dashboard');
        })->name('dashboard');

        Route::get('/admin', [AdminController::class, 'transferindex'])->name('admin.index');
        Route::get('admin/{id}', [AdminController::class, 'orderdata'])->name('index');
    });

    Route::middleware('role:user')->group(function () {
        Route::get('/dashboard_user', function () {
            // return 'dashboard user';
            return view('dashboard_user');
        })->name('dashboard_user');

        Route::get('penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
        Route::get('penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');
        Route::post('penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
        Route::get('penduduk/{id}/edit', [PendudukController::class, 'edit'])->name('penduduk.edit');
        Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
        Route::delete('penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
        Route::get('/dashboard_user', [DashboardController::class, 'index'])->name('dashboard_user');
        // Route::get('/rt', [Rt_idController::class, 'getRt_id'])->name('rt.index');

    });
});
