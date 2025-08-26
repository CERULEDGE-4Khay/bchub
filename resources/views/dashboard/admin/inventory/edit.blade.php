@extends('layouts.admin')

@section('content')
<div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
  <h5 class="mb-4 text-2xl font-bold tracking-tight text-center text-gray-900">Edit Inventory</h5>

<form action="{{ route('inventories.update', $inventory->id) }}" method="POST" class="max-w-3xl mx-auto bg-white shadow-md rounded-xl p-6 space-y-6">
    @csrf
    @method('PUT')

    <!-- Nama Barang -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Nama Barang</label>
        <input type="text" name="name" value="{{ $inventory->name }}" 
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
    </div>

    <!-- Quantity -->
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Quantity</label>
        <input type="number" name="quantity" value="{{ $inventory->quantity }}" min="1"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
    </div>

    <!-- Items -->
    <div>
        <h3 class="text-lg font-semibold text-gray-800 mb-3">Detail Items</h3>

        <div id="items-wrapper" class="space-y-4">
            @foreach($inventory->items as $i => $item)
                <div class="item-form grid grid-cols-1 md:grid-cols-4 gap-4 bg-gray-50 p-4 rounded-lg shadow-sm relative">
                    
                    <!-- Brand -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Brand</label>
                        <input type="text" name="items[{{ $i }}][brand]" value="{{ $item->brand }}" 
                            class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Brand">
                    </div>

                    <!-- Serial Number -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Serial Number</label>
                        <input type="text" name="items[{{ $i }}][serial_number]" value="{{ $item->serial_number }}" 
                            class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Serial Number">
                    </div>

                    <!-- Condition -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Condition</label>
                        <select name="items[{{ $i }}][condition]" 
                            class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="good" {{ $item->condition == 'good' ? 'selected' : '' }}>Good</option>
                            <option value="damaged" {{ $item->condition == 'damaged' ? 'selected' : '' }}>Damaged</option>
                            <option value="maintenance" {{ $item->condition == 'maintenance' ? 'selected' : '' }}>Maintenance</option>
                        </select>
                    </div>

                    <!-- Status -->
                    <div>
                        <label class="block text-sm font-medium text-gray-600 mb-1">Status</label>
                        <select name="items[{{ $i }}][status]" 
                            class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                            <option value="available" {{ $item->status == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="in_use" {{ $item->status == 'in_use' ? 'selected' : '' }}>In Use</option>
                            <option value="reserved" {{ $item->status == 'reserved' ? 'selected' : '' }}>Reserved</option>
                        </select>
                    </div>

                    <!-- Tombol Hapus -->
                    <div class="col-span-1 md:col-span-4 text-right">
                        <button type="button" onclick="removeItem(this)" class="bg-red-600 text-white px-3 py-1 rounded">
                            Hapus
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Buttons -->
    <button type="button" onclick="addItem()" class="bg-green-600 text-white px-3 py-2 rounded">
        + Tambah Item
    </button>
    
    <div class="flex justify-end gap-3 pt-4">
        <a href="{{ route('inventories.index') }}" 
           class="px-5 py-2 rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-700 font-medium">
           Kembali
        </a>
        <button type="submit" 
            class="px-5 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium shadow">
            Simpan Perubahan
        </button>
    </div>
</form>

</div>

<script>
let itemIndex = {{ count($inventory->items) }};

// Tambah item baru
function addItem() {
  let wrapper = document.getElementById('items-wrapper');
  let newItem = document.createElement('div');
  newItem.classList.add('item-form','grid','grid-cols-1','md:grid-cols-4','gap-4','bg-gray-50','p-4','rounded-lg','shadow-sm','relative');
  newItem.innerHTML = `
    <div>
      <label class="block text-sm font-medium text-gray-600 mb-1">Brand</label>
      <input type="text" name="items[${itemIndex}][brand]" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Brand">
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-600 mb-1">Serial Number</label>
      <input type="text" name="items[${itemIndex}][serial_number]" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500" placeholder="Serial Number">
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-600 mb-1">Condition</label>
      <select name="items[${itemIndex}][condition]" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        <option value="good">Good</option>
        <option value="damaged">Damaged</option>
        <option value="maintenance">Maintenance</option>
      </select>
    </div>
    <div>
      <label class="block text-sm font-medium text-gray-600 mb-1">Status</label>
      <select name="items[${itemIndex}][status]" class="w-full border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        <option value="available">Available</option>
        <option value="in_use">In Use</option>
        <option value="reserved">Reserved</option>
      </select>
    </div>
    <div class="col-span-1 md:col-span-4 text-right">
      <button type="button" onclick="removeItem(this)" class="bg-red-600 text-white px-3 py-1 rounded">
        Hapus
      </button>
    </div>
  `;
  wrapper.appendChild(newItem);
  itemIndex++;
}

// Hapus item
function removeItem(button) {
  let itemForm = button.closest('.item-form');
  itemForm.remove();
}
</script>

@endsection
