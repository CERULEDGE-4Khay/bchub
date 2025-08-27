@extends('layouts.admin') @section('content')
<div class="p-6 bg-white border border-gray-200 rounded-lg shadow-sm">
  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Tambah dataaaa ruangan</h5>
  <form action="{{ route('rooms.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="name" />
        @error('name')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Lantai</label>
        <input type="text" id="base-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="floor" />
        @error('floor')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="kapasitas" class="block mb-2 text-sm font-medium text-gray-900">Kapasitas</label>
        <input type="number" id="kapasitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="capacity" />
        @error('capacity')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
      <div class="mb-5">
        <label for="kapasitas" class="block mb-2 text-sm font-medium text-gray-900">Fasilitas</label>
        @foreach($inventoryItems->groupBy('inventory.name') as $category => $items)
        <details class="mb-2 border rounded">
          <summary class="cursor-pointer px-4 py-2 bg-gray-100 font-medium">{{ $category }}</summary>
          <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-700">
              <thead class="text-xs uppercase bg-gray-50 text-gray-600">
                <tr>
                  <th class="px-4 py-2">Pilih</th>
                  <th class="px-4 py-2">Merek</th>
                  <th class="px-4 py-2">Serial</th>
                  <th class="px-4 py-2">Kondisi</th>
                  <th class="px-4 py-2">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)
                <tr class="border-b {{ $item->status !== 'available' ? 'bg-gray-100 text-gray-400' : '' }}">
                  <td class="px-4 py-2">
                    @if($item->status === 'available')
                    <input type="checkbox" name="inventory_items[]" value="{{ $item->id }}" />
                    @else
                    <span class="text-xs italic">Tidak tersedia</span>
                    @endif
                  </td>
                  <td class="px-4 py-2">{{ $item->brand ?? '-' }}</td>
                  <td class="px-4 py-2">{{ $item->serial_number ?? '-' }}</td>
                  <td class="px-4 py-2">{{ ucfirst($item->condition) }}</td>
                  <td class="px-4 py-2">{{ ucfirst($item->status) }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </details>
        @endforeach
      </div>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-5" id="image-wrapper">
        <!-- Dropzone awal -->
        <div class="dropzone relative flex items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg bg-gray-50 overflow-hidden">
          <!-- tombol hapus -->
          <button type="button" class="remove-btn absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600 z-10">
            <i class="bi bi-trash"></i>
          </button>

          <!-- container preview -->
          <div class="preview-container w-full h-full flex items-center justify-center"></div>

          <!-- placeholder -->
          <label class="placeholder absolute inset-0 flex flex-col items-center justify-center cursor-pointer">
            <div class="flex flex-col items-center justify-center pt-5 pb-6">
              <svg class="w-8 h-8 mb-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
                />
              </svg>
              <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
              <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
            </div>
            <input type="file" class="dropzone-input hidden" accept="image/*" name="images[]" />
          </label>
        </div>

        <!-- tombol tambah -->
        <div class="w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 flex flex-col items-center justify-center" id="add-image">
          <i class="bi bi-plus-circle text-4xl"></i>
        </div>
      </div>

      <div class="mb-5">
        <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
        <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Dekripsikan..." name="description"></textarea>
        @error('description')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
      </div>
    </div>
    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
      Simpan
    </button>
  </form>
</div>

<script>
  const addImage = document.getElementById("add-image");
  const imageWrapper = document.getElementById("image-wrapper");

  // Fungsi untuk aktifin fitur dropzone
  function initDropzone(dropzoneEl) {
    const removeBtn = dropzoneEl.querySelector(".remove-btn");
    const fileInput = dropzoneEl.querySelector(".dropzone-input");
    const previewContainer = dropzoneEl.querySelector(".preview-container");
    const placeholder = dropzoneEl.querySelector(".placeholder");

    // hapus dropzone
    removeBtn.addEventListener("click", () => {
      dropzoneEl.remove();
    });

    // preview image
    fileInput.addEventListener("change", function () {
      const file = this.files[0];
      if (file && file.type.startsWith("image/")) {
        const reader = new FileReader();
        reader.onload = function (e) {
          previewContainer.innerHTML = `<img src="${e.target.result}" class="object-cover w-full h-full rounded-lg" />`;
          placeholder.classList.add("hidden");
        };
        reader.readAsDataURL(file);
      }
    });
  }

  // Inisialisasi semua dropzone yang ada di HTML awal
  document.querySelectorAll("#image-wrapper .dropzone").forEach(initDropzone);

  // Tambah dropzone baru
  addImage.addEventListener("click", function () {
    const temp = document.createElement("div");
    temp.innerHTML = dropzoneFile().trim();
    const newDropzone = temp.firstChild;

    imageWrapper.insertBefore(newDropzone, addImage);
    initDropzone(newDropzone); // langsung aktif
  });

  function dropzoneFile() {
    return `
    <div class="dropzone relative flex items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg bg-gray-50 overflow-hidden">
      <button type="button" class="remove-btn absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600 z-10">
        <i class="bi bi-trash"></i>
      </button>
      <div class="preview-container w-full h-full flex items-center justify-center"></div>
      <label class="placeholder absolute inset-0 flex flex-col items-center justify-center cursor-pointer">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
          <svg class="w-8 h-8 mb-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
          </svg>
          <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
          <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input type="file" class="dropzone-input hidden" accept="image/*" name="images[]" />
      </label>
    </div>
  `;
  }
</script>
@endsection
