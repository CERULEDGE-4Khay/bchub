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
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'capacity'    => 'required|integer|min:1',
            'floor'       => 'required|string',
            'inventories' => 'nullable|array', // checkboxes
            'inventories_qty' => 'nullable|array', // input qty
        ]);

        DB::transaction(function () use ($validated) {
            // Buat room
            $room = Room::create([
                'name'        => $validated['name'],
                'description' => $validated['description'] ?? null,
                'capacity'    => $validated['capacity'],
                'floor'       => $validated['floor'],
            ]);

            // Jika ada inventaris dipilih
            if (!empty($validated['inventories'])) {
                foreach ($validated['inventories'] as $inventoryId => $checked) {
                    $qty = $validated['inventories_qty'][$inventoryId] ?? 0;

                    if ($qty > 0) {
                        $inventory = Inventory::findOrFail($inventoryId);

                        // Cek stok cukup
                        if ($inventory->quantity < $qty) {
                            throw new \Exception("Stok {$inventory->name} tidak mencukupi.");
                        }

                        // Kurangi stok global
                        $inventory->decrement('quantity', $qty);

                        // Simpan pivot
                        $room->inventories()->attach($inventoryId, [
                            'quantity' => $qty,
                        ]);
                    }
                }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
