@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
  <h2 class="text-xl font-semibold mb-4">Edit Inventory</h2>

  <form action="{{ route('inventories.update', $inventory) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-5">
      <label for="name" class="block mb-2 text-sm font-medium">Nama Inventaris</label>
      <input type="text" name="name" id="name" value="{{ old('name', $inventory->name) }}"
        class="w-full border border-gray-300 rounded-lg p-2 text-sm">
    </div>

    <div class="mb-5">
      <label for="brand" class="block mb-2 text-sm font-medium">Merk</label>
      <input type="text" name="brand" id="brand" value="{{ old('brand', $inventory->brand) }}"
        class="w-full border border-gray-300 rounded-lg p-2 text-sm">
    </div>

    <div class="mb-5">
      <label for="serial_number" class="block mb-2 text-sm font-medium">Nomor Seri</label>
      <input type="text" name="serial_number" id="serial_number" value="{{ old('serial_number', $inventory->serial_number) }}"
        class="w-full border border-gray-300 rounded-lg p-2 text-sm">
    </div>

    <div class="mb-5">
      <label for="condition" class="block mb-2 text-sm font-medium">Kondisi</label>
      <select name="condition" id="condition" class="w-full border border-gray-300 rounded-lg p-2 text-sm">
        <option value="good" {{ $inventory->condition == 'good' ? 'selected' : '' }}>Good</option>
        <option value="damaged" {{ $inventory->condition == 'damaged' ? 'selected' : '' }}>Damaged</option>
        <option value="maintenance" {{ $inventory->condition == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
      </select>
    </div>

    <div class="mb-5">
      <label for="status" class="block mb-2 text-sm font-medium">Status</label>
      <select name="status" id="status" class="w-full border border-gray-300 rounded-lg p-2 text-sm">
        <option value="available" {{ $inventory->status == 'available' ? 'selected' : '' }}>Available</option>
        <option value="in_use" {{ $inventory->status == 'in_use' ? 'selected' : '' }}>In Use</option>
        <option value="reserved" {{ $inventory->status == 'reserved' ? 'selected' : '' }}>Reserved</option>
      </select>
    </div>

    <div class="mb-5">
      <label for="quantity" class="block mb-2 text-sm font-medium">Jumlah</label>
      <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $inventory->quantity) }}"
        class="w-full border border-gray-300 rounded-lg p-2 text-sm">
    </div>

    <div class="flex items-center gap-3">
    <button type="submit"
        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
        Update
    </button>

    <a href="{{ route('inventories.index') }}"
        class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600">
        Back
    </a>
    </div>

  </form>
</div>
@endsection
