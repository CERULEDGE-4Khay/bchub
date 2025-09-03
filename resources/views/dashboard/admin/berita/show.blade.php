@extends('layouts.admin')

@section('content')
<div class="bg-white shadow rounded-xl p-6">
  <h2 class="text-xl font-bold mb-4">{{ $berita->title }}</h2>
  <p class="text-sm text-gray-500 mb-4">Ditulis oleh {{ $berita->author ?? 'Admin' }} • {{ $berita->created_at->format('d M Y') }}</p>

  @if($berita->image)
    <div class="mb-4">
      <img src="{{ asset('storage/'.$berita->image) }}" alt="Gambar Artikel" class="rounded-lg shadow">
    </div>
  @endif

  <div class="prose max-w-none">
    {!! nl2br(e($berita->content)) !!}
  </div>
  <div>
    <p>{{ $berita->description}}</p>
  </div>

  <div class="mt-6 flex space-x-2">
    <a href="{{ route('beritas.edit', $berita) }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Edit</a>
    <a href="{{ route('beritas.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700">Kembali</a>
  </div>
</div>
@endsection
