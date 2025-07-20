<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login'); // Arahkan root ke halaman login
});

// Route yang hanya bisa diakses oleh user yang sudah login
Route::middleware(['auth'])->group(function () {
    
    // Dashboard Controller
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD Karyawan
    Route::resource('karyawan', KaryawanController::class);

    // CRUD Gaji
    Route::resource('gaji', GajiController::class);

    // (Opsional) Halaman pengaturan profil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Tambahkan semua route autentikasi (login, register, forgot password, dll)
require __DIR__.'/auth.php';
