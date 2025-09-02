@extends('layouts.admin')

@section('content')
<div class="bg-white shadow rounded-xl p-6">
  <h2 class="text-lg font-semibold mb-6">Edit Artikel</h2>

  <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
    @csrf
    @method('PUT')

    {{-- JUDUL --}}
    <div>
      <label class="block mb-1 text-sm font-medium">Judul</label>
      <input type="text" name="title" value="{{ old('title', $article->title) }}" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
    </div>

    {{-- KONTEN --}}
    <div>
      <label class="block mb-1 text-sm font-medium">Deskripsi Konten</label>
      <textarea name="description" rows="6" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">{{ old('content', $article->description) }}</textarea>
    </div>

    {{-- GAMBAR --}}
    <div>
      <label class="block mb-1 text-sm font-medium">Gambar</label>
      <input type="file" name="image" class="block w-full text-sm text-gray-500 border rounded-lg">
      @if($article->image)
        <p class="mt-2 text-xs text-gray-500">Gambar saat ini:</p>
        <img src="{{ asset('storage/'.$article->image) }}" class="h-32 rounded mt-2 shadow">
      @endif
    </div>

    {{-- AUTHOR --}}
    <div>
      <label class="block mb-1 text-sm font-medium">Author</label>
      <input type="text" name="author" value="{{ old('author', $article->author) }}" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
    </div>

    {{-- TANGGAL TERBIT --}}
    <div>
      <label class="block mb-1 text-sm font-medium">Tanggal Terbit</label>
      <input type="date" name="published_at" value="{{ old('published_at', optional($article->published_at)->format('Y-m-d')) }}" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
    </div>

    {{-- STATUS --}}
    <div>
      <label class="block mb-1 text-sm font-medium">Status</label>
      <select name="status" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
        <option value="draft" {{ $article->status=='draft' ? 'selected' : '' }}>Draft</option>
        <option value="published" {{ $article->status=='published' ? 'selected' : '' }}>Published</option>
      </select>
    </div>

    <div class="flex justify-end">
      <button type="submit"
        class="px-5 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg shadow hover:from-indigo-600 hover:to-indigo-800">
        Update
      </button>
    </div>
  </form>
</div>
@endsection
