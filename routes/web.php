<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

require __DIR__.'/auth.php';
