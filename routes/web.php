<?php

use App\Http\Controllers\AdminAccountController;
use App\Http\Controllers\AdminBookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GuestViewController;
use App\Http\Controllers\RoomController;

Route::get('/', [GuestViewController::class, 'welcome'])->name('welcome');
Route::get('lihatdetail/{room}', [GuestViewController::class, 'roomDetail'])->name('detai.room');
Route::get('berita', function () {
    return view('berita');
});
Route::get('artikel', function () {
    return view('artikel');
});



Route::delete('/rooms/images/{image}', [RoomController::class, 'destroyImage'])->name('rooms.images.destroy');
Route::get('rooms/{room}/bookings/events', [BookingController::class, 'events'])
    ->name('rooms.bookings.events');

Route::prefix('dashboard')->middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->group(function() {
        Route::get('/', [DashboardController::class,'index'])->name('dashboard.admin');

        Route::resource('rooms', RoomController::class);
        Route::resource('accounts', AdminAccountController::class);
        Route::resource('inventories', InventoryController::class);
        Route::resource('bookings', AdminBookingController::class)->only([
            'index', 'show', 'update'
        ]);
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('rooms.bookings', BookingController::class)->only([
        'index', 'create', 'store', 'show'
    ]);
});

// halaman setelah login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

require __DIR__.'/auth.php';
