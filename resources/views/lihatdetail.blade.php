@extends('layouts.guest')
@section('content')

<section class="">
    <div
        class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-center py-12"
        >
        <div>
            <h2 class="text-3xl md:text-4xl font-bold py-6 pt-5 leading-tight">
            Studio
            <span class="text-sky-600">Musik</span>
            </h2>
            <p class="text-gray-600 mt-4">
            Studio musik yang terletak di lantai dasar ini, merupakan studio musik gratis pertama di Bandung. Fasilitas yang tersedia sesuai standar studio musik pada umumnya dengan gitar listrik, gitar akustik, bass listrik, keyboard, drum, dan perangkat amplifier.
            </p>
            <p class="text-gray-600 mt-3">
            Cocok untuk: Latihan Musik, Instrumental, Duo, dan Band.
            </p>
            <a
            href="#"
            class="mt-6 bg-clifford hover:bg-indigo-600 text-white px-6 py-3 rounded-lg shadow inline-block"
            >
            Lihat Fasilitas
            </a>
        </div>

        <div class="flex justify-center md:justify-end">
            <img
            src="https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg"
            alt="Video Power"
            class="max-w-full rounded-lg shadow-lg"
            />
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
    <div class="flex flex-col items-center fade-in-up" style="animation-delay: 0.1s">
      <i class="fa-solid fa-guitar text-gray-600 text-2xl mb-2 
                 transition-transform duration-200 transform hover:scale-125 hover:text-indigo-600"></i>
      <span class="text-gray-700">Gitar (2)</span>
    </div>

    <!-- Bass Guitar -->
    <div class="flex flex-col items-center fade-in-up" style="animation-delay: 0.2s">
      <i class="fa-solid fa-guitar text-gray-600 text-2xl mb-2 rotate-180 
                 transition-transform duration-200 transform hover:scale-125 hover:text-indigo-600"></i>
      <span class="text-gray-700">Bass Guitar (1)</span>
    </div>

    <!-- Ampli BlackStar -->
    <div class="flex flex-col items-center fade-in-up" style="animation-delay: 0.3s">
      <i class="fa-solid fa-compact-disc text-gray-600 text-2xl mb-2 
                 transition-transform duration-200 transform hover:scale-125 hover:text-indigo-600"></i>
      <span class="text-gray-700">Ampli BlackStar (2)</span>
    </div>

    <!-- Drum Set -->
    <div class="flex flex-col items-center fade-in-up" style="animation-delay: 0.4s">
      <i class="fa-solid fa-drum text-gray-600 text-2xl mb-2 
                 transition-transform duration-200 transform hover:scale-125 hover:text-indigo-600"></i>
      <span class="text-gray-700">Drum Set (1)</span>
    </div>

    <!-- Microphone -->
    <div class="flex flex-col items-center fade-in-up" style="animation-delay: 0.5s">
      <i class="fa-solid fa-microphone text-gray-600 text-2xl mb-2 
                 transition-transform duration-200 transform hover:scale-125 hover:text-indigo-600"></i>
      <span class="text-gray-700">Microphone (2)</span>
    </div>
  </div>
</div>

{{-- PROSEDUR --}}
{{-- <div class="container mx-auto px-6 py-16">

    <!-- Judul -->
    <h2 class="text-3xl font-extrabold mb-16 text-center text-gray-800 tracking-wide">
        Prosedur Peminjaman Tempat
    </h2>

    <!-- Wrapper -->
    <div class="relative flex flex-col items-center">

        <!-- Garis Tengah -->
        <div class="absolute w-1 bg-gradient-to-b from-green-400 to-green-600 h-full left-1/2 transform -translate-x-1/2"></div>

        <!-- Step 1 -->
        <div class="flex items-center w-full mb-20 group">
            <div class="w-1/2 flex justify-end pr-6">
                <div class="bg-gradient-to-r from-green-400 to-green-500 p-6 rounded-2xl w-72 shadow-lg transform transition duration-300 group-hover:scale-105 group-hover:shadow-2xl">
                    <p class="text-white text-sm font-medium leading-relaxed">
                        Cek ketersediaan jadwal di fitur live schedule: 
                        <span class="underline">linktr.ee/creativehub_bdg</span>, 
                        Hubungi hotline di jam 08.00–16.30 WIB, lampirkan KTP Kota Bandung
                    </p>
                </div>
            </div>
            <div class="relative z-10">
                <div class="flex items-center justify-center w-12 h-12 bg-green-500 text-white font-bold rounded-full shadow-md group-hover:scale-110 transition transform duration-300">
                    1
                </div>
            </div>
            <div class="w-1/2"></div>
        </div>

        <!-- Step 2 -->
        <div class="flex items-center w-full mb-20 group">
            <div class="w-1/2"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-center w-12 h-12 bg-green-500 text-white font-bold rounded-full shadow-md group-hover:scale-110 transition transform duration-300">
                    2
                </div>
            </div>
            <div class="w-1/2 flex justify-start pl-6">
                <div class="bg-gradient-to-r from-green-400 to-green-500 p-6 rounded-2xl w-72 shadow-lg transform transition duration-300 group-hover:scale-105 group-hover:shadow-2xl">
                    <p class="text-white text-sm font-medium leading-relaxed">
                        Mengisi Surat Pernyataan di Front Office sebelum sesi berlangsung.
                    </p>
                </div>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="flex items-center w-full mb-20 group">
            <div class="w-1/2 flex justify-end pr-6">
                <div class="bg-gradient-to-r from-green-400 to-green-500 p-6 rounded-2xl w-72 shadow-lg transform transition duration-300 group-hover:scale-105 group-hover:shadow-2xl">
                    <p class="text-white text-sm font-medium leading-relaxed">
                        Selama sesi berlangsung, penanggung jawab wajib menyimpan KTP di Front Office.
                    </p>
                </div>
            </div>
            <div class="relative z-10">
                <div class="flex items-center justify-center w-12 h-12 bg-green-500 text-white font-bold rounded-full shadow-md group-hover:scale-110 transition transform duration-300">
                    3
                </div>
            </div>
            <div class="w-1/2"></div>
        </div>

        <!-- Step 4 -->
        <div class="flex items-center w-full group">
            <div class="w-1/2"></div>
            <div class="relative z-10">
                <div class="flex items-center justify-center w-12 h-12 bg-green-500 text-white font-bold rounded-full shadow-md group-hover:scale-110 transition transform duration-300">
                    4
                </div>
            </div>
            <div class="w-1/2 flex justify-start pl-6">
                <div class="bg-gradient-to-r from-green-400 to-green-500 p-6 rounded-2xl w-72 shadow-lg transform transition duration-300 group-hover:scale-105 group-hover:shadow-2xl">
                    <p class="text-white text-sm font-medium leading-relaxed">
                        Tempat siap digunakan.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div> --}}
{{-- <div class="container mx-auto px-6 py-16">

  <!-- Judul -->
  <h2 class="text-4xl font-extrabold mb-16 text-center text-gray-800 tracking-wide">
    🚀 Prosedur Peminjaman Tempat
  </h2>

  <!-- Timeline Wrapper -->
  <div class="relative flex flex-col items-center">

    <!-- Garis Tengah -->
    <div class="absolute w-1 bg-gradient-to-b from-green-400 via-blue-500 to-pink-500 h-full left-1/2 transform -translate-x-1/2"></div>

    <!-- Step 1 -->
    <div class="flex items-center w-full mb-20 group">
      <div class="w-1/2 flex justify-end pr-6">
        <div class="backdrop-blur-md bg-gradient-to-r from-green-400/80 to-green-600/80 text-white p-6 rounded-2xl shadow-lg w-80 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-2xl group-hover:shadow-green-400/40 animate-slideInLeft">
          <p class="text-lg leading-relaxed">
            Cek ketersediaan jadwal di fitur live schedule, hubungi hotline (08.00–16.30 WIB), lampirkan KTP Kota Bandung
          </p>
        </div>
      </div>
      <div class="relative z-10">
        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-400 to-green-600 rounded-full text-2xl shadow-lg text-white animate-bounce">
          📅
        </div>
      </div>
      <div class="w-1/2"></div>
    </div>

    <!-- Step 2 -->
    <div class="flex items-center w-full mb-20 group">
      <div class="w-1/2"></div>
      <div class="relative z-10">
        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-blue-400 to-blue-600 rounded-full text-2xl shadow-lg text-white animate-bounce">
          📝
        </div>
      </div>
      <div class="w-1/2 flex justify-start pl-6">
        <div class="backdrop-blur-md bg-gradient-to-r from-blue-400/80 to-blue-600/80 text-white p-6 rounded-2xl shadow-lg w-80 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-2xl group-hover:shadow-blue-400/40 animate-slideInRight">
          <p class="text-lg leading-relaxed">
            Mengisi Surat Pernyataan di Front Office sebelum sesi berlangsung
          </p>
        </div>
      </div>
    </div>

    <!-- Step 3 -->
    <div class="flex items-center w-full mb-20 group">
      <div class="w-1/2 flex justify-end pr-6">
        <div class="backdrop-blur-md bg-gradient-to-r from-purple-400/80 to-purple-600/80 text-white p-6 rounded-2xl shadow-lg w-80 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-2xl group-hover:shadow-purple-400/40 animate-slideInLeft">
          <p class="text-lg leading-relaxed">
            Selama sesi berlangsung, penanggung jawab wajib menyimpan KTP di Front Office
          </p>
        </div>
      </div>
      <div class="relative z-10">
        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-purple-400 to-purple-600 rounded-full text-2xl shadow-lg text-white animate-bounce">
          🪪
        </div>
      </div>
      <div class="w-1/2"></div>
    </div>

    <!-- Step 4 -->
    <div class="flex items-center w-full group">
      <div class="w-1/2"></div>
      <div class="relative z-10">
        <div class="flex items-center justify-center w-16 h-16 bg-gradient-to-r from-pink-400 to-pink-600 rounded-full text-2xl shadow-lg text-white animate-bounce">
          ✅
        </div>
      </div>
      <div class="w-1/2 flex justify-start pl-6">
        <div class="backdrop-blur-md bg-gradient-to-r from-pink-400/80 to-pink-600/80 text-white p-6 rounded-2xl shadow-lg w-80 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-2xl group-hover:shadow-pink-400/40 animate-slideInRight">
          <p class="text-lg leading-relaxed">
            Tempat siap digunakan 🎉
          </p>
        </div>
      </div>
    </div>

  </div>
</div>
<style>
@keyframes slideInLeft {
  from { transform: translateX(-50px); opacity: 0; }
  to { transform: translateX(0); opacity: 1; }
}
@keyframes slideInRight {
  from { transform: translateX(50px); opacity: 0; }
  to { transform: translateX(0); opacity: 1; }
}
.animate-slideInLeft { animation: slideInLeft 0.8s ease-out; }
.animate-slideInRight { animation: slideInRight 0.8s ease-out; }
</style> --}}
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
        0%, 100% {
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
<div class="border-t pt-5 border-b pb-5">
    <div class="max-w-5xl mx-auto px-6 py-12 mt-12 mb-12">
        <h2 class="text-2xl font-bold mb-10">Ketentuan</h2>

        <!-- Jam Beroperasi -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-20 mb-12">
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
        <div class="grid grid-cols-1 md:grid-cols-12 gap-20 mb-12">
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

@endsection