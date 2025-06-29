<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;

// Redirect berdasarkan role
Route::get('/redirect', function () {
    $user = Auth::user();

    if ($user->hasRole('admin')) {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('user.dashboard');
    }
})->middleware('auth');

// Halaman umum
Route::get('/', [HomeController::class, 'index']);
Route::get('/tiket', [TiketController::class, 'index']);
Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
Route::post('/pembelian', [PembelianController::class, 'store'])->name('pembelian.store');

// Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard umum
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

// Route admin
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::resource('users', UserController::class)->except(['create', 'edit', 'update']);
    Route::get('users/export', [UserController::class, 'export'])->name('admin.users.export');
});
