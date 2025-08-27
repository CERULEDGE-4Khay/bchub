<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryItem;
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
        $inventoryItems = InventoryItem::with('inventory')
            ->where('status', 'available')
            ->get();

        return view('dashboard.admin.room.create', compact('inventoryItems'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'            => 'required|string|max:255',
            'description'     => 'nullable|string',
            'capacity'        => 'required|integer|min:1',
            'floor'           => 'required|string',
            'inventory_items' => 'nullable|array',
        ]);

        DB::transaction(function () use ($validated) {
            $room = Room::create([
                'name'        => $validated['name'],
                'description' => $validated['description'] ?? null,
                'capacity'    => $validated['capacity'],
                'floor'       => $validated['floor'],
            ]);

            if (!empty($validated['inventory_items'])) {
                $room->inventoryItems()->attach($validated['inventory_items']);

                InventoryItem::whereIn('id', $validated['inventory_items'])
                    ->update(['status' => 'in_use']);
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
        $inventoryItems = InventoryItem::with('inventory', 'rooms')->get();

        $roomItems = $room->inventoryItems->pluck('id')->toArray();

        return view('dashboard.admin.room.edit', compact('room', 'inventoryItems', 'roomItems'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        $validated = $request->validate([
            'name'            => 'required|string|max:255',
            'description'     => 'nullable|string',
            'capacity'        => 'required|integer|min:1',
            'floor'           => 'required|string',
            'inventory_items' => 'nullable|array',
        ]);

        DB::transaction(function () use ($validated, $room) {
            $room->update([
                'name'        => $validated['name'],
                'description' => $validated['description'] ?? null,
                'capacity'    => $validated['capacity'],
                'floor'       => $validated['floor'],
            ]);

            // Reset dulu item lama jadi available
            $oldItems = $room->inventoryItems()->pluck('inventory_items.id')->toArray();
            InventoryItem::whereIn('id', $oldItems)->update(['status' => 'available']);

            // Sync pivot
            $room->inventoryItems()->sync($validated['inventory_items'] ?? []);

            // Update item baru jadi in_use
            if (!empty($validated['inventory_items'])) {
                InventoryItem::whereIn('id', $validated['inventory_items'])
                    ->update(['status' => 'in_use']);
            }
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
