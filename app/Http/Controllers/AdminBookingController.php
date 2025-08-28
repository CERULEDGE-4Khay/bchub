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
}
