<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:255',
            'condition' => 'required|in:good,damaged,maintenance',
            'status' => 'required|in:available,in_use,reserved',
            'quantity' => 'required|integer|min:1'
        ]);

        Inventory::create($validatedData);

        return redirect()->route('inventories.index')->with('success', 'Inventory berhasil ditambahkan!');
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:255',
            'condition' => 'required|in:good,damaged,maintenance',
            'status' => 'required|in:available,in_use,reserved',
            'quantity' => 'required|integer|min:1'
        ]);

        $inventory->update($validatedData);

        return redirect()->route('inventories.index')->with('success', 'Inventory berhasil diperbarui!');
    }

    public function destroy(Inventory $inventory)
    {
        $inventory->delete();
        return redirect()->route('inventories.index')->with('success', 'Inventory berhasil dihapus!');
    }
}
