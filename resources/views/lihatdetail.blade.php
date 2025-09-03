@extends('layouts.guest') @section('content')

<div class="mt-20 container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-center py-12">
  <div>
    <h2 class="text-3xl md:text-4xl font-bold pt-5 leading-tight">
      {{ $room->name }}
    </h2>
    <p class="text-gray-600 mt-4">
      {{ $room->description }}
    </p>
    <a href="#fasilitas" class="mt-6 bg-clifford hover:bg-indigo-600 text-white px-6 py-3 rounded-lg shadow inline-block">
      Lihat Fasilitas
    </a>
  </div>

  <div class="flex justify-center md:justify-end">
    <!-- Swiper -->
    <div class="swiper w-full max-w-2xl rounded-xl shadow-lg">
      <div class="swiper-wrapper">
        @foreach ($room->images as $image)
          <div class="swiper-slide">
            <img src="{{ asset('storage/' . $image->image_url) }}" 
                 alt="Room Image" 
                 class="w-full h-80 md:h-96 object-cover rounded-xl" />
          </div>
        @endforeach
      </div>

      <!-- Navigasi -->
      @if($room->images->count() > 1)
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      @endif
    </div>
  </div>
</div>


{{-- Fasilitas Ruangan --}}
<style>
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .fade-in-up {
    animation: fadeInUp 0.6s ease-out forwards;
  }
</style>

<div class="border-t pt-8 border-b pb-8 bg-gray-50">
  <h2 class="text-2xl font-bold mb-8 text-center text-gray-800">Fasilitas Ruangan</h2>
  <div class="container mx-auto px-6">
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach ($room->inventoryItems as $item)
        <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-5 flex flex-col justify-between">
          <div>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">
              {{ $item->inventory->name }}
            </h3>
            <p class="text-sm text-gray-600 mb-1">
              <span class="font-medium">Brand:</span> {{ $item->brand ?? 'Tidak ada' }}
            </p>
            <p class="text-sm text-gray-600 mb-1">
              <span class="font-medium">Kondisi:</span> 
              <span class="@if($item->condition === 'good') text-green-600 
                          @elseif($item->condition === 'damaged') text-red-600 
                          @else text-yellow-600 @endif">
                {{ ucfirst($item->condition) }}
              </span>
            </p>
          </div>
  
          <div class="mt-4">
            <span class="inline-block px-3 py-1 text-xs rounded-full 
              @if($item->status === 'available') bg-green-100 text-green-700
              @elseif($item->status === 'in_use') bg-blue-100 text-blue-700
              @else bg-yellow-100 text-yellow-700 @endif">
              {{ ucfirst(str_replace('_', ' ', $item->status)) }}
            </span>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</div>

<div class="relative bg-gradient-to-br from-green-50 via-white to-green-100 overflow-hidden">
  <!-- Animated Blobs -->
  <div class="absolute top-20 left-10 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
  <div class="absolute top-40 right-10 w-96 h-96 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
  <div class="absolute bottom-20 left-1/2 w-80 h-80 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>

  <div class="container mx-auto px-6 py-20 relative">
    <!-- Judul -->
    <h2 class="text-3xl font-extrabold mb-16 text-center text-gray-800 drop-shadow-lg">Prosedur Peminjaman Tempat</h2>

    <!-- Timeline -->
    <div class="relative flex flex-col items-center">
      <div class="absolute w-1 bg-gradient-to-b from-green-400 to-green-600 h-full left-1/2 transform -translate-x-1/2"></div>

      <!-- Step 1 -->
      <div class="flex items-center w-full mb-16">
        <div class="w-1/2 flex justify-end pr-6">
          <div class="bg-white/70 backdrop-blur-md shadow-lg rounded-xl p-6 w-72 hover:scale-105 transition transform duration-300">
            <p class="text-gray-700">Cek ketersediaan jadwal di website BCH. Hubungi hotline di jam 08.00–16.30 WIB, jika ada kendala.</p>
          </div>
        </div>
        <div class="relative z-10">
          <div class="flex items-center justify-center w-12 h-12 bg-green-500 rounded-full text-white font-bold shadow-lg">1</div>
        </div>
        <div class="w-1/2"></div>
      </div>

      <!-- Step 2 -->
      <div class="flex items-center w-full mb-16">
        <div class="w-1/2"></div>
        <div class="relative z-10">
          <div class="flex items-center justify-center w-12 h-12 bg-green-500 rounded-full text-white font-bold shadow-lg">2</div>
        </div>
        <div class="w-1/2 flex justify-start pl-6">
          <div class="bg-white/70 backdrop-blur-md shadow-lg rounded-xl p-6 w-72 hover:scale-105 transition transform duration-300">
            <p class="text-gray-700">Mengisi Surat Pernyataan di Front Office sebelum sesi berlangsung.</p>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="flex items-center w-full mb-16">
        <div class="w-1/2 flex justify-end pr-6">
          <div class="bg-white/70 backdrop-blur-md shadow-lg rounded-xl p-6 w-72 hover:scale-105 transition transform duration-300">
            <p class="text-gray-700">Selama sesi berlangsung, penanggung jawab wajib menyimpan KTP di Front Office.</p>
          </div>
        </div>
        <div class="relative z-10">
          <div class="flex items-center justify-center w-12 h-12 bg-green-500 rounded-full text-white font-bold shadow-lg">3</div>
        </div>
        <div class="w-1/2"></div>
      </div>

      <!-- Step 4 -->
      <div class="flex items-center w-full">
        <div class="w-1/2"></div>
        <div class="relative z-10">
          <div class="flex items-center justify-center w-12 h-12 bg-green-500 rounded-full text-white font-bold shadow-lg">4</div>
        </div>
        <div class="w-1/2 flex justify-start pl-6">
          <div class="bg-white/70 backdrop-blur-md shadow-lg rounded-xl p-6 w-72 hover:scale-105 transition transform duration-300">
            <p class="text-gray-700">Tempat siap digunakan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Animasi Blobs -->
<style>
  .animate-blob {
    animation: blob 7s infinite;
  }
  .animation-delay-2000 {
    animation-delay: 2s;
  }
  .animation-delay-4000 {
    animation-delay: 4s;
  }
  @keyframes blob {
    0%,
    100% {
      transform: translate(0px, 0px) scale(1);
    }
    33% {
      transform: translate(30px, -50px) scale(1.1);
    }
    66% {
      transform: translate(-20px, 20px) scale(0.9);
    }
  }
</style>

<!-- Bagian Ketentuan -->
<div class="pt-5 pb-5 border">
  <div class="container mx-auto px-6 py-12 mt-12 mb-12 overflow-hidden relative">
    <h2 class="text-2xl font-bold mb-10">Ketentuan</h2>

    <!-- Jam Beroperasi -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-2 mb-12">
      <!-- Kiri -->
      <div class="col-span-4 flex items-start gap-3">
        <div class="text-2xl text-blue-900">
          <i class="fas fa-clock"></i>
        </div>
        <h3 class="font-semibold text-lg md:text-blue-900">Jam Beroperasi</h3>
      </div>

      <!-- Kanan -->
      <div class="col-span-8">
        <div class="grid grid-cols-2 gap-4 mb-2">
          <div class="text-gray-500">Buka</div>
          <div class="text-gray-500">Tutup</div>
          <div class="font-medium">09:00</div>
          <div class="font-medium">15:00</div>
        </div>
        <p class="text-gray-500 text-sm mt-2">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
    </div>

    <!-- Kebijakan Lainnya -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-2 mb-12">
      <!-- Kiri -->
      <div class="col-span-4 flex items-start gap-3">
        <div class="text-2xl text-blue-900">
          <i class="fas fa-book-open"></i>
        </div>
        <h3 class="font-semibold text-lg md:text-blue-900">Kebijakan Lainnya</h3>
      </div>

      <!-- Kanan -->
      <div class="col-span-8 space-y-4 text-gray-600">
        <div>
          <span class="font-semibold text-black">KTP</span>
          <p>Pengaju harus memiliki KTP Kota Bandung yang valid.</p>
        </div>
        <div>
          <span class="font-semibold text-black">Batas Waktu Pengajuan</span>
          <p>Pengajuan harus dilakukan melalui website Bandung Creative Hub untuk diproses.</p>
        </div>
        @foreach ($room->requirements as $req)
          <div>
            <span class="font-semibold text-black">{{ $req->label }}</span>
            <p>{{ $req->description }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>

<div class="">
  <div class="max-w-5xl mx-auto px-6 py-12">
    <h2 class="text-2xl font-bold mb-10 text-center">Calendar</h2>
    <div class="overflow-x-auto rounded-lg shadow">
    <div id="calendar" class="min-w-[350px]"></div>
  </div>
    {{-- Modal :( --}}
    <div id="bookingModal" class="fixed inset-0 hidden items-center justify-center bg-black/50 z-50">
      @auth
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6">
          <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h5 class="text-lg font-semibold">Booking {{ $room->name }}</h5>
            <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
              ✕
            </button>
          </div>

          <form action="{{ route('rooms.bookings.store', $room) }}" id="bookingForm" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
              <label class="block text-sm font-medium">Tanggal</label>
              <input type="text" id="bookingDate" name="date" readonly
                class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
            </div>

            <div>
              <label class="block text-sm font-medium">Pilih Sesi</label>
              <select id="bookingSession" name="session" required
                class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                <option value="">-- Pilih Sesi --</option>
                <option value="09:00">09.00–11.00</option>
                <option value="11:00">11.00–13.00</option>
                <option value="13:00">13.00–15.00</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium">Atas Nama</label>
              <input type="text" id="bookingNama" name="nama" required
                class="mt-1 bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" value="{{ auth()->user()->name }}" disabled readonly/>
            </div>

            <div>
              <label for="ktp" class="block text-sm font-medium">KTP</label>
              @if(auth()->user()->profile && auth()->user()->profile->ktp_path)
                <input type="text" 
                  value="Sudah upload KTP"
                  class="w-full rounded-lg border-gray-300 bg-gray-100 cursor-not-allowed" 
                  readonly disabled>
                
                <a href="{{ asset('storage/' . auth()->user()->profile->ktp_path) }}" 
                  target="_blank" 
                  class="text-blue-600 underline text-sm">
                  Lihat KTP
                </a>
              @else
                <input type="file" name="ktp" class="w-full rounded-lg border-gray-300" required>
              @endif
          </div>


            {{-- Dynamic Requirements --}}
            @foreach($room->requirements as $req)
              <div>
                <label class="block text-sm font-medium">
                  {{ $req->label }}
                  @if($req->is_required) <span class="text-red-500">*</span> @endif
                </label>

                @if($req->type === 'text')
                  <input type="text" name="requirements[{{ $req->id }}]" class="w-full rounded-lg border-gray-300"
                    placeholder="{{ $req->description }}" {{ $req->is_required ? 'required' : '' }}>
                @elseif($req->type === 'textarea')
                  <textarea name="requirements[{{ $req->id }}]" class="w-full rounded-lg border-gray-300" rows="3"
                    placeholder="{{ $req->description }}" {{ $req->is_required ? 'required' : '' }}></textarea>
                @elseif($req->type === 'file')
                  <input type="file" name="requirements[{{ $req->id }}]" class="w-full rounded-lg border-gray-300"
                    {{ $req->is_required ? 'required' : '' }}>
                @else
                  <p class="text-gray-600 text-sm">{{ $req->description }}</p>
                @endif
              </div>
            @endforeach

            <div class="flex justify-end pt-4 border-t">
              <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">
                Simpan Booking
              </button>
            </div>
          </form>
        </div>
      @else
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6">
          <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h5 class="text-lg font-semibold">Booking {{ $room->name }}</h5>
            <button class="text-gray-500 hover:text-gray-700" onclick="closeModal()">
              ✕
            </button>
          </div>

          <div class="flex justify-center items-center">
            <h1 class="text-2xl">Anda harus login terlebih dahulu</h1>
          </div>
        </div>
      @endauth
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/index.global.min.js"></script>

<script>
const modal = document.getElementById("bookingModal");

function openModal() {
  modal.classList.remove("hidden");
  modal.classList.add("flex");
}

function closeModal() {
  modal.classList.remove("flex");
  modal.classList.add("hidden");
}

document.addEventListener("DOMContentLoaded", function () {
  const calendarEl = document.getElementById("calendar");

  const calendar = new FullCalendar.Calendar(calendarEl, {
    initialView: "listMonth",
    locale: "id",
    timeZone: "Asia/Jakarta",
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "listMonth,dayGridMonth",
    },
    displayEventTime: true,
    // 🔥 ambil event dari route Laravel
    events: "{{ route('rooms.bookings.events', $room) }}",

    dateClick: function (info) {
      const dateStr = info.dateStr;
      const bookingDateInput = document.getElementById("bookingDate");

      if (bookingDateInput) {
        bookingDateInput.value = dateStr;

        // reset opsi sesi
        const options = document.querySelectorAll("#bookingSession option");
        options.forEach((opt) => (opt.disabled = false));

        // disable sesi yang sudah dipakai
        const events = calendar.getEvents().filter((e) => e.startStr.startsWith(dateStr));
        const takenSessions = events.map((e) => e.startStr.slice(11, 16));

        takenSessions.forEach((sesi) => {
          const opt = document.querySelector(`#bookingSession option[value="${sesi}"]`);
          if (opt) opt.disabled = true;
        });
      }

      openModal();
    },
  });

  calendar.render();
});
</script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>

@endsection
