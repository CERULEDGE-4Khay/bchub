@extends('layouts.admin') @section('content')
<div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Tambah dataaaa ruangan</h5>
  <form action="{{ route('rooms.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name">
        @error('name')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Lantai</label>
        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="floor">
        @error('floor')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="kapasitas"  class="block mb-2 text-sm font-medium text-gray-900">Kapasitas</label>
        <input type="number" id="kapasitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="capacity">
        @error('capacity')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="kapasitas"  class="block mb-2 text-sm font-medium text-gray-900">Fasilitas</label>
        @foreach($inventoryItems->groupBy('inventory.name') as $category => $items)
          <details class="mb-2 border rounded">
            <summary class="cursor-pointer px-4 py-2 bg-gray-100 font-medium">{{ $category }}</summary>
            <div class="overflow-x-auto">
              <table class="w-full text-sm text-left text-gray-700">
                <thead class="text-xs uppercase bg-gray-50 text-gray-600">
                  <tr>
                    <th class="px-4 py-2">Pilih</th>
                    <th class="px-4 py-2">Merek</th>
                    <th class="px-4 py-2">Serial</th>
                    <th class="px-4 py-2">Kondisi</th>
                    <th class="px-4 py-2">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($items as $item)
                    <tr class="border-b {{ $item->status !== 'available' ? 'bg-gray-100 text-gray-400' : '' }}">
                      <td class="px-4 py-2">
                        @if($item->status === 'available')
                          <input type="checkbox" name="inventory_items[]" value="{{ $item->id }}">
                        @else
                          <span class="text-xs italic">Tidak tersedia</span>
                        @endif
                      </td>
                      <td class="px-4 py-2">{{ $item->brand ?? '-' }}</td>
                      <td class="px-4 py-2">{{ $item->serial_number ?? '-' }}</td>
                      <td class="px-4 py-2">{{ ucfirst($item->condition) }}</td>
                      <td class="px-4 py-2">{{ ucfirst($item->status) }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </details>
        @endforeach
      </div>
      <div class="mb-5">
        <label for="deskripsi"  class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Dekripsikan..." name="description"></textarea>
        @error('description')
          <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
    </div>
    <button
      type="submit"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
    >
      Simpan
    </button>
  </form>
</div>
@endsection