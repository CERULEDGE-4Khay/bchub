<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryItem;
use App\Models\Room;
use App\Models\RoomImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
            'images'   => 'nullable|array',
            'images.*' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'terms'       => 'nullable|array',
            'terms.*.title'       => 'required|string|max:255',
            'terms.*.description' => 'nullable|string',
            'terms.*.type'        => 'nullable|in:text,textarea,file',
        ]);

        DB::transaction(function () use ($validated, $request) {
            $room = Room::create([
                'name'        => $validated['name'],
                'description' => $validated['description'] ?? null,
                'capacity'    => $validated['capacity'],
                'floor'       => $validated['floor'],
                'terms'       => $validated['terms'] ?? null,
            ]);

            foreach ($validated['terms'] ?? [] as $term) {
                $room->requirements()->create([
                    'label'       => $term['title'],
                    'description' => $term['description'] ?? null,
                    'type'        => $term['type'] ?? null,
                    'is_required' => true,
                ]);
            }

            if (!empty($validated['inventory_items'])) {
                $room->inventoryItems()->attach($validated['inventory_items']);

                InventoryItem::whereIn('id', $validated['inventory_items'])
                    ->update(['status' => 'in_use']);
            }

            // simpan images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $path = $file->store('rooms', 'public');
                    $room->images()->create([
                        'image_url' => $path,
                    ]);
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
        // ambil data relasi
        $room->load(['inventoryItems.inventory', 'images']);
        return view('dashboard.admin.room.show', compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        $inventoryItems = InventoryItem::with('inventory', 'rooms')->get();

        $roomItems = $room->inventoryItems->pluck('id')->toArray();

        $room->load('requirements');

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
            'images.*'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'terms'       => 'nullable|array',
            'terms.*.title'       => 'required|string|max:255',
            'terms.*.description' => 'nullable|string',
            'terms.*.type'        => 'nullable|in:text,textarea,file',
        ]);

        DB::transaction(function () use ($validated, $room, $request) {
            $room->update([
                'name'        => $validated['name'],
                'description' => $validated['description'] ?? null,
                'capacity'    => $validated['capacity'],
                'floor'       => $validated['floor'],
                'terms'       => $validated['terms'] ?? null
            ]);

            $existingIds = collect($validated['terms'] ?? [])->pluck('id')->filter()->toArray();
            $room->requirements()->whereNotIn('id', $existingIds)->delete();

            foreach ($validated['terms'] ?? [] as $term) {
                if (!empty($term['id'])) {
                    $room->requirements()->where('id', $term['id'])->update([
                        'label'       => $term['title'],
                        'description' => $term['description'] ?? null,
                        'type'        => $term['type'] ?? null,
                        'is_required' => true,
                    ]);
                } else {
                    $room->requirements()->create([
                        'label'       => $term['title'],
                        'description' => $term['description'] ?? null,
                        'type'        => $term['type'] ?? null,
                        'is_required' => true,
                    ]);
                }
            }

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

            // Simpan gambar baru
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    $path = $image->store('rooms', 'public');
                    $room->images()->create([
                        'image_url' => $path,
                    ]);
                }
            }

        });

        return redirect()->route('rooms.index')->with('success', 'Room berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        DB::transaction(function () use ($room) {
            foreach ($room->images as $image) {
                if (Storage::disk('public')->exists($image->image_url)) {
                    Storage::disk('public')->delete($image->image_url);
                }
                $image->delete();
            }

            $room->inventories()->detach();
            $room->delete();
        });
        return redirect()->route('rooms.index')->with('success', 'Room berhasil dihapus.');
    }

    public function destroyImage(RoomImage $image)
    {
        Storage::disk('public')->delete($image->image_url);
        $image->delete();
        return response()->json(['success' => true]);
    }
}
