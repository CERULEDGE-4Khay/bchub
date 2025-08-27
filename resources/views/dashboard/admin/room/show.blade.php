@extends('layouts.admin') @section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
  <div class="bg-white shadow-md rounded-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $room->name }}</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
      <div>
        <p class="text-gray-600"><span class="font-semibold">Lantai:</span> {{ $room->floor }}</p>
        <p class="text-gray-600"><span class="font-semibold">Kapasitas:</span> {{ $room->capacity }} orang</p>
        <p class="text-gray-600"><span class="font-semibold">Deskripsi:</span> {{ $room->description ?? '-' }}</p>
      </div>
    </div>

    <h3 class="text-lg font-semibold text-gray-700 mb-2">Inventory</h3>
    @if($room->inventoryItems->isEmpty())
    <p class="text-gray-500 italic">Tidak ada inventory di ruangan ini.</p>
    @else
    <ul class="list-disc list-inside text-gray-700 space-y-1">
      @foreach($room->inventoryItems as $item)
      <li>
        {{ $item->inventory->name }}
        <span class="text-gray-500">- Brand: {{ $item->brand }}</span>
      </li>
      @endforeach
    </ul>
    @endif

    <h3 class="text-lg font-semibold text-gray-700 mt-6 mb-2">Gambar</h3>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      @forelse($room->images as $img)
      <div class="relative">
        <img src="{{ asset('storage/'.$img->image_url) }}" alt="Room image" class="w-full h-40 object-cover rounded-lg shadow" />
      </div>
      @empty
      <p class="text-gray-500 italic">Tidak ada gambar.</p>
      @endforelse
    </div>

    <div class="mt-6">
      <a href="{{ route('rooms.index') }}" class="inline-block bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg transition">
        ← Kembali
      </a>
    </div>
  </div>
</div>
@endsection
