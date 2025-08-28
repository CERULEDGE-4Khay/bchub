@extends('layouts.admin')

@section('content')
<div class="mx-auto px-6 py-8">
  <div class="bg-white shadow rounded-xl p-6">
    <h2 class="text-xl font-bold mb-4">Detail Booking</h2>

    <dl class="divide-y divide-gray-200">
      <div class="py-3 flex justify-between">
        <dt class="font-medium text-gray-600">Ruangan</dt>
        <dd>{{ $booking->room->name }}</dd>
      </div>
      <div class="py-3 flex justify-between">
        <dt class="font-medium text-gray-600">User</dt>
        <dd>{{ $booking->user->name }} ({{ $booking->user->email }})</dd>
      </div>
      <div class="py-3 flex justify-between">
        <dt class="font-medium text-gray-600">Tanggal</dt>
        <dd>{{ $booking->start_time->format('d M Y') }}</dd>
      </div>
      <div class="py-3 flex justify-between">
        <dt class="font-medium text-gray-600">Sesi</dt>
        <dd>{{ $booking->start_time->format('H:i') }} - {{ $booking->end_time->format('H:i') }}</dd>
      </div>
      <div class="py-3">
        <dt class="font-medium text-gray-600 mb-2">Ketentuan</dt>
        <dd>
          <ul class="space-y-2">
            @foreach($booking->requirementValues as $val)
              <li>
                <span class="font-semibold">{{ $val->requirement->label }}:</span>
                @if($val->requirement->type === 'file')
                  <a href="{{ Storage::url($val->value) }}" target="_blank" class="text-indigo-600 underline">Lihat File</a>
                @else
                  {{ $val->value ?? '-' }}
                @endif
              </li>
            @endforeach
          </ul>
        </dd>
      </div>
    </dl>

    <div class="mt-6 flex gap-3">
      <form action="{{ route('bookings.update', $booking) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="status" value="approved">
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
          ✅ Approve
        </button>
      </form>
      <form action="{{ route('bookings.update', $booking) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="status" value="rejected">
        <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
          ❌ Reject
        </button>
      </form>
    </div>
  </div>
</div>
@endsection
