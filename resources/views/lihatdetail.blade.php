@extends('layouts.guest') @section('content')

<section class="">
  <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-center py-12">
    <div>
      <h2 class="text-3xl md:text-4xl font-bold py-6 pt-5 leading-tight">
        {{ $room->name }}
      </h2>
      <p class="text-gray-600 mt-4">
        {{ $room->description }}
      </p>
      {{--
      <p class="text-gray-600 mt-3">
        Cocok untuk: Latihan Musik, Instrumental, Duo, dan Band.
      </p>
      --}}
      <a href="#" class="mt-6 bg-clifford hover:bg-indigo-600 text-white px-6 py-3 rounded-lg shadow inline-block">
        Lihat Fasilitas
      </a>
    </div>

    <div class="flex justify-center md:justify-end">
      <img src="https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg" alt="Video Power" class="max-w-full rounded-lg shadow-lg" />
    </div>
  </div>
</section>

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

<div class="border-t pt-6 border-b pb-6">
  <h2 class="text-xl font-bold mb-6 text-center fade-in-up">Fasilitas Ruangan</h2>

  <div class="grid grid-cols-2 md:grid-cols-3 gap-6 text-center">
    <!-- Gitar -->
    @foreach ($room->inventoryItems as $item)
    <div class="flex flex-col items-center fade-in-up" style="animation-delay: 0.1s;">
      <i class="fa-solid fa-guitar text-gray-600 text-2xl mb-2 transition-transform duration-200 transform hover:scale-125 hover:text-indigo-600"></i>
      <span class="text-gray-700">{{ $item->name }} ({{ $item->pivot->quantity }})</span>
    </div>
    @endforeach
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
            <p class="text-gray-700">Cek ketersediaan jadwal di fitur live schedule: linktr.ee/creativehub_bdg, hubungi hotline di jam 08.00–16.30 WIB, lampirkan KTP Kota Bandung.</p>
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
<div class="pt-5 pb-5">
  <div class="mx-auto px-6 py-12 mt-12 mb-12 border overflow-hidden relative">
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
          <span class="font-semibold text-black">Personil</span>
          <p>Harap lampirkan nama-nama personil yang terlibat pada setiap pengajuan.</p>
        </div>
        <div>
          <span class="font-semibold text-black">KTP</span>
          <p>Pengaju harus memiliki KTP Kota Bandung yang valid.</p>
        </div>
        <div>
          <span class="font-semibold text-black">Batas Waktu Pengajuan</span>
          <p>Pengajuan harus dilakukan melalui website Bandung Creative Hub untuk diproses.</p>
        </div>
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
      <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6">
        <div class="flex justify-between items-center border-b pb-3 mb-4">
          <h5 class="text-lg font-semibold">Booking Studio Musik</h5>
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
              class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
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
      document.getElementById("bookingDate").value = dateStr;

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

      openModal();
    },
  });

  calendar.render();
});
</script>

@endsection
