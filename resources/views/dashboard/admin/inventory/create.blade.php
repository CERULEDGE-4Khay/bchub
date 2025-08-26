{{-- @extends('layouts.admin') @section('content')

<div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Tambah Item Inventory</h5>
  <form action="{{ route('inventories.store') }}" method="POST">
  @csrf
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium">Nama Inventaris</label>
    <input type="text" name="name" class="border rounded w-full p-2" required>
  </div>

  <div id="items-wrapper">
    <div class="item-form border p-4 mb-3 rounded bg-gray-50">
      <h4 class="font-semibold mb-2">Item #1</h4>
      <div class="mb-2">
        <label class="text-sm">Brand</label>
        <input type="text" name="items[0][brand]" class="border rounded w-full p-2">
      </div>
      <div class="mb-2">
        <label class="text-sm">Nomor Seri</label>
        <input type="text" name="items[0][serial_number]" class="border rounded w-full p-2">
      </div>
      <div class="mb-2">
        <label class="text-sm">Kondisi</label>
        <select name="items[0][condition]" class="border rounded w-full p-2">
          <option value="good">Good</option>
          <option value="damaged">Damaged</option>
          <option value="maintenance">Maintenance</option>
        </select>
      </div>
      <div class="mb-2">
        <label class="text-sm">Status</label>
        <select name="items[0][status]" class="border rounded w-full p-2">
          <option value="available">Available</option>
          <option value="in_use">In Use</option>
          <option value="reserved">Reserved</option>
        </select>
      </div>
    </div>
  </div>

  <button type="button" onclick="addItem()" class="bg-green-600 text-white px-3 py-2 rounded">
    + Tambah Item
  </button>

  <div class="mt-5">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
  </div>
</form>

<script>
let itemIndex = 1;
function addItem() {
  let wrapper = document.getElementById('items-wrapper');
  let newItem = document.createElement('div');
  newItem.classList.add('item-form','border','p-4','mb-3','rounded','bg-gray-50');
  newItem.innerHTML = `
    <h4 class="font-semibold mb-2">Item #${itemIndex+1}</h4>
    <div class="mb-2">
      <label class="text-sm">Brand</label>
      <input type="text" name="items[${itemIndex}][brand]" class="border rounded w-full p-2">
    </div>
    <div class="mb-2">
      <label class="text-sm">Nomor Seri</label>
      <input type="text" name="items[${itemIndex}][serial_number]" class="border rounded w-full p-2">
    </div>
    <div class="mb-2">
      <label class="text-sm">Kondisi</label>
      <select name="items[${itemIndex}][condition]" class="border rounded w-full p-2">
        <option value="good">Good</option>
        <option value="damaged">Damaged</option>
        <option value="maintenance">Maintenance</option>
      </select>
    </div>
    <div class="mb-2">
      <label class="text-sm">Status</label>
      <select name="items[${itemIndex}][status]" class="border rounded w-full p-2">
        <option value="available">Available</option>
        <option value="in_use">In Use</option>
        <option value="reserved">Reserved</option>
      </select>
    </div>
  `;
  wrapper.appendChild(newItem);
  itemIndex++;
}
</script>

</div>

@endsection --}}

@extends('layouts.admin') 
@section('content')

<div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Tambah Item Inventory</h5>
  <form action="{{ route('inventories.store') }}" method="POST">
  @csrf
  <div class="mb-5">
    <label class="block mb-2 text-sm font-medium">Nama Inventaris</label>
    <input type="text" name="name" class="border rounded w-full p-2" required>
  </div>

  <div id="items-wrapper">
    <div class="item-form border p-4 mb-3 rounded bg-gray-50 relative">
      <h4 class="font-semibold mb-2">Item #1</h4>
      <div class="mb-2">
        <label class="text-sm">Brand</label>
        <input type="text" name="items[0][brand]" class="border rounded w-full p-2">
      </div>
      <div class="mb-2">
        <label class="text-sm">Nomor Seri</label>
        <input type="text" name="items[0][serial_number]" class="border rounded w-full p-2">
      </div>
      <div class="mb-2">
        <label class="text-sm">Kondisi</label>
        <select name="items[0][condition]" class="border rounded w-full p-2">
          <option value="good">Good</option>
          <option value="damaged">Damaged</option>
          <option value="maintenance">Maintenance</option>
        </select>
      </div>
      <div class="mb-2">
        <label class="text-sm">Status</label>
        <select name="items[0][status]" class="border rounded w-full p-2">
          <option value="available">Available</option>
          <option value="in_use">In Use</option>
          <option value="reserved">Reserved</option>
        </select>
      </div>
      <!-- Button hapus -->
      <button type="button" onclick="removeItem(this)" class="bg-red-600 text-white px-3 py-1 rounded">
        Hapus
      </button>
    </div>
  </div>

  <button type="button" onclick="addItem()" class="bg-green-600 text-white px-3 py-2 rounded">
    + Tambah Item
  </button>

  <div class="mt-5">
    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
  </div>
</form>

<script>
let itemIndex = 1;

// Fungsi tambah item
function addItem() {
  let wrapper = document.getElementById('items-wrapper');
  let newItem = document.createElement('div');
  newItem.classList.add('item-form','border','p-4','mb-3','rounded','bg-gray-50','relative');
  newItem.innerHTML = `
    <h4 class="font-semibold mb-2">Item #${itemIndex+1}</h4>
    <div class="mb-2">
      <label class="text-sm">Brand</label>
      <input type="text" name="items[${itemIndex}][brand]" class="border rounded w-full p-2">
    </div>
    <div class="mb-2">
      <label class="text-sm">Nomor Seri</label>
      <input type="text" name="items[${itemIndex}][serial_number]" class="border rounded w-full p-2">
    </div>
    <div class="mb-2">
      <label class="text-sm">Kondisi</label>
      <select name="items[${itemIndex}][condition]" class="border rounded w-full p-2">
        <option value="good">Good</option>
        <option value="damaged">Damaged</option>
        <option value="maintenance">Maintenance</option>
      </select>
    </div>
    <div class="mb-2">
      <label class="text-sm">Status</label>
      <select name="items[${itemIndex}][status]" class="border rounded w-full p-2">
        <option value="available">Available</option>
        <option value="in_use">In Use</option>
        <option value="reserved">Reserved</option>
      </select>
    </div>
    <!-- Button hapus -->
    <button type="button" onclick="removeItem(this)" class="bg-red-600 text-white px-3 py-1 rounded">
      Hapus
    </button>
  `;
  wrapper.appendChild(newItem);
  itemIndex++;
}

// Fungsi hapus item
function removeItem(button) {
  let itemForm = button.closest('.item-form');
  itemForm.remove();
}
</script>

</div>

@endsection
