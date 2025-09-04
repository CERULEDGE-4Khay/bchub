@extends('layouts.guest')
@section('content')

{{-- hero --}}
<section class="relative min-h-screen flex items-center justify-center p-8 mt-20 bg-white">
  <div class="container mx-auto flex flex-col lg:flex-row items-center justify-between gap-12">

    <div class="relative w-full lg:w-1/2 flex justify-center items-center">
      <svg class="absolute inset-0 w-full h-full text-blue-100" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M 0,0 L 100,0 L 100,100 L 50,100 Q 0,100 0,50 Z" fill="currentColor" />
      </svg>
      <div class="relative w-full p-8 z-10">
        <img src="https://images.pexels.com/photos/1585325/pexels-photo-1585325.jpeg?cs=srgb&dl=pexels-steve-1585325.jpg&fm=jpg" alt="Team members collaborating" class="w-full h-auto rounded-xl shadow-lg transform -rotate-6 scale-105" />
      </div>
    </div>

    <div class="w-full lg:w-1/2 text-left">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-4 animate-pulse duration-1000">
        ARTIKEL<br><span class="bg-clip-text text-transparent bg-gradient-to-b from-yellow-300 to-yellow-500">SEPUTAR UPTD</span>
      </h1>
      <p class="text-gray-600 text-lg mb-8">
        Informasi terkini dan mendalam tentang seni, kreativitas, dan kebudayaan di <span class="text-teal-400">Bandung Creative Hub.</span>
      </p>
      <!-- Search -->
        <div class="flex w-900 max-w-lg bg-white rounded-full shadow-lg overflow-hidden mb-6 animate-fadeInUp delay-200">
            <span class="flex items-center px-3 text-gray-400"><i class="fas fa-search"></i></span>
            <input type="text" placeholder="Cari Artikel..." class="flex-1 px-4 py-3 outline-none rounded-sm border-none"/>
            <button class="bg-blue-500 text-white px-6 py-3 hover:bg-blue-600">Search</button>
        </div>
      <button class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-5 rounded-lg shadow-md transition-colors duration-300 mt-2 mb-2">
        Bandung Creative Hub
      </button>
      <button class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-5 rounded-lg shadow-md transition-colors duration-300 mt-2 mb-2">
        Padepokan Seni Mayang Sunda
      </button>
       <button class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-5 rounded-lg shadow-md transition-colors duration-300 mt-2 mb-2">
        Sanggar Seni
      </button>
       <button class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-5 rounded-lg shadow-md transition-colors duration-300 mt-2 mb-2">
        Kreativitas & Kebudayaan
      </button>
    </div>
    
  </div>
</section>
<hr class="pt-1 pb-1 bg-slate-400">
<section>
  <div class="container mx-auto px-6 py-12">
    <p class="tracking-widest uppercase text-gray-500 mb-10 text-center text-md md:text-2xl">
      Artikel Terbaru
    </p>

    <div id="articleGrid" class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @forelse ($articles as $index => $article)
        <div class="bg-white border border-gray-200 rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-2 {{ $index >= 6 ? 'hidden extra-article' : '' }}">
          <a href="{{ route('articles.public.show', $article->id) }}">
            <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('images/default-article.jpg') }}"
              alt="{{ $article->title }}"
              class="w-full h-48 object-cover" />
          </a>
          <div class="p-6 flex flex-col">
            <a href="{{ route('articles.public.show', $article->id) }}">
              <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 line-clamp-2 hover:text-blue-600 transition">
                {{ $article->title }}
              </h5>
            </a>
            <p class="mb-3 text-gray-600 text-sm line-clamp-3">
              {{ $article->description }}
            </p>

            <div class="flex items-center justify-between text-sm text-teal-500 mt-auto">
              <span>Penulis: {{ $article->author ?? 'Admin' }}</span>
              <span>{{ optional($article->published_at)->format('d M Y') ?? '-' }}</span>
            </div>


            <a href="{{ route('articles.public.show', $article->id) }}"
              class="mt-4 block text-center text-white bg-teal-500 hover:bg-teal-700 rounded-lg py-2 font-medium transition">
              Baca Selengkapnya →
            </a>

          </div>
        </div>
      @empty
        <p class="text-gray-500 italic col-span-3 text-center">Belum ada artikel.</p>
      @endforelse
    </div>

    {{-- tombol readmore --}}
    @if ($articles->count() > 6)
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
    const hiddenArticles = document.querySelectorAll(".extra-article");

    if (loadMoreBtn) {
      loadMoreBtn.addEventListener("click", () => {
        hiddenArticles.forEach(article => article.classList.remove("hidden"));
        loadMoreBtn.style.display = "none";
      });
    }
  });
</script>
@endsection