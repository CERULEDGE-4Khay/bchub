{{-- @extends('layouts.admin') @section('content')
<div class="flex justify-end mb-5">
  <a href="{{ route('inventories.create') }}" type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Tambah Inventory</a>
</div>

<div class="flex flex-wrap -mx-3">
  <div class="flex-none w-full max-w-full px-3">
    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
      <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
        <h6 class="">List Inventory</h6>
      </div>
      <div class="flex-auto px-0 pt-0 pb-2">
        <div class="p-0 overflow-x-auto">
          <table class="items-center w-full mb-0 align-top border-collapse text-slate-500">
            <thead class="align-bottom">
              <tr>
                <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama</th>
                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Brand</th>
                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Kondisi</th>
                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nomor Seri</th>
                <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Jumlah</th>
                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70 w-auto">Aksi</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($inventories as $inventory)
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $inventory->name }}</h6>
                      </div>
                    </div>
                  </td>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $inventory->brand }}</p>
                    <p class="mb-0 text-xs leading-tight text-slate-400"></p>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b shadow-transparent whitespace-normal break-words w-64">
                    <p class="mb-0 text-xs leading-tight text-slate-400">{{ $inventory->status }}</p>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b shadow-transparent whitespace-normal break-words w-64">
                    <p class="mb-0 text-xs leading-tight text-slate-400">{{ $inventory->condition }}</p>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b shadow-transparent whitespace-normal break-words w-64">
                    <p class="mb-0 text-xs leading-tight text-slate-400">{{ $inventory->serial_number }}</p>
                  </td>
                  <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b shadow-transparent whitespace-normal break-words w-64">
                    <p class="mb-0 text-xs leading-tight text-slate-400">{{ $inventory->quantity }}</p>
                  </td>
                  <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent w-fit">
                        <a
                            href="{{ route('inventories.edit', $inventory) }}"
                            type="button"
                            class="px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >
                            Edit
                        </a>

                        <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin mau hapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                            class="px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            Hapus
                            </button>
                        </form>
                    </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection --}}

@extends('layouts.admin')

@section('content')
<div class="flex justify-end mb-5">
  <a href="{{ route('inventories.create') }}"
    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:from-red-500 hover:to-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 shadow">
    Tambah Inventory
  </a>
</div>

<div class="bg-white shadow rounded-xl p-6">
  <h2 class="text-lg font-semibold mb-4">List Inventory</h2>

  <div class="overflow-x-auto">
    <table class="w-full border border-gray-200 text-sm text-left text-gray-600">
      <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
        <tr>
          <th class="px-4 py-3 border-b">Nama</th>
          <th class="px-4 py-3 border-b">Brand</th>
          <th class="px-4 py-3 border-b">Status</th>
          <th class="px-4 py-3 border-b">Kondisi</th>
          <th class="px-4 py-3 border-b">Nomor Seri</th>
          <th class="px-4 py-3 border-b">Jumlah</th>
          <th class="px-4 py-3 border-b text-center">Aksi</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        @foreach ($inventories as $inventory)
          <tr class="hover:bg-gray-50">
            <td class="px-4 py-2 font-medium text-gray-800">{{ $inventory->name }}</td>
            <td class="px-4 py-2">{{ $inventory->brand }}</td>
            <td class="px-4 py-2 capitalize">
              <span class="px-2 py-1 text-xs font-semibold rounded 
                {{ $inventory->status === 'available' ? 'bg-green-100 text-green-700' : '' }}
                {{ $inventory->status === 'in_use' ? 'bg-yellow-100 text-yellow-700' : '' }}
                {{ $inventory->status === 'reserved' ? 'bg-red-100 text-red-700' : '' }}">
                {{ $inventory->status }}
              </span>
            </td>
            <td class="px-4 py-2 capitalize">
              <span class="px-2 py-1 text-xs font-medium rounded 
                {{ $inventory->condition === 'good' ? 'bg-green-50 text-green-700' : '' }}
                {{ $inventory->condition === 'damaged' ? 'bg-red-50 text-red-700' : '' }}
                {{ $inventory->condition === 'maintenance' ? 'bg-yellow-50 text-yellow-700' : '' }}">
                {{ $inventory->condition }}
              </span>
            </td>
            <td class="px-4 py-2">{{ $inventory->serial_number ?? '-' }}</td>
            <td class="py-2 font-semibold text-gray-800 text-center">{{ $inventory->quantity }}</td>
            <td class="px-4 py-2 text-center">
              <a href="{{ route('inventories.edit', $inventory) }}"
                class="inline-block px-3 py-1 text-xs font-medium text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none">
                Edit
              </a>
              <form action="{{ route('inventories.destroy', $inventory) }}" method="POST" class="inline-block"
                onsubmit="return confirm('Yakin mau hapus?')">
                @csrf
                @method('DELETE')
                <button type="submit"
                  class="inline-block px-3 py-1 text-xs font-medium text-white bg-red-600 rounded hover:bg-red-700 focus:outline-none">
                  Hapus
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
