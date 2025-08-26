<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('dashboard.admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inventories = Inventory::all();
        return view('dashboard.admin.room.create', compact('inventories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'description'      => 'nullable|string',
            'capacity'         => 'required|integer|min:1',
            'floor'            => 'required|string',
            'inventories'      => 'nullable|array',
            'inventories_qty'  => 'nullable|array',
        ]);

        DB::transaction(function () use ($validated) {
            // Buat room baru
            $room = Room::create([
                'name'        => $validated['name'],
                'description' => $validated['description'] ?? null,
                'capacity'    => $validated['capacity'],
                'floor'       => $validated['floor'],
            ]);

            // Simpan pivot inventory_room
            if (!empty($validated['inventories'])) {
                $inventoriesToAttach = [];

                foreach ($validated['inventories'] as $inventoryId => $checked) {
                    $qty = $validated['inventories_qty'][$inventoryId] ?? 0;

                    if ($qty > 0) {
                        $inventoriesToAttach[$inventoryId] = ['quantity' => $qty];
                    }
                }

                $room->inventories()->attach($inventoriesToAttach);
            }
        });

        return redirect()->route('rooms.index')->with('success', 'Room berhasil dibuat.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        $inventories = Inventory::all();

        // bikin array [inventory_id => qty]
        $roomInventories = $room->inventories->pluck('pivot.quantity', 'id')->toArray();

        return view('dashboard.admin.room.edit', compact('room', 'inventories', 'roomInventories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'description'      => 'nullable|string',
            'capacity'         => 'required|integer|min:1',
            'floor'            => 'required|string',
            'inventories'      => 'nullable|array',
            'inventories_qty'  => 'nullable|array',
        ]);

        DB::transaction(function () use ($validated, $room) {
            // Update data room
            $room->update([
                'name'        => $validated['name'],
                'description' => $validated['description'] ?? null,
                'capacity'    => $validated['capacity'],
                'floor'       => $validated['floor'],
            ]);

            $inventoriesToSync = [];

            if (!empty($validated['inventories'])) {
                foreach ($validated['inventories'] as $inventoryId => $checked) {
                    $qty = $validated['inventories_qty'][$inventoryId] ?? 0;

                    if ($qty > 0) {
                        $inventoriesToSync[$inventoryId] = ['quantity' => $qty];
                    }
                }
            }

            // Sync pivot inventory_room
            $room->inventories()->sync($inventoriesToSync);
        });

        return redirect()->route('rooms.index')->with('success', 'Room berhasil diperbarui.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room, Inventory $inventory)
    {
        DB::transaction(function () use ($room) {
            $room->inventories()->detach();
            $room->delete();
        });
        return redirect()->route('rooms.index')->with('success', 'Room berhasil dihapus.');
    }
}
