@extends('layouts.admin')

@section('content')
<div class="flex justify-end mb-5">
  <a href="{{ route('articles.create') }}"
    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:from-green-500 hover:to-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2 shadow">
    Tambah Artikel
  </a>
</div>

<div class="bg-white shadow rounded-xl p-6">
  <h2 class="text-lg font-semibold mb-4">Daftar Artikel</h2>

  <div class="overflow-x-auto">
    <table class="w-full border border-gray-200 text-sm text-left text-gray-600">
      <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
        <tr>
          <th class="px-4 py-3 border-b">Judul</th>
          <th class="px-4 py-3 border-b">Penulis</th>
          <th class="px-4 py-3 border-b">Tanggal</th>
          <th class="px-4 py-3 border-b">Status</th>
          <th class="px-4 py-3 border-b text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $article)
        <tr class="hover:bg-gray-50">
          <td class="px-4 py-2 font-semibold">{{ $article->title }}</td>
          <td class="px-4 py-2">{{ $article->author ?? 'Admin' }}</td>
          <td class="px-4 py-2">{{ $article->created_at->format('d M Y') }}</td>
          <td class="px-4 py-2">
            <span class="text-xs px-2 py-1 rounded 
              {{ $article->status=='published'?'bg-green-100 text-green-700':'' }}
              {{ $article->status=='draft'?'bg-yellow-100 text-yellow-700':'' }}
            ">
              {{ ucfirst($article->status) }}
            </span>
          </td>
          <td class="px-4 py-2 text-center space-x-1">
            <a href="{{ route('articles.edit', $article) }}"
              class="inline-block px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded hover:bg-blue-700">Edit</a>
            <a href="{{ route('articles.show', $article) }}"
              class="inline-block px-3 py-1 text-xs font-medium text-white bg-emerald-600 rounded hover:bg-emerald-700">Detail</a>
            <form action="{{ route('articles.destroy', $article) }}" method="POST" onsubmit="return confirm('Yakin hapus artikel ini?')" class="inline-flex">
              @csrf
              @method('DELETE')
              <button type="submit"
                class="inline-block px-3 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700">Hapus</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
