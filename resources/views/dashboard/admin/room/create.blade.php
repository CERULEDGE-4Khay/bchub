@extends('layouts.admin') @section('content')



<div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Tambah dataaaa ruangan</h5>
  <form action="{{ route('rooms.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name">
      </div>
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Lantai</label>
        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="floor">
      </div>
      <div class="mb-5">
        <label for="kapasitas"  class="block mb-2 text-sm font-medium text-gray-900">Kapasitas</label>
        <input type="number" id="kapasitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="capacity">
      </div>
      <div class="mb-5">
        <label for="fasilitas" class="block mb-2 text-sm font-medium text-gray-900">Fasilitas</label>
        <div class="overflow-x-auto rounded border">
          <table class="w-full text-sm text-left text-gray-700">
            <thead class="text-xs uppercase bg-gray-100 text-gray-600">
              <tr>
                <th class="px-4 py-2">Pilih</th>
                <th class="px-4 py-2">Fasilitas</th>
                <th class="px-4 py-2">Stok</th>
                <th class="px-4 py-2">Jumlah Dipakai</th>
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
                    {{ $inventory->name }}
                  </td>
                  <td class="px-4 py-2">
                    {{ $inventory->quantity }}
                  </td>
                  <td class="px-4 py-2">
                    <input type="number" 
                      name="inventories_qty[{{ $inventory->id }}]" 
                      min="1" 
                      max="{{ $inventory->quantity }}" 
                      class="w-20 p-1 text-sm border rounded">
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

  
      <div class="mb-5">
        <label for="deskripsi"  class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Dekripsikan..." name="description"></textarea>
      </div>
    </div>
    <button
      type="submit"
      href="#"
      class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"
    >
      Simpan
    </button>
  </form>
</div>



@endsection