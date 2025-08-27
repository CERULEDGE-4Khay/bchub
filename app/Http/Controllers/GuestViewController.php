<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class GuestViewController extends Controller
{
    public function welcome()
    {
        $rooms = \App\Models\Room::with(['inventoryItems.inventory', 'images'])->get();
        return view('welcome', compact('rooms'));
    }

    public function roomDetail(Room $room)
    {
        $room->load(['inventoryItems', 'images']);
        return view('lihatdetail', compact('room'));
    }
}
