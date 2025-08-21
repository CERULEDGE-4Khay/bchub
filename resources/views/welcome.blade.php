@extends('layouts.guest')
@section('content')
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
          <h1 class="text-5xl md:text-6xl font-extrabold mb-4">
            <span class="block text-sky-600">Welcome to</span>
            Bandung Creative Hub
          </h1>
          <p class="text-lg md:text-2xl mb-6 text-gray-300">
            Mari bersama-sama membangun komunitas kreatif yang menginspirasi,
            <br />
            berbagi ide, dan mewujudkan impian besar untuk Bandung. Jangan
            lewatkan kesempatan untuk berkontribusi!
          </p>
          <a
            href="#join-us"
            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 px-6 py-3 text-xl rounded-lg transition duration-300"
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
            <span class="text-sky-600">Creative</span> Hub
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
        <div class="container mx-auto px-6 py-12">
            <p
            class="tracking-widest uppercase text-gray-500 mb-10 text-center text-2xl"
            >
            17 SubSektor Ekonomi Kreatif!
            </p>

            <swiper-container
            class="mySwiper"
            pagination="true"
            pagination-clickable="true"
            slides-per-view="3"
            space-between="30"
            free-mode="true"
            >
            <!-- 1 -->
            <swiper-slide>
                <div
                class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
                >
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">1</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">APLIKASI</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 2 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">2</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">ARSITEKTUR</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 3 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">3</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">DESAIN INTERIOR</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 4 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">4</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">DESAIN PRODUK</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 5 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">5</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">DESAIN KOMUNIKASI VISUAL</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 6 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">6</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">FILM, ANIMASI, DAN VIDEO</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 7 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">7</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">FASHION</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 8 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">8</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">FOTOGRAFI</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 9 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">9</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">KULINER</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 10 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">10</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">MUSIK</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 11 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">11</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PENERBITAN</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 12 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">12</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PENGEMBANGAN PERMAINAN</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 13 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">13</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PERIKLANAN</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 14 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">14</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SENI KRIYA</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 15 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">15</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SENI PERTUNJUKKAN</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 16 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">16</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">SENI RUPA</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 17 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">17</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">TV DAN RADIO</h5>
                </div>
                </div>
            </swiper-slide>
            </swiper-container>
        </div>
    </section>


    {{--fasilitas Bisa dan tidak bisa --}}
    <section>
      <div class="container mx-auto px-6 py-12">
        <p
          class="tracking-widest uppercase text-gray-500 text-center text-2xl mb-10"
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
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-green-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  WORKSHOP
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-green-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  CO-WORKER
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-green-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  EXHIBITION
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-green-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  MINI SHOWCASE
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-green-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-green-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  CLASS SESSION
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
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
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-red-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Kegiatan diluar 17 Subsektor Ekonomi Kreatif.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-red-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                Bazaar yang melibatkan jual-beli Produk.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-red-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Pelantikan Organisasi, Komunitas, dsb.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-red-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sekretariat Organisasi, Komunitas, dsb.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden border-t-4 border-red-500"
            >
              <div
                class="w-fit flex justify-center items-center md:rounded-none md:rounded-s-lg w-20 px-12 text-red-500"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Wisuda dan Perpisahan Sekolah ataupun Kampus.
                </h5>
                {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- list ruangan --}}
    <section>
      <div class="container mx-auto px-6 py-12">
        <p
          class="tracking-widest uppercase text-gray-500 mb-10 text-center text-2xl"
        >
          List ruangan yang tersedia
        </p>
        <!-- Grid -->
        <div
          id="ruanganGrid"
          class="grid grid-cols-1 md:grid-cols-3 gap-5"
        ></div>

        <div class="mt-10 flex justify-center">
          <!-- Button -->
          <div class="mt-10 flex justify-center">
            <button
              id="loadMoreBtn"
              class="text-gray-900 hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800 flex justify-center items-center gap-2"
            >
              Tampilkan lebih banyak
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="currentColor"
                class="bi bi-chevron-double-down"
                viewBox="0 0 16 16"
              >
                <path
                  fill-rule="evenodd"
                  d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
                />
                <path
                  fill-rule="evenodd"
                  d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
                />
              </svg>
            </button>
        </div>
      </div>
    </section>

    <script>
        const ruanganData = [
        {
            nama: "Basement dan Area Parkir",
            kapasitas: "200",
            deskripsi: "Area ini terletak di dasar Bandung Creative Hub yang berfungsi sebagai parkiran sepeda motor. Meski demikian, area yang dipenuhi mural ini tidak menutup kemungkinan....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_43181.jpeg",
        },
        {
            nama: "Studio Musik (Basement)",
            kapasitas: "8",
            deskripsi: "Studio musik yang terletak di lantai dasar ini, merupakan studio musik gratis pertama di Bandung. Fasilitas yang tersedia sesuai standar studio musik pada umumnya...",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg",
        },
        {
            nama: "Exhibition Area (Lt.1)",
            kapasitas: "100",
            deskripsi: "Ruang khusus pameran di Bandung Creative Hub ini berada di lantai 1 gedung. Beragam jenis pameran mulai dari seni rupa, seni kriya, fotografi, DKV, dan pameran lainnya....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_77174.jpeg",
        },
        {
            nama: "Amphitheater (Lt.1)",
            kapasitas: "100",
            deskripsi: "Area ini merupakan pintu utama Bandung Creative Hub. Amphitheater dirancang sebagai public space dengan sirkulasi optimal.....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_36915.jpeg",
        },
        {
            nama: "Perpustakaan (Lt.2)",
            kapasitas: "30",
            deskripsi: "Perpustakaan Bandung Creative Hub memiliki koleksi 12.000 buku. Koleksi yang terhimpun terdiri dari buku fiksi, non-fiksi, komik, buku anak, majalah, serta buku di rumpun ekonomi kreatif....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_37067.jpeg",
        },
        {
            nama: "Coworking Space (Lt.2)",
            kapasitas: "14",
            deskripsi: "Ruangan yang terletak di lantai 2 Bandung Creative Hub ini merupakan coworking space dengan screen, projector, dan AC....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_33730.jpeg",
        },
        {
            nama: "Ruang Kaca (Lt.2)",
            kapasitas: "30",
            deskripsi: "Coworking Space lain yang terletak di dekat Amphitheater ini menyuguhkan suasana terbuka dengan kaca di sekelilingnya. Aktivitas seperti coworker serta mini workshop di rumpun ekonomi kreatif bisa sobat selenggarakan di Ruang Kaca....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_99695.jpg",
        },
        {
            nama: "Recording Studio (Lt.3)",
            kapasitas: "8",
            deskripsi: "Studio yang terletak di lantai 3 ini merupakan ruang produksi musik di Bandung Creative Hub. Beragam aktivitas rekaman musik baik project solo, duo, band, tapping voice over, dan rekaman berbasis suara bisa diselenggarakan di studio ini....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_56018.jpg",
        },
        {
            nama: "Auditorium (Lt.3)",
            kapasitas: "150",
            deskripsi: "Ruangan yang terletak di lantai 3 ini merupakan ruang pertemuan dengan kapasitas paling besar (120) di Bandung Creative Hub. Pemanfaatan Auditorium sepaket dengan screen, projector, speaker, dan amplifier standar bioskop untuk memberi experience terbaik....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_41893.jpeg",
        },
        {
            nama: "Digital Content Studio (Lt.3)",
            kapasitas: "15",
            deskripsi: "Studio yang terletak di pojok lantai 3 ini berfungsi sebagai ruang produksi konten digital. Fasilitas yang tersedia di sini berupa perangkat lampu dan white space yang bisa dieksplorasi oleh para kreator konten digital....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_31262.jpg",
        },
        {
            nama: "Studio Tari (Lt.3)",
            kapasitas: "30",
            deskripsi: "Studio yang terletak di sebelah Auditorium ini merupakan studio latihan tari tradisional, modern, dan kontemporer. Studio Tari telah dilengkapi dengan kaca dinding....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_15415.jpg",
        },
        {
            nama: "Taman (Lt.4)",
            kapasitas: "25",
            deskripsi: "Taman yang terletak di lantai 4 ini merupakan salah satu public space dari Bandung Creative Hub. Area taman merupakan ruang terbuka dengan sirkulasi udara maksimal....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_32571.jpg",
        },
        {
            nama: "Teleconference Room (Lt.4)",
            kapasitas: "10",
            deskripsi: "Ruang teleconference merupakan area khusus aktivitas virtual. Aktivitas seperti konferensi pers, virtual meeting, virtual workshop, virtual class, dan beragam aktivitas daring lainnya bisa terselenggara di ruangan yang dilengkapi perangkat webcam & virtual hub ini....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_97529.jpg",
        },
        {
            nama: "Studio Jahit (Lt.4)",
            kapasitas: "8",
            deskripsi: "Studio Jahit terletak di dekat taman lantai 4. Studio ini berfungsi sebagai sarana penciptaan olahan kriya dan fesyen jahit. Fasilitas yang tersedia di studio ini....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_78465.jpg",
        },
        {
            nama: "Studio Animasi & Editing (Lt.4)",
            kapasitas: "10",
            deskripsi: "Studio Animasi dan Editing berada di dekat taman lantai 4. Studio ini memiliki berfungsi untuk penciptaan animasi, desain grafis, serta editing video....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_81700.jpg",
        },
        {
            nama: "Studio Fesyen (Lt.5)",
            kapasitas: "30",
            deskripsi: "Studio yang terletak di lantai 5 ini merupakan ruang khusus aktivitas fesyen. Berbagai aktivitas berkaitan fesyen seperti modeling class, makeup class....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_47114.jpg",
        },
        {
            nama: "Aula (Lt.5)",
            kapasitas: "80",
            deskripsi: "Aula yang terletak di lantai 5 Bandung Creative Hub ini merupakan ruang pertemuan berkapasitas maksimal 60 orang. Berbagai aktivitas mulai dari seminar....",
            imgUrl: "https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_62113.jpg",
        },
        ];

        const grid = document.getElementById("ruanganGrid");
        const loadMoreBtn = document.getElementById("loadMoreBtn");
        let itemsPerPage = 6;
        let currentIndex = 0;

        function renderItem() {
        const nextItem = ruanganData.slice(currentIndex, currentIndex + itemsPerPage);
        nextItem.forEach((item) => {
            const card = document.createElement("div");

            card.className = "bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700";

            card.innerHTML = `
                    <a href="#">
                    <img
                        class="rounded-t-lg"
                        src="${item.imgUrl}"
                        alt=""
                    />
                    </a>
                    
                    <div class="p-5">
                    <a href="#">
                        <h5
                        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                        >
                        ${item.nama}
                        </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        ${item.deskripsi}
                    </p>
                    <div class="flex">
                        <span
                        type="button"
                        class="flex items-center justify-center gap-1 flex-1 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600"
                        ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-people-fill"
                            viewBox="0 0 16 16"
                        >
                            <path
                            d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"
                            />
                        </svg>
                        ${item.kapasitas} Orang</span
                        >
                        <span
                        type="button"
                        class="flex items-center justify-center gap-1 flex-1 py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600"
                        >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="currentColor"
                            class="bi bi-star-fill text-yellow-300"
                            viewBox="0 0 16 16"
                        >
                            <path
                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"
                            />
                        </svg>
                        4/5</span
                        >
                    </div>
                    <a
                        href="lihatdetail"
                        class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-clifford focus:outline-none dark:focus:ring-blue-800 text-center"
                    >
                        Lihat Detail
                    </a>
                    </div>
                `;
            grid.appendChild(card);
        });

        currentIndex += itemsPerPage;
        if (currentIndex >= ruanganData.length) {
            loadMoreBtn.style.display = "none";
        }
        }

        loadMoreBtn.addEventListener("click", renderItem);
        renderItem();

    </script>
@endsection