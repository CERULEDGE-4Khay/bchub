@extends('layouts.admin')

@section('content')
<div class="mx-auto px-6 py-8">
  @if(session('success'))
    <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-800">
      {{ session('success') }}
    </div>
  @endif

  <div class="bg-white shadow rounded-xl p-6">
    <h2 class="text-lg font-semibold mb-4">List Pengajuan Ruangan</h2>

    <div class="">
      <table class="w-full border border-gray-200 text-sm text-left text-gray-600">
        <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
          <tr>
            <th class="px-4 py-3 border-b">#</th>
            <th class="px-4 py-3 border-b">Ruangan</th>
            <th class="px-4 py-3 border-b">Nama</th>
            <th class="px-4 py-3 border-b">Tanggal</th>
            <th class="px-4 py-3 border-b">Sesi</th>
            <th class="px-4 py-3 border-b">Status</th>
            <th class="px-4 py-3 border-b text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach($bookings as $i => $booking)
            <tr class="hover:bg-gray-50">
              <td class="px-4 py-2">{{ $i+1 }}</td>
              <td class="px-4 py-3 font-medium">{{ $booking->room->name }}</td>
              <td class="px-4 py-2">{{ $booking->user->name }}</td>
              <td class="px-4 py-2">{{ $booking->start_time->format('d M Y') }}</td>
              <td class="px-4 py-2">
                {{ $booking->start_time->format('H:i') }} - {{ $booking->end_time->format('H:i') }}
              </td>
              <td class="px-4 py-2">
                @php
                  $statusColors = [
                    'pending' => 'bg-yellow-100 text-yellow-700',
                    'approved' => 'bg-green-100 text-green-700',
                    'rejected' => 'bg-red-100 text-red-700',
                    'completed' => 'bg-blue-100 text-blue-700',
                  ];
                @endphp
                <span class="px-2 py-1 rounded-lg text-xs font-semibold {{ $statusColors[$booking->status] ?? 'bg-gray-100 text-gray-700' }}">
                  {{ ucfirst($booking->status) }}
                </span>
              </td>
              <td class="px-4 py-2 text-center">
                <a href="{{ route('bookings.show', $booking) }}"
                  class="inline-block px-3 py-1 text-xs font-medium text-white bg-green-600 rounded hover:bg-green-700 focus:outline-none">Detail</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
