@extends('layouts.guest')
@section('content')

{{-- hero --}}
<section class="relative min-h-screen flex flex-col items-center justify-center text-center overflow-hidden bg-gradient-to-br from-green-200 via-blue-200 to-purple-200 animate-gradient mt-20">
  <!-- Animated particles background -->
  <div class="absolute inset-0 pointer-events-none">
    <div class="w-3 h-3 bg-white rounded-full opacity-30 animate-bounce-slow absolute top-10 left-1/4"></div>
    <div class="w-2 h-2 bg-yellow-300 rounded-full opacity-40 animate-bounce-slow absolute bottom-20 right-1/3"></div>
  </div>

  <!-- Title -->
  <h2 class="text-4xl md:text-6xl font-bold mt-6 mb-6 animate-fadeInUp">
    Seputar Informasi UPTD <br>
    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-green-500">
      Seni, Kreativitas, dan Kebudayaan
    </span>
  </h2>

  <!-- Search -->
  <div class="flex w-900 max-w-lg bg-white rounded-full shadow-lg overflow-hidden mb-6 animate-fadeInUp delay-200">
    <span class="flex items-center px-3 text-gray-400"><i class="fas fa-search"></i></span>
    <input type="text" placeholder="Cari Berita..." class="flex-1 px-4 py-3 outline-none"/>
    <button class="bg-blue-500 text-white px-6 py-3 hover:bg-blue-600">Search</button>
  </div>

  <!-- Categories -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-4 mb-5 animate-fadeInUp delay-300">
    <div class="p-4 bg-white rounded-xl shadow hover:scale-105 hover:bg-gradient-to-r hover:from-blue-400 hover:to-green-400 transition transform duration-300 text-center">
      🎭 <p class="mt-2 font-semibold">Bandung Creative HUB</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow hover:scale-105 hover:bg-gradient-to-r hover:from-yellow-400 hover:to-red-400 transition transform duration-300 text-center">
      🎶 <p class="mt-2 font-semibold">Padepokan Seni Mayang Sunda</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow hover:scale-105 hover:bg-gradient-to-r hover:from-purple-400 hover:to-pink-400 transition transform duration-300 text-center">
      🏛 <p class="mt-2 font-semibold">Teras Sunda Cibiru</p>
    </div>
    <div class="p-4 bg-white rounded-xl shadow hover:scale-105 hover:bg-gradient-to-r hover:from-green-400 hover:to-teal-400 transition transform duration-300 text-center">
      🌿 <p class="mt-2 font-semibold">Kampung Wisata Pasir Kunci</p>
    </div>
  </div>
</section>


    {{-- Daftar Berita --}}
<section>
  <div class="container mx-auto px-6 py-12">
    <p class="tracking-widest uppercase text-gray-500 mb-10 text-center text-md md:text-2xl">
      Berita Terbaru
    </p>

    <div id="articleGrid" class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @forelse ($beritas as $index => $berita)
        <div class="bg-white border border-gray-200 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-2 {{ $index >= 6 ? 'hidden extra-berita' : '' }}">
          <a href="{{ route('beritas.public.show', $berita->id) }}">
            <img src="{{ $berita->image ? asset('storage/' . $berita->image) : asset('images/default-berita.jpg') }}"
              alt="{{ $berita->title }}"
              class="w-full h-48 object-cover" />
          </a>
          <div class="p-6 flex flex-col">
            <a href="{{ route('beritas.public.show', $berita->id) }}">
              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 line-clamp-2 hover:text-blue-600 transition">
                {{ $berita->title }}
              </h5>
            </a>
            <p class="mb-3 text-gray-600 text-sm line-clamp-3">
              {{ $berita->description }}
            </p>

            <div class="flex items-center justify-between text-sm text-teal-500 mt-auto">
              <span>Penulis : {{ $berita->author ?? 'Admin' }}</span>
              <span>{{ optional($berita->published_at)->format('d M Y') ?? '-' }}</span>
            </div>


            <a href="{{ route('beritas.public.show', $berita->id) }}"
              class="mt-4 block text-center text-white bg-teal-500 hover:bg-teal-700 rounded-lg py-2 font-medium transition">
              Baca Selengkapnya →
            </a>

          </div>
        </div>
      @empty
        <p class="text-gray-500 italic col-span-3 text-center">Belum ada Berita terbaru.</p>
      @endforelse
    </div>

    {{-- tombol readmore --}}
    @if ($beritas->count() > 6)
      <div class="mt-10 flex justify-center">
        <button id="loadMoreBtn"
          class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-sm px-6 py-3 flex items-center gap-2 transition">
          Tampilkan lebih banyak
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
            fill="currentColor" class="bi bi-chevron-double-down"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
            <path fill-rule="evenodd"
              d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
          </svg>
        </button>
      </div>
    @endif
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const loadMoreBtn = document.getElementById("loadMoreBtn");
    const hiddenberitas = document.querySelectorAll(".extra-berita");

    if (loadMoreBtn) {
      loadMoreBtn.addEventListener("click", () => {
        hiddenberitas.forEach(berita => berita.classList.remove("hidden"));
        loadMoreBtn.style.display = "none";
      });
    }
  });
</script>
@endsection