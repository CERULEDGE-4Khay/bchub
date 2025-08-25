<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('berita', function () {
    return view('berita');
});
Route::get('lihatdetail', function () {
    return view('lihatdetail');
});

Route::prefix('dashboard')->middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->group(function() {
        Route::get('/', function() {
            return view('dashboard.admin.index');
        })->name('dashboard.admin');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login.form');

Route::get('/register', function () {
    return view('auth.register');
})->name('register.form');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// halaman setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

require __DIR__.'/auth.php';
