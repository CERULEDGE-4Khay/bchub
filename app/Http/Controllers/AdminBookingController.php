<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Notifications\BookingStatusNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;
class AdminBookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with(['room', 'user'])
            ->latest()
            ->paginate(10);

        return view('dashboard.admin.booking.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        $booking->load(['room', 'user', 'requirementValues.requirement']);

        return view('dashboard.admin.booking.show', compact('booking'));
    }

    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected,completed',
            'note'   => 'nullable|string',
        ]);

        $booking->update([
            'status' => $request->status,
            'note'   => $validated['note'] ?? null,
        ]);

          try {
            $booking->user->notify(new BookingStatusNotification($booking, $validated['note'] ?? null));
        } catch (\Throwable $e) {
            Log::error('Notif booking gagal: '.$e->getMessage());
            // (opsional) biar tetap ada in-app notif walau email gagal:
            \Illuminate\Support\Facades\Notification::send($booking->user, new BookingStatusNotification($booking, $validated['note'] ?? null));
        }

        return redirect()
            ->route('bookings.index')
            ->with('success', "Booking #{$booking->id} berhasil diupdate menjadi {$request->status}.");
    }
}
