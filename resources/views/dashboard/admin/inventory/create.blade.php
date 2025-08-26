@extends('layouts.admin') @section('content')

<div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Tambah Item Inventory</h5>
  <form action="{{ route('inventories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name">
      </div>
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Brand/Merk</label>
        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="brand">
      </div>
      <div class="mb-5">
        <label for="kapasitas"  class="block mb-2 text-sm font-medium text-gray-900">Nomor Seri</label>
        <input type="number" id="kapasitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="serial_number">
      </div>
      {{-- <div class="mb-5">
        <label for="fasilitas" class="block mb-2 text-sm font-medium text-gray-900">Kondisi</label>
        <div class="overflow-x-auto rounded border">
            <table class="w-full text-sm text-left text-gray-700">
            <thead class="text-xs uppercase bg-gray-100 text-gray-600">
                <tr>
                <th class="px-4 py-2">Pilih</th>
                <th class="px-4 py-2">Kondisi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventories as $inventory)
                <tr class="border-b">
                    <td class="px-4 py-2">
                    <input type="checkbox" name="inventories[{{ $inventory->id }}]" value="1"
                        class="w-4 h-4 text-blue-600 border-gray-300 rounded">
                    </td>
                    <td class="px-4 py-2">
                    {{ $inventory->condition }}
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
      </div> --}}
      <div class="mb-5">
        <label for="condition" class="block mb-2 text-sm font-medium text-gray-900">Kondisi</label>
        <select name="condition" id="condition"
            class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring-blue-500 focus:border-blue-500">
            <option value="good">Good</option>
            <option value="damaged">Damaged</option>
            <option value="maintenance">Maintenance</option>
        </select>
        </div>

        <div class="mb-5">
        <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
        <select name="status" id="status"
            class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring-blue-500 focus:border-blue-500">
            <option value="available">Available</option>
            <option value="in_use">In Use</option>
            <option value="reserved">Reserved</option>
        </select>
        </div>

        <div class="mb-5">
        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900">Jumlah</label>
        <input type="number" name="quantity" id="quantity" value="1" min="1"
            class="w-full border border-gray-300 rounded-lg p-2 text-sm focus:ring-blue-500 focus:border-blue-500">
      </div>

    </div>
    <div class="flex items-center gap-3">
        <button
            type="submit"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Simpan
        </button>

        <a href="{{ route('inventories.index') }}"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-500 rounded-lg hover:bg-gray-600">
            Back
        </a>
    </div>
  </form>
</div>

@endsection