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
                  <a href="{{ asset('storage/' . $val->value) }}" target="_blank" class="text-indigo-600 underline">Lihat File</a>
                @else
                  {{ $val->value ?? '-' }}
                @endif
              </li>
            @endforeach

            <li>
              <span class="font-semibold">KTP</span>
              <a href="{{ asset('storage/' . $booking->user->profile->ktp_path) }}" target="_blank" class="text-indigo-600 underline">Lihat KTP</a>
            </li>
          </ul>
        </dd>
      </div>
    </dl>
    @if($booking->note)
      <div class="py-3 flex justify-between">
        <dt class="font-medium text-gray-600">
          {{ $booking->status === 'approved' ? 'Catatan Admin' : 'Alasan Penolakan' }}
        </dt>
        <dd>{{ $booking->note }}</dd>
      </div>
    @endif
    {{-- Tombol Approve / Reject hanya muncul kalau belum approved --}}
    {{-- @if($booking->status !== 'approved')
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
    @else
      <div class="mt-6">
        <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-lg">
          ✅ Booking sudah di-approve
        </span>
      </div>
    @endif --}}


    @if($booking->status === 'pending')
      <div class="mt-6 flex gap-3">
        <!-- Approve Form -->
        <form action="{{ route('bookings.update', $booking) }}" method="POST" class="space-y-2">
          @csrf
          @method('PUT')
          <input type="hidden" name="status" value="approved">
          <textarea name="note" placeholder="Catatan (opsional)" 
            class="w-full border rounded p-2 text-sm"></textarea>
          <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
            ✅ Approve
          </button>
        </form>

        <!-- Reject Form -->
        <form action="{{ route('bookings.update', $booking) }}" method="POST" class="space-y-2">
          @csrf
          @method('PUT')
          <input type="hidden" name="status" value="rejected">
          <textarea name="note" placeholder="Alasan penolakan" required 
            class="w-full border rounded p-2 text-sm"></textarea>
          <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
            ❌ Reject
          </button>
        </form>
      </div>
    @endif

    <div class="mt-4">
      <a href="{{ route('bookings.index') }}" 
        class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        ⬅ Kembali
      </a>
    </div>
  </div>
</div>
@endsection
