@extends('layouts.admin')
@section('content')

<div class="p-4 bg-white rounded-lg shadow-xs">
    <h1 class="font-bold pl-5 pt-3 text-lg">Pengaturan Akun</h1>
    <div class="h-40 w-40 rounded-full mt-7 bg-slate-500 mx-auto">
         <img src="{{ $account->avatar ? asset($account->avatar) : asset('assets/img/team-3.jpg') }}"
             alt="Profile Picture" class="h-full w-full object-cover rounded-full">
    </div>

    <div>
        <h2 class="text-center font-bold text-xl mt-4">{{ $account->name }}</h2>
        <p class="text-center text-slate-500">Email : {{ $account->email }}</p>
        <p class="text-center text-slate-500">Phone : {{ $account->phone ?? '-' }}</p>
    </div>

    <div>
        <a href="{{ route('accounts.edit', $account->id) }}">
            <button class="bg-sky-400 rounded-lg text-white shadow-md mt-8 p-2 text-sm">Edit Akun</button>
        </a>
    </div>
</div>

@endsection
