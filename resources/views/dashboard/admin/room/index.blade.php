@extends('layouts.admin') @section('content')

<div class="flex justify-end mb-5">
  <a href="{{ route('rooms.create') }}"
    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:from-red-500 hover:to-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 shadow">
    Tambah Ruangan
  </a>
</div>

<div class="bg-white shadow rounded-xl p-6">
  <h2 class="text-lg font-semibold mb-4">List Ruangan</h2>

  <div class="overflow-x-auto">
    <table class="w-full border border-gray-200 text-sm text-left text-gray-600">
      <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
        <th class="px-4 py-3 border-b">Nama</th>
        <th class="px-4 py-3 border-b">Kapasitas</th>
        <th class="px-4 py-3 border-b">Deskripsi</th>
        <th class="px-4 py-3 border-b text-center">Aksi</th>
      </thead>
      <tbody class="divide-y divide-gray-200">
        @foreach ($rooms as $room)
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 font-medium text-gray-800">{{ $room->name }}</td>
            <td class="px-4 py-2">{{ $room->capacity }} Orang</td>
            <td class="px-4 py-2 max-w-xs whitespace-normal break-words">{{ $room->description ?? '-' }}</td>
            <td class="px-4 py-2 text-center">
              <a href="{{ route('rooms.edit', $room) }}"
                class="inline-block px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none">
                Edit
              </a>
              <a href="{{ route('rooms.show', $room) }}"
                class="inline-block px-3 py-1 text-xs font-medium text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none">
                Detail
              </a>
              <form action="{{ route('rooms.destroy', [$room]) }}" method="POST" onsubmit="return confirm('Yakin hapus inventory ini dari ruangan?')" class="inline-flex">
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
