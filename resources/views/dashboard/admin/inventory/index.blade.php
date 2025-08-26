@extends('layouts.admin')

@section('content')
<div class="flex justify-end mb-5">
  <a href="{{ route('inventories.create') }}"
    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:from-red-500 hover:to-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 shadow">
    Tambah Inventory
  </a>
</div>

<div class="bg-white shadow rounded-xl p-6">
  <h2 class="text-lg font-semibold mb-4">List Inventory</h2>

  <div class="overflow-x-auto">
    <table class="w-full border border-gray-200 text-sm text-left text-gray-600">
      <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
        <tr>
          <th class="px-4 py-3 border-b">Nama</th>
          <th class="px-4 py-3 border-b">Jumlah</th>
          <th class="px-4 py-3 border-b">Brand/Merk</th>
          <th class="px-4 py-3 border-b">Kondisi</th>
          <th class="px-4 py-3 border-b">Nomor Seri</th>
          <th class="px-4 py-3 border-b text-center">Aksi</th>
        </tr>
      </thead>
        <tbody>
        @foreach ($inventories as $inventory)
        <tr>
            <td class="px-4 py-2 font-semibold">{{ $inventory->name }}</td>
            <td class="px-4 py-2">{{ $inventory->quantity }}</td>
            
            {{-- BRAND --}}
            <td class="px-4 py-2">
            <ul>
                @foreach($inventory->items as $item)
                <li class="py-1">{{ $item->brand ?? '-' }}</li>
                @endforeach
            </ul>
            </td>

            {{-- KONDISI --}}
            <td class="px-4 py-2">
            <ul>
                @foreach($inventory->items as $item)
                <li class="py-1">
                    <span class="text-xs px-2 py-1 rounded 
                    {{ $item->condition=='good'?'bg-green-100 text-green-700':'' }}
                    {{ $item->condition=='damaged'?'bg-red-100 text-red-700':'' }}
                    {{ $item->condition=='maintenance'?'bg-yellow-100 text-yellow-700':'' }}
                    ">{{ $item->condition }}</span>
                </li>
                @endforeach
            </ul>
            </td>

            {{-- NOMOR SERI --}}
            <td class="px-4 py-2">
            <ul>
                @foreach($inventory->items as $item)
                <li class="py-1">{{ $item->serial_number ?? '-' }}</li>
                @endforeach
            </ul>
            </td>

            {{-- AKSI --}}
            <td class="px-4 py-2 text-center">
              <a href="{{ route('inventories.edit', $inventory) }}"
                class="inline-block px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none">
                Edit
              </a>
              <a href="{{ route('inventories.show', $inventory) }}"
                class="inline-block px-3 py-1 text-xs font-medium text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none">
                Detail
              </a>
              <form action="{{ route('inventories.destroy', [$inventory]) }}" method="POST" onsubmit="return confirm('Yakin hapus inventory ini dari ruangan?')" class="inline-flex">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-block px-3 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none">Hapus</button>
              </form>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>
  </div>
</div>
@endsection
