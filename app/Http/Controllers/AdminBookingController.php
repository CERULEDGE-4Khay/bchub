<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

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
            'status' => 'required|in:pending,approved,rejected,completed'
        ]);

        $booking->update([
            'status' => $request->status
        ]);

        return redirect()
            ->route('bookings.index')
            ->with('success', "Booking #{$booking->id} berhasil diupdate menjadi {$request->status}.");
    }
}
