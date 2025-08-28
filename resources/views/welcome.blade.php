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
            href="#join-us"
            class="text-gray-900 bg-white border flex mx-auto sm:justify-center border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 px-6 py-3 text-xl rounded-lg transition duration-300 w-fit"
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
                class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100"
                >
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">1</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">APLIKASI</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 2 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">2</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">ARSITEKTUR</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 3 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">3</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">DESAIN INTERIOR</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 4 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">4</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">DESAIN PRODUK</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 5 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">5</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">DESAIN KOMUNIKASI VISUAL</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 6 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">6</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">FILM, ANIMASI, DAN VIDEO</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 7 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">7</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">FASHION</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 8 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">8</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">FOTOGRAFI</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 9 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">9</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">KULINER</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 10 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">10</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">MUSIK</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 11 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">11</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">PENERBITAN</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 12 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">12</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">PENGEMBANGAN PERMAINAN</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 13 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">13</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">PERIKLANAN</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 14 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">14</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">SENI KRIYA</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 15 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">15</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">SENI PERTUNJUKKAN</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 16 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">16</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">SENI RUPA</h5>
                </div>
                </div>
            </swiper-slide>

            <!-- 17 -->
            <swiper-slide>
                <div class="flex h-32 w-full bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100">
                <div class="w-40 flex justify-center items-center bg-clifford text-white rounded-l-lg">
                    <h3 class="text-4xl">17</h3>
                </div>
                <div class="flex flex-col justify-center p-4 flex-1">
                    <h5 class="text-2xl font-bold tracking-tight text-gray-900">TV DAN RADIO</h5>
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900"
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
    <section>
  <div class="container mx-auto px-6 py-12">
    <p class="tracking-widest uppercase text-gray-500 mb-10 text-center text-2xl">
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
                ⭐ 4/5
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