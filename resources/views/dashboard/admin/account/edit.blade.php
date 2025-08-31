@extends('layouts.admin')
@section('content')

<div class="p-6 bg-white rounded-lg shadow-md">
    <h1 class="font-bold text-lg mb-4">Edit Profil</h1>

    <form action="{{ route('accounts.update', $account->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="block text-sm">Nama</label>
            <input type="text" name="name" value="{{ old('name', $account->name) }}"
                   class="w-full border rounded p-2">
        </div>

        <div class="mb-3">
            <label class="block text-sm">Email</label>
            <input type="email" name="email" value="{{ old('email', $account->email) }}"
                   class="w-full border rounded p-2">
        </div>

        <div class="mb-3">
            <label class="block text-sm">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $account->phone) }}"
                   class="w-full border rounded p-2">
        </div>

        <div class="mb-3">
            <label class="block text-sm font-bold mb-2">Pilih Avatar Default</label>
            <div class="flex space-x-4">
                @php
                    $avatars = [
                        'assets/images/avatar5.jpg',
                        'assets/images/avatar4.png',
                        'assets/images/avatar3.jpg',
                    ];
                @endphp
                @foreach ($avatars as $avatar)
                    <label class="cursor-pointer hover:scale-105 transform transition duration-200">
                        <input type="radio" name="default_avatar" value="{{ $avatar }}" 
                            {{ $account->avatar == $avatar ? 'checked' : '' }} class="hidden peer">
                        <img src="{{ asset($avatar) }}" 
                            class="h-16 w-16 rounded-full border-2 
                            {{ $account->avatar == $avatar ? 'border-sky-500 ring-4 ring-sky-300' : 'border-gray-300' }} 
                            peer-checked:border-sky-500 peer-checked:ring-4 peer-checked:ring-sky-300">
                    </label>
                @endforeach
            </div>
        </div>


        <div class="mb-3">
            <label class="block text-sm font-bold mb-2">Atau Upload Foto Sendiri</label>
            <input type="file" name="avatar" class="w-full border rounded p-2">
        </div>

        <div class="mb-3">
            <label class="block text-sm">Password (kosongkan jika tidak ingin diubah)</label>
            <input type="password" name="password" class="w-full border rounded p-2">
        </div>

        <div class="mb-3">
            <label class="block text-sm">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="w-full border rounded p-2">
        </div>

        <button type="submit" class="bg-sky-500 text-white px-4 py-2 rounded">Simpan</button>
        <a href="{{ route('accounts.index') }}" class="ml-2 text-gray-600">Batal</a>
    </form>
</div>

@endsection
