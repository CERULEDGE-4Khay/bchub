<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'sukses';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Room $room)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'session' => 'required',
            'requirements' => 'nullable|array',
        ]);

        $sessions = [
            '09:00' => ['start' => '09:00', 'end' => '11:00'],
            '11:00' => ['start' => '11:00', 'end' => '13:00'],
            '13:00' => ['start' => '13:00', 'end' => '15:00'],
        ];

        $start = Carbon::parse("{$validated['date']} {$sessions[$validated['session']]['start']}", 'Asia/Jakarta');
        $end   = Carbon::parse("{$validated['date']} {$sessions[$validated['session']]['end']}", 'Asia/Jakarta');

        DB::transaction(function () use ($room, $validated, $request, $start, $end) {
            $booking = $room->bookings()->create([
                'user_id'    => Auth::user()->id,
                'start_time' => $start,
                'end_time'   => $end,
                'status'     => 'pending',
            ]);

            foreach ($room->requirements as $req) {
                $value = null;

                if ($req->type === 'file' && $request->hasFile("requirements.{$req->id}")) {
                    $value = $request->file("requirements.{$req->id}")
                        ->store("bookings/{$booking->id}", 'public');
                } else {
                    $value = $request->input("requirements.{$req->id}");
                }

                $booking->requirementValues()->create([
                    'room_requirement_id' => $req->id,
                    'value' => $value,
                ]);
            }
        });

        return redirect()->route('detai.room', $room)->with('success', 'Booking berhasil diajukan! Tunggu konfirmasi selanjutnya.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
  public function update(Request $request, Booking $booking)
{
    $validated = $request->validate([
        'status' => 'required|in:approved,rejected',
        'note'   => 'nullable|string',
    ]);

    $booking->update([
        'status' => $validated['status'],
        'note'   => $validated['note'],
    ]);

    return redirect()->route('bookings.show', $booking)
        ->with('success', 'Booking berhasil diperbarui!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function events(Room $room)
    {
        $bookings = $room->bookings()
            ->where('status', 'approved')
            ->get();

        $events = $bookings->map(function ($booking) {
            return [
                'id'    => $booking->id,
                'title' => $booking->user->name,
                'start' => $booking->start_time,
                'end'   => $booking->end_time,
            ];
        });

        return response()->json($events);
    }

}
