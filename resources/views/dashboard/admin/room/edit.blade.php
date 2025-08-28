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
                  <input type="checkbox" name="inventory_items[]" value="{{ $item->id }}" {{ in_array($item->id, $roomItems) ? 'checked' : '' }}> @else
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
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mb-5" id="image-wrapper">
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
            <p class="text-xs text-gray-500 text-center">PNG, JPG(MAX. 800x400px)</p>
          </div>
          <input type="file" class="dropzone-input hidden" accept="image/*" name="images[]" />
        </label>
      </div>

      <!-- Tombol tambah -->
      <div class="w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 flex flex-col items-center justify-center" id="add-image">
        <i class="bi bi-plus-circle text-4xl"></i>
      </div>
    </div>

    <div class="mb-5">
      <h2 class="block mb-2 text-sm font-medium text-gray-900">Tambah Ketentuan</h2>
      div class="mb-2 text-sm text-gray-500">
      <p class="mb-2">Gunakan bagian ini untuk menambahkan ketentuan khusus yang harus dipenuhi user saat melakukan booking.</p>
      Setiap ketentuan bisa memiliki <strong>Tipe</strong> yang berbeda sesuai kebutuhan:
      <ul class="list-disc pl-5 mt-2 space-y-1">
        <li><strong>Text</strong> → digunakan untuk input singkat, misalnya <em>"Nama Band"</em>, <em>"Jumlah Anggota"</em>, atau <em>"Nama Penanggung Jawab"</em>.</li>
        <li><strong>Textarea</strong> → digunakan untuk keterangan yang lebih panjang, misalnya <em>"Daftar Lagu"</em>, <em>"Agenda Acara"</em>, atau <em>"Kebutuhan Tambahan"</em>.</li>
        <li><strong>File</strong> → digunakan untuk mengunggah dokumen atau bukti, misalnya <em>"Surat Izin Kegiatan"</em>, <em>"KTP Penanggung Jawab"</em>, atau <em>"Proposal Acara"</em>.</li>
        <li><strong>— Tidak ada input</strong> → jika hanya berupa informasi/pengingat tanpa harus diisi user, misalnya <em>"Dilarang membawa makanan dari luar"</em> atau <em>"Booking minimal 2 jam"</em>.</li>
      </ul>
      <p class="mt-2">Dengan begitu, ketentuan bisa lebih fleksibel sesuai jenis ruangan (misalnya Studio Musik, Aula, atau Meeting Room).</p>
    </div>
    <div class="mx-auto p-1 rounded-xl">
      <div id="terms-wrapper">
        @if($room->requirements) @foreach($room->requirements as $i => $term)
        <input type="hidden" name="terms[{{ $i }}][id]" value="{{ $term->id }}" />
        <div class="term space-y-4 bg-gray-50 p-4 rounded-lg border border-gray-200">
          <div>
            <label for="title-{{ $i }}" class="block mb-2 text-sm font-medium text-gray-900">Nama Ketentuan</label>
            <input
              type="text"
              id="title-{{ $i }}"
              name="terms[{{ $i }}][title]"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
              placeholder="Contoh: Nama Band"
              required
              value="{{ $term->label }}"
            />
          </div>

          <div>
            <label for="desc-{{ $i }}" class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Ketentuan</label>
            <textarea
              id="desc-{{ $i }}"
              name="terms[{{ $i }}][description]"
              rows="3"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Tuliskan deskripsi ketentuan di sini..."
            >
{{ $term->description }}
            </textarea>
          </div>

          <div>
            <label for="type-{{ $i }}" class="block mb-2 text-sm font-medium text-gray-900">Tipe</label>
            <select id="type-{{ $i }}" name="terms[{{ $i }}][type]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
              <option value="" {{ empty($term->type) ? 'selected' : '' }}>— Tidak ada input (hanya ketentuan) —</option>
              <option value="text" {{ $term->type === 'text' ? 'selected' : '' }}>Text</option>
              <option value="textarea" {{ $term->type === 'textarea' ? 'selected' : '' }}>Textarea</option>
              <option value="file" {{ $term->type === 'file' ? 'selected' : '' }}>File</option>
            </select>
          </div>

          <div class="flex justify-end">
            <button type="button" onclick="removeTerm(this)" class="px-3 py-1.5 text-sm font-medium text-red-600 bg-red-50 border border-red-200 rounded-lg hover:bg-red-100">
              Hapus
            </button>
          </div>
        </div>
        @endforeach @endif
      </div>

      <button type="button" onclick="addTerm()" class="mt-6 w-full py-2.5 border-2 border-dashed border-gray-300 rounded-lg text-gray-500 hover:border-blue-400 hover:text-blue-500 transition">
        + Tambah Ketentuan
      </button>
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
  let termIndex = 1;

  function addTerm() {
    const wrapper = document.getElementById("terms-wrapper");
    const html = `
    <div class="term space-y-4 bg-gray-50 p-4 rounded-lg border border-gray-200">
      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Nama Ketentuan</label>
        <input type="text" name="terms[${termIndex}][title]"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
          placeholder="Contoh: Nama Band" required>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Deskripsi Ketentuan</label>
        <textarea name="terms[${termIndex}][description]" rows="3"
          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300"></textarea>
      </div>

      <div>
        <label class="block mb-2 text-sm font-medium text-gray-900">Tipe</label>
        <select name="terms[${termIndex}][type]"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
          <option value="text">Text</option>
          <option value="textarea">Textarea</option>
          <option value="file">File</option>
        </select>
      </div>

      <div class="flex justify-end">
        <button type="button" onclick="removeTerm(this)"
          class="px-3 py-1.5 text-sm font-medium text-red-600 bg-red-50 border border-red-200 rounded-lg hover:bg-red-100">
          Hapus
        </button>
      </div>
    </div>
  `;
    wrapper.insertAdjacentHTML("beforeend", html);
    termIndex++;
  }

  function removeTerm(el) {
    el.closest(".term").remove();
  }
</script>

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
