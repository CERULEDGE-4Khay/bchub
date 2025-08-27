@extends('layouts.admin') @section('content')
<div class="mx-auto bg-white p-6 rounded-lg shadow">
  <h2 class="text-xl font-semibold mb-4">Edit Ruangan</h2>

  <form action="{{ route('rooms.update', $room->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')

    <!-- Nama -->
    <div class="mb-4">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Nama Ruangan</label>
      <input type="text" name="name" value="{{ old('name', $room->name) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>

    <!-- Kapasitas -->
    <div class="mb-4">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Kapasitas</label>
      <input type="number" name="capacity" value="{{ old('capacity', $room->capacity) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>

    <!-- Lantai -->
    <div class="mb-4">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Lantai</label>
      <input type="text" name="floor" value="{{ old('floor', $room->floor) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
    </div>

    {{-- Inventory --}}
    <div class="mb-5">
      <label for="fasilitas" class="block mb-2 text-sm font-medium text-gray-900">Fasilitas</label>
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
              <tr class="border-b {{ $item->status !== 'available' && !in_array($item->id, $roomItems) ? 'bg-gray-100 text-gray-400' : '' }}">
                <td class="px-4 py-2">
                  @if($item->status === 'available' || in_array($item->id, $roomItems))
                  <input type="checkbox" name="inventory_items[]" value="{{ $item->id }}" {{ in_array($item- />id, $roomItems) ? 'checked' : '' }}> @else
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
      {{-- Gambar lama --}} @foreach($room->images as $image)
      <div class="dropzone relative flex items-center justify-center w-full h-64 border-2 border-gray-300 rounded-lg bg-gray-50 overflow-hidden">
        <!-- Tombol hapus -->
        <button type="button" class="remove-old absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600 z-10" data-id="{{ $image->id }}">
          <i class="bi bi-trash"></i>
        </button>
        <!-- Preview -->
        <img src="{{ asset('storage/' . $image->image_url) }}" class="object-cover w-full h-full rounded-lg" />
      </div>
      @endforeach {{-- Dropzone baru --}}
      <div class="dropzone relative flex items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg bg-gray-50 overflow-hidden">
        <button type="button" class="remove-btn absolute top-2 right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center hover:bg-red-600 z-10">
          <i class="bi bi-trash"></i>
        </button>
        <div class="preview-container w-full h-full flex items-center justify-center"></div>
        <label class="placeholder absolute inset-0 flex flex-col items-center justify-center cursor-pointer">
          <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <i class="bi bi-cloud-arrow-up text-4xl text-gray-500"></i>
            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
          </div>
          <input type="file" class="dropzone-input hidden" accept="image/*" name="images[]" />
        </label>
      </div>

      <!-- Tombol tambah -->
      <div class="w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 flex flex-col items-center justify-center" id="add-image">
        <i class="bi bi-plus-circle text-4xl"></i>
      </div>
    </div>

    <!-- Deskripsi -->
    <div class="mb-4">
      <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi</label>
      <textarea name="description" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ old('description', $room->description) }}</textarea>
    </div>

    <button type="submit" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
      Edit
    </button>
    <a href="{{ route('rooms.index') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Kembali</a>
  </form>
</div>

<script>
  const addImage = document.getElementById("add-image");
  const imageWrapper = document.getElementById("image-wrapper");

  function initDropzone(dropzoneEl) {
    const removeBtn = dropzoneEl.querySelector(".remove-btn");
    const fileInput = dropzoneEl.querySelector(".dropzone-input");
    const previewContainer = dropzoneEl.querySelector(".preview-container");
    const placeholder = dropzoneEl.querySelector(".placeholder");

    if (removeBtn) {
      removeBtn.addEventListener("click", () => {
        dropzoneEl.remove();
      });
    }

    if (fileInput) {
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
  }

  // Inisialisasi dropzone baru
  document.querySelectorAll("#image-wrapper .dropzone").forEach(initDropzone);

  // Tambah dropzone baru
  addImage.addEventListener("click", function () {
    const temp = document.createElement("div");
    temp.innerHTML = dropzoneFile().trim();
    const newDropzone = temp.firstChild;
    imageWrapper.insertBefore(newDropzone, addImage);
    initDropzone(newDropzone);
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
            <i class="bi bi-cloud-arrow-up text-4xl text-gray-500"></i>
            <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
          </div>
          <input type="file" class="dropzone-input hidden" accept="image/*" name="images[]" />
        </label>
      </div>
    `;
  }

  // Hapus gambar lama pakai AJAX
  document.querySelectorAll(".remove-old").forEach((btn) => {
    btn.addEventListener("click", function () {
      const id = this.dataset.id;
      if (confirm("Hapus gambar ini?")) {
        fetch(`/rooms/images/${id}`, {
          method: "DELETE",
          headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}",
            Accept: "application/json",
          },
        }).then((res) => {
          if (res.ok) {
            this.closest(".dropzone").remove();
          }
        });
      }
    });
  });
</script>

@endsection
