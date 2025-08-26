<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\InventoryItem;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventories = Inventory::all();
        return view('dashboard.admin.inventory.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $inventories = Inventory::all();
        return view('dashboard.admin.inventory.create', compact('inventories'));
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'items.*.brand' => 'nullable|string|max:255',
        'items.*.serial_number' => 'nullable|string|max:255',
        'items.*.condition' => 'required|in:good,damaged,maintenance',
        'items.*.status' => 'required|in:available,in_use,reserved',
    ]);

    // Buat inventory utama
    $inventory = Inventory::create([
        'name' => $request->name,
        'quantity' => count($request->items),
    ]);

    // Buat detail item
    foreach ($request->items as $item) {
        $inventory->items()->create($item);
    }

    return redirect()->route('inventories.index')->with('success','Inventory berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(Inventory $inventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Inventory $inventory)
    {
        return view('dashboard.admin.inventory.edit', compact('inventory'));
    }

public function update(Request $request, Inventory $inventory)
{
    // Validasi data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'quantity' => 'required|integer|min:1',
        'items' => 'required|array',
        'items.*.brand' => 'nullable|string|max:255',
        'items.*.serial_number' => 'nullable|string|max:255',
        'items.*.condition' => 'required|in:good,damaged,maintenance',
        'items.*.status' => 'required|in:available,in_use,reserved',
    ]);

    // Update inventory utama
    $inventory->update([
        'name' => $validatedData['name'],
        'quantity' => $validatedData['quantity'],
    ]);

    // Hapus item lama lalu simpan ulang (simple approach)
    $inventory->items()->delete();

    foreach ($validatedData['items'] as $itemData) {
        $inventory->items()->create($itemData);
    }

    return redirect()->route('inventories.index')->with('success', 'Inventory & items berhasil diperbarui!');
}

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventories.index')->with('success', 'Inventory berhasil dihapus!');
    }
}
