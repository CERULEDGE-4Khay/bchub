@extends('layouts.admin')

@section('content')
<div class="bg-white shadow rounded-xl p-6">
  <h2 class="text-lg font-semibold mb-6">Tambah Artikel</h2>

  <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
    @csrf

    <div>
      <label class="block mb-1 text-sm font-medium">Judul</label>
      <input type="text" name="title" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
    </div>

    <div>
      <label class="block mb-1 text-sm font-medium">Deskripsi Konten</label>
      <textarea name="description" rows="6" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200"></textarea>
    </div>

    <div>
      <label class="block mb-1 text-sm font-medium">Gambar (opsional)</label>
      <input type="file" name="image" class="block w-full text-sm text-gray-500 border rounded-lg">
    </div>

    <div>
      <label class="block mb-1 text-sm font-medium">Author</label>
      <input type="text" name="author" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
    </div>

    <div>
      <label class="block mb-1 text-sm font-medium">Tanggal Terbit</label>
      <input type="date" name="published_at" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
    </div>

    <div>
      <label class="block mb-1 text-sm font-medium">Status</label>
      <select name="status" class="w-full border rounded-lg px-3 py-2 focus:ring focus:ring-indigo-200">
        <option value="draft">Draft</option>
        <option value="published">Published</option>
      </select>
    </div>

    <div class="flex justify-end">
      <button type="submit"
        class="px-5 py-2 text-sm font-medium text-white bg-gradient-to-r from-indigo-500 to-indigo-700 rounded-lg shadow hover:from-indigo-600 hover:to-indigo-800">
        Simpan
      </button>
    </div>
  </form>
</div>
@endsection
