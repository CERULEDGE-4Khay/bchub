@extends('layouts.guest')

@section('content')
<div class="container mx-auto px-4 py-6 mb-20 mt-20">
    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Semua Notifikasi</h1>

        @if(auth()->user()->unreadNotifications->count() > 0)
        <form action="{{ route('notifications.markAllRead') }}" method="POST">
            @csrf
            <button type="submit"
                class="px-4 py-2 text-sm bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                Tandai semua sudah dibaca
            </button>
        </form>
        @endif
    </div>

    {{-- Alert success --}}
    @if(session('success'))
        <div class="mb-4 p-3 text-sm text-green-700 bg-green-100 border border-green-300 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow rounded-xl divide-y">
        @forelse($notifications as $notif)
            <div class="p-4 hover:bg-gray-50 {{ $notif->read_at ? 'opacity-70' : '' }}">
                <p class="text-gray-800 text-sm">
                    Status Booking:
                    <span class="font-semibold text-gray-900">{{ ucfirst($notif->data['status']) }}</span>
                </p>
                <p class="text-gray-700 text-sm">
                    Ruangan: {{ $notif->data['room'] }} ({{ $notif->data['date'] }})
                </p>
                @if(!empty($notif->data['note']))
                    <p class="text-gray-600 text-xs">Catatan: {{ $notif->data['note'] }}</p>
                @endif
                <small class="text-gray-400 text-xs">
                    {{ $notif->created_at->diffForHumans() }}
                </small>
            </div>
        @empty
            <div class="p-6 text-center text-gray-500">
                Tidak ada notifikasi.
            </div>
        @endforelse
    </div>
</div>
@endsection
