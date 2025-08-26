@extends('layouts.admin') @section('content')
<div class="mx-auto bg-white p-6 rounded-lg shadow">
  <h2 class="text-xl font-semibold mb-4">Edit Ruangan</h2>

  <form action="{{ route('rooms.update', $room->id) }}" method="POST">
    @csrf @method('PUT')

    <!-- Nama -->
    <div class="mb-4">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nama Ruangan</label>
      <input type="text" name="name" value="{{ old('name', $room->name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>

    <!-- Kapasitas -->
    <div class="mb-4">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Kapasitas</label>
      <input type="number" name="capacity" value="{{ old('capacity', $room->capacity) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>

    <!-- Lantai -->
    <div class="mb-4">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Lantai</label>
      <input type="text" name="floor" value="{{ old('floor', $room->floor) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>

    {{-- Inventory --}}
    <div class="mb-5">
      <label for="fasilitas" class="block mb-2 text-sm font-medium text-gray-900">Fasilitas</label>
      <div class="overflow-x-auto rounded border">
        <table class="w-full text-sm text-left text-gray-700">
          <thead class="text-xs uppercase bg-gray-100 text-gray-600">
            <tr>
              <th class="px-4 py-2">Pilih</th>
              <th class="px-4 py-2">Fasilitas</th>
              <th class="px-4 py-2">Stok</th>
              <th class="px-4 py-2">Stok Sisa</th>
              <th class="px-4 py-2">Jumlah Dipakai</th>
            </tr>
          </thead>
          <tbody>
            @foreach($inventories as $inventory) @php $checked = isset($roomInventories[$inventory->id]); $qty = $roomInventories[$inventory->id] ?? ''; @endphp
            <tr class="border-b">
              <td class="px-4 py-2">
                <input type="checkbox" name="inventories[{{ $inventory->id }}]" value="1" {{ $checked ? 'checked' : '' }} class="w-4 h-4 text-blue-600 border-gray-300 rounded" />
              </td>
              <td class="px-4 py-2">
                {{ $inventory->name }}
              </td>
              <td class="px-4 py-2">
                {{ $inventory->quantity }}
              </td>
              <td class="px-4 py-2 text-center">
                    {{ $inventory->available_stock }}
                  </td>
              <td class="px-4 py-2">
                <input type="number" name="inventories_qty[{{ $inventory->id }}]" min="0" value="{{ $qty }}" class="w-20 p-1 text-sm border rounded" />
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    <!-- Deskripsi -->
    <div class="mb-4">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
      <textarea name="description" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ old('description', $room->description) }}</textarea>
    </div>

    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
      Edit
    </button>
    <a href="{{ route('rooms.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Kembali</a>
  </form>
</div>
@endsection
