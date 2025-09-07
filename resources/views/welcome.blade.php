@extends('layouts.guest')
@section('content')
<script src="https://unpkg.com/lucide@latest"></script>
     <!-- Video Background Section -->
    <section
      class="relative w-full h-screen overflow-hidden backdrop-brightness-50"
    >
      <!-- Video background -->
      <div class="fixed top-0 left-0 w-full h-screen -z-10 overflow-hidden">
        <video autoplay muted loop class="w-full h-full object-cover">
          <source src="/assets/video/video_her.mp4" type="video/mp4" />
          <!-- Optional fallback content -->
          Your browser does not support the video tag.
        </video>
      </div>

      <!-- Dark overlay for text visibility -->
      <div
        class="absolute inset-0 bg-black bg-opacity-75 flex justify-starts items-center"
        style="background-color: rgba(0, 0, 0, 0.75)"
      >
        <div class="text-white px-6 md:px-12 container mx-auto">
          <h1 class="text-5xl md:text-6xl sm:text-center font-extrabold mb-4">
            <span class="block text-sky-600">Welcome to</span>
            Bandung Creative Hub
          </h1>
          <p class="text-lg md:text-2xl sm:text-center mb-6 text-gray-300">
            Mari bersama-sama membangun komunitas kreatif yang menginspirasi,
            <br />
            berbagi ide, dan mewujudkan impian besar untuk Bandung. Jangan
            lewatkan kesempatan untuk berkontribusi!
          </p>
          <a
            href="{{ (auth()->check()) ? '#ruangan' : 'login' }}"
            class="text-gray-900 bg-white border flex mx-auto sm:justify-center border-gray-300 focus:outline-none hover:bg-sky-400 focus:ring-4 focus:ring-gray-100 px-6 py-3 text-xl rounded-lg transition duration-300 w-fit"
            >Booking Sekarang!</a
          >
        </div>
      </div>
    </section>
    {{-- ABOUT US --}}
    <section class="">
      <div
        class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-8 items-center py-12"
      >
        <div>
          <p class="text-sm tracking-widest uppercase text-gray-500 mb-2">
            About Us
          </p>
          <h2 class="text-3xl md:text-4xl font-bold leading-tight">
            Bandung
            <span class="text-sky-600 animate-pulse">Creative</span> Hub
          </h2>
          <p class="text-gray-600 mt-4">
            Merupakan wadah dan pusat kegiatan kreatif di Kota Bandung. Gedung
            ini merupakan salah satu rencana dari Pemerintah Kota Bandung guna
            mengembangkan simpul kreatif di seluruh bagian kota.
          </p>
          <p class="text-gray-600 mt-3">
            Bandung Creative Hub diresmikan pertama kali oleh Wali Kota Bandung,
            Bapak Ridwan Kamil bersama Wakil Wali Kota Bandung Bapak Oded M.
            Danial pada 28 Desember 2017.
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
            src="https://creativeculture.disbudpar.bandung.go.id//files/img/gedung/GALERI_INFORMASI_40693.jpg"
            alt="Video Power"
            class="max-w-full rounded-lg shadow-lg"
          />
        </div>
      </div>
    </section>
    {{-- 17 SEKTOR --}}
<section>
  <div class="container mx-auto px-6 py-20 mb-3">
    <p
      class="tracking-widest uppercase text-gray-600 mb-10 text-center text-lg md:text-2xl font-semibold"
    >
      17 SubSektor Ekonomi Kreatif!
    </p>

    <swiper-container
      class="mySwiper"
      pagination="true"
      pagination-clickable="true"
      free-mode="true"
      space-between="25"
      slides-per-view="1"
      breakpoints='{
        "640": { "slidesPerView": 2, "spaceBetween": 20 },
        "1024": { "slidesPerView": 4, "spaceBetween": 25 }
      }'
    >

      <!-- 1. Aplikasi -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-pink-500 to-red-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="smartphone"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">APLIKASI</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 1</p>
        </div>
      </swiper-slide>

      <!-- 2. Game -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="gamepad-2"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">GAME</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 2</p>
        </div>
      </swiper-slide>

      <!-- 3. Arsitektur -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-green-500 to-teal-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="building"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">ARSITEKTUR</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 3</p>
        </div>
      </swiper-slide>

      <!-- 4. Desain Interior -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-yellow-500 to-orange-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="sofa"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">DESAIN INTERIOR</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 4</p>
        </div>
      </swiper-slide>

      <!-- 5. Musik -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-purple-500 to-pink-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="music-2"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">MUSIK</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 5</p>
        </div>
      </swiper-slide>

      <!-- 6. Film -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-red-500 to-yellow-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="clapperboard"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">FILM</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 6</p>
        </div>
      </swiper-slide>

      <!-- 7. Fotografi -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="camera"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">FOTOGRAFI</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 7</p>
        </div>
      </swiper-slide>

      <!-- 8. Desain Produk -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-teal-500 to-green-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="package"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">DESAIN PRODUK</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 8</p>
        </div>
      </swiper-slide>

      <!-- 9. Fashion -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-pink-500 to-purple-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="shirt"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">FASHION</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 9</p>
        </div>
      </swiper-slide>

      <!-- 10. Animasi -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-orange-500 to-yellow-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="film"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">ANIMASI</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 10</p>
        </div>
      </swiper-slide>

      <!-- 11. Kriya -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-cyan-500 to-blue-500 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="hand"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">KRIYA</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 11</p>
        </div>
      </swiper-slide>

      <!-- 12. Kuliner -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-yellow-600 to-orange-600 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="utensils"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">KULINER</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 12</p>
        </div>
      </swiper-slide>

      <!-- 13. Penerbitan -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-gray-600 to-gray-800 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="book-open"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">PENERBITAN</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 13</p>
        </div>
      </swiper-slide>

      <!-- 14. Periklanan -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-pink-400 to-red-400 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="megaphone"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">PERIKLANAN</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 14</p>
        </div>
      </swiper-slide>

      <!-- 15. Seni Pertunjukan -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="theater"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">SENI PERTUNJUKAN</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 15</p>
        </div>
      </swiper-slide>

      <!-- 16. Seni Rupa -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-green-600 to-lime-600 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="palette"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">SENI RUPA</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 16</p>
        </div>
      </swiper-slide>

      <!-- 17. Televisi & Radio -->
      <swiper-slide>
        <div class="flex flex-col items-center justify-center h-44 w-full bg-white rounded-2xl shadow-xl hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 p-6 border border-gray-100">
          <div class="flex items-center justify-center w-14 h-14 rounded-full bg-gradient-to-r from-blue-700 to-cyan-700 text-white text-2xl shadow-md mb-3 transform hover:rotate-6 transition-transform duration-300">
            <i data-lucide="radio"></i>
          </div>
          <h5 class="text-base md:text-lg font-semibold text-gray-800 text-center">TELEVISI & RADIO</h5>
          <p class="text-xs text-gray-500 mt-1">Subsektor 17</p>
        </div>
      </swiper-slide>

    </swiper-container>
  </div>
</section>

<script>
  lucide.createIcons();
</script>

    {{--fasilitas Bisa dan tidak bisa --}}
    <section>
      <div class="container mx-auto px-6 py-12">
        <p
          class="tracking-widest uppercase text-gray-500 text-center text-md md:text-2xl mb-10"
        >
          Kegiatan yang bisa dan tidak bisa difasilitasi
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
          <!-- Kolom 1 Boleh -->
          <div class="grid grid-cols-1 gap-5">
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-green-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-check2-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                  />
                  <path
                    d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  WORKSHOP
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-green-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-check2-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                  />
                  <path
                    d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  CO-WORKER
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-green-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-check2-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                  />
                  <path
                    d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  EXHIBITION
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-green-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-check2-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                  />
                  <path
                    d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  MINI SHOWCASE
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-green-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-check2-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0"
                  />
                  <path
                    d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  CLASS SESSION
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
          </div>

          <!-- Kolom 2 Tidak boleh -->
          <div class="grid grid-cols-1 gap-5">
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-red-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-x-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                  />
                  <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  Kegiatan diluar 17 Subsektor Ekonomi Kreatif.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-red-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-x-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                  />
                  <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                Bazaar yang melibatkan jual-beli Produk.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-red-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-x-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                  />
                  <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  Pelantikan Organisasi, Komunitas, dsb.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-red-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-x-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                  />
                  <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  Sekretariat Organisasi, Komunitas, dsb.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg px-12 text-red-500"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="45"
                  height="45"
                  fill="currentColor"
                  class="bi bi-x-circle"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"
                  />
                  <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"
                  />
                </svg>
              </div>

              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-md md:text-lg font-bold tracking-tight text-gray-900"
                >
                  Wisuda dan Perpisahan Sekolah ataupun Kampus.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- list ruangan --}}
    <section id="ruangan">
      <div class="container mx-auto px-6 py-12">
        <p class="tracking-widest uppercase text-gray-500 mb-10 text-center text-md md:text-2xl">
          List ruangan yang tersedia
        </p>

        <!-- Grid -->
        <div id="ruanganGrid" class="grid grid-cols-1 md:grid-cols-3 gap-5">
          @forelse ($rooms as $index => $room)
            <div class="bg-white border border-gray-200 rounded-lg shadow-sm {{ $index >= 3 ? 'hidden extra-room' : '' }}">
              <a href="#">
                <div class="relative">
                  <img src="{{ $room->images->isNotEmpty() 
                  ? asset('storage/' . $room->images->first()->image_url) 
                  : asset('images/default-room.jpg') }}"
                    alt="Room image"
                    class="w-full h-40 object-cover rounded-lg shadow" />
                </div>
              </a>

              <div class="p-5">
                <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                    {{ $room->name }}
                  </h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">
                  {{ $room->description }}
                </p>

                <div class="flex">
                  <span class="flex items-center justify-center gap-1 flex-1 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200">
                    {{ $room->capacity }} orang
                  </span>
                  <span class="flex items-center justify-center gap-1 flex-1 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200">
                      ⭐ {{ number_format($room->averageRating() ?? 0, 1) }}/5
                  </span>
                </div>

                <a href="{{ route('detai.room', $room->id) }}"
                  class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                  Lihat Detail
                </a>
              </div>
            </div>
          @empty
            <p class="text-gray-500 italic">Tidak ada ruangan.</p>
          @endforelse
        </div>

        {{-- tombol readmore --}}
        @if ($rooms->count() > 3)
          <div class="mt-10 flex justify-center">
            <button id="loadMoreBtn"
              class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 flex items-center gap-2">
              Tampilkan lebih banyak
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
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
    const hiddenRooms = document.querySelectorAll(".extra-room");

    if (loadMoreBtn) {
      loadMoreBtn.addEventListener("click", () => {
        hiddenRooms.forEach(room => room.classList.remove("hidden"));
        loadMoreBtn.style.display = "none"; // tombol disembunyikan
      });
    }
  });
</script>


@endsection