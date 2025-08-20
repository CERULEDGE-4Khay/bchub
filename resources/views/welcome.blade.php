<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UPTD Kebudayaan dan Pariwisata</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        @vite('resources/css/app.css')
        <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
      .bg-clifford {
        background-color: #0c3457;
      }

      .text-clifford {
        color: #0c3457;
      }
    </style>
    </head>

    <body>
        <nav
        class="bg-white fixed top-0 left-0 right-0 z-40 border-gray-200 dark:bg-gray-900 shadow-sm"
        >
        <div
            class="container mx-auto flex flex-wrap items-center justify-between mx-auto py-4 px-6"
        >
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img
                src="./assets/images/logo-removebg-preview.png"
                class="h-8"
                alt="Flowbite Logo"
            />
            <span
                class="self-center text-1xl font-semibold whitespace-nowrap dark:text-white text-clifford"
                >UPTD padepokan seni, kreativitas dan kebudayaan</span
            >
            </a>
            <button
            data-collapse-toggle="navbar-default"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default"
            aria-expanded="false"
            >
            <span class="sr-only">Open main menu</span>
            <svg
                class="w-5 h-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 17 14"
            >
                <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M1 1h15M1 7h15M1 13h15"
                />
            </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="font-medium flex p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700"
            >
                <li>
                <a
                    href="#"
                    class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                    aria-current="page"
                    >Beranda</a
                >
                </li>
                <li class="relative">
                <button
                    id="mega-menu-full-dropdown-button"
                    data-collapse-toggle="mega-menu-full-dropdown"
                    class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm md:w-auto hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700"
                >
                    Fasilitas
                    <svg
                    class="w-2.5 h-2.5 ms-2.5"
                    aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 10 6"
                    >
                    <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                    />
                    </svg>
                </button>

                <!-- MEGA MENU -->
                <!-- MEGA MENU RESPONSIVE -->
                <div
                    id="mega-menu-full-dropdown"
                    class="hidden absolute z-50 mt-2 w-screen max-w-sm sm:max-w-xl md:max-w-3xl inset-x-0 mx-auto border border-gray-200 shadow-lg bg-white dark:bg-gray-800 dark:border-gray-600"
                >
                    <div
                    class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 px-4 py-5 text-gray-900 dark:text-white max-h-[80vh] overflow-y-auto"
                    >
                    <!-- Kolom 1 -->
                    <ul>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">
                            Basement dan Area Parkir
                            </div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Studio Musik (Basement)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Exhibition Area (Lt.1)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Amphitheater (Lt.1)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Perpustakaan (Lt.2)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Coworking Space (Lt.2)</div>
                        </a>
                        </li>
                    </ul>

                    <!-- Kolom 2 -->
                    <ul>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Ruang Kaca (Lt.2)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Recording Studio (Lt.3)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Auditorium (Lt.3)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">
                            Digital Content Studio (Lt.3)
                            </div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Studio Tari (Lt.3)</div>
                        </a>
                        </li>
                    </ul>

                    <!-- Kolom 3 -->
                    <ul>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Taman (Lt.4)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">
                            Teleconference Room (Lt.4)
                            </div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Studio Jahit (Lt.4)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">
                            Studio Animasi & Editing (Lt.4)
                            </div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Studio Fesyen (Lt.5)</div>
                        </a>
                        </li>
                        <li>
                        <a
                            href="#"
                            class="block p-3 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700"
                        >
                            <div class="font-semibold">Aula (Lt.5)</div>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                </li>
                <li>
                <a
                    href="#"
                    class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                    >Berita</a
                >
                </li>
                <li>
                <a
                    href="#"
                    class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"
                    >Artikel</a
                >
                </li>
                <li>
                <a
                    href="#"
                    class="text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    >Masuk</a
                >
                </li>
            </ul>
            </div>
        </div>
        </nav>
        
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
            >Get Involved</a
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
          17 Sektor yang bisa nge booking disini!
        </p>
        <swiper-container
          class="mySwiper"
          pagination="true"
          pagination-clickable="true"
          slides-per-view="3"
          space-between="30"
          free-mode="true"
        >
          <swiper-slide
            class="w-96 flex items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
          >
            <div
              class="flex md:flex-row bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
          <swiper-slide
            class="w-96 flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
            ><div
              class="flex md:flex-row flex-col bg-white rounded-lg shadow-md overflow-hidden"
            >
              <!-- KIRI -->
              <div
                class="w-full md:w-48 bg-clifford flex justify-center items-center md:rounded-none md:rounded-s-lg text-white"
              >
                <h3 class="text-4xl">1</h3>
              </div>

              <!-- KANAN -->
              <div class="flex flex-col justify-between p-4 leading-normal">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
              </div>
            </div></swiper-slide
          >
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
                  Sektor Pejabatg
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                  Hama bagi para rakyat infdonesia ajafhajksdf
                </p>
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
        >  List ruangan yang tersedia</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
          <div
            class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg"
                src="https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg"
                alt=""
                />
            </a>
            <div class="p-5">
              <a href="#">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Noteworthy technology acquisitions 2021
                </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Here are the biggest enterprise technology acquisitions of 2021
                so far, in reverse chronological order.
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
                  </svg> 5
                  Orang</span
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
                href="#"
                class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-clifford focus:outline-none dark:focus:ring-blue-800 text-center"
              >
                Lihat Detail
              </a>
            </div>
          </div>
          <div
            class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg"
                src="https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg"
                alt=""
              />
            </a>
            <div class="p-5">
              <a href="#">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Noteworthy technology acquisitions 2021
                </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Here are the biggest enterprise technology acquisitions of 2021
                so far, in reverse chronological order.
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
                  </svg>6
                  Orang</span
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
                href="#"
                class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-clifford focus:outline-none dark:focus:ring-blue-800 text-center"
              >
                Lihat Detail
              </a>
            </div>
          </div>
          <div
            class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg"
                src="https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg"
                alt=""
              />
            </a>
            <div class="p-5">
              <a href="#">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Noteworthy technology acquisitions 2021
                </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Here are the biggest enterprise technology acquisitions of 2021
                so far, in reverse chronological order.
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
                  </svg>8
                  Orang</span
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
                href="#"
                class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-clifford focus:outline-none dark:focus:ring-blue-800 text-center"
              >
                Lihat Detail
              </a>
            </div>
          </div>
          <div
            class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg"
                src="https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg"
                alt=""
              />
            </a>
            <div class="p-5">
              <a href="#">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Noteworthy technology acquisitions 2021
                </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Here are the biggest enterprise technology acquisitions of 2021
                so far, in reverse chronological order.
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
                  </svg>10
                  Orang</span
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
                href="#"
                class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-clifford focus:outline-none dark:focus:ring-blue-800 text-center"
              >
                Lihat Detail
              </a>
            </div>
          </div>
          <div
          class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
              class="rounded-t-lg"
                src="https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg"
                alt=""
                />
            </a>
            <div class="p-5">
              <a href="#">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                >
                  Noteworthy technology acquisitions 2021
                </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Here are the biggest enterprise technology acquisitions of 2021
                so far, in reverse chronological order.
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
                  </svg>20
                  Orang</span
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
                href="#"
                class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-clifford focus:outline-none dark:focus:ring-blue-800 text-center"
              >
                Lihat Detail
              </a>
            </div>
          </div>
          <div
            class="bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700"
          >
            <a href="#">
              <img
                class="rounded-t-lg"
                src="https://creativeculture.disbudpar.bandung.go.id//files/img/fasilitas/GALERI_INFORMASI_16074.jpeg"
                alt=""
              />
            </a>
            <div class="p-5">
              <a href="#">
                <h5
                  class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
                  >
                  Noteworthy technology acquisitions 2021
                </h5>
              </a>
              <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                Here are the biggest enterprise technology acquisitions of 2021
                so far, in reverse chronological order.
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
                  </svg>11
                  Orang</span
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
                href="#"
                class="block text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-clifford focus:outline-none dark:focus:ring-blue-800 text-center"
              >
                Lihat Detail
              </a>
            </div>
          </div>
        </div>

        <!-- Grid -->
        <div
          id="ruanganGrid"
          class="grid grid-cols-1 md:grid-cols-3 gap-5"
        ></div>

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

    {{-- SCRIPT LIST RUANGAN --}}
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
                            href="#"
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
    {{-- FOOTER --}}
    <footer class="bg-gray-200 dark:bg-gray-900">
      <div class="container mx-auto px-6 py-12">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
            <a href="https://flowbite.com/" class="flex items-center">
              <img
                src="https://flowbite.com/docs/images/logo.svg"
                class="h-8 me-3"
                alt="FlowBite Logo"
              />
              <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
                >Flowbite</span
              >
            </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Resources
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="https://flowbite.com/" class="hover:underline"
                    >Flowbite</a
                  >
                </li>
                <li>
                  <a href="https://tailwindcss.com/" class="hover:underline"
                  >Tailwind CSS</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2
              class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Follow us
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a
                  href="https://github.com/themesberg/flowbite"
                  class="hover:underline"
                  >Github</a
                  >
                </li>
                <li>
                  <a
                    href="https://discord.gg/4eeurUVvTy"
                    class="hover:underline"
                    >Discord</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h2
                class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white"
              >
                Legal
              </h2>
              <ul class="text-gray-500 dark:text-gray-400 font-medium">
                <li class="mb-4">
                  <a href="#" class="hover:underline">Privacy Policy</a>
                </li>
                <li>
                  <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr
          class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
          />
        <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400"
            >© 2023
            <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a
            >. All Rights Reserved.
          </span>
          <div class="flex mt-4 sm:justify-center sm:mt-0">
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white"
            >
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 8 19"
              >
                <path
                  fill-rule="evenodd"
                  d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Facebook page</span>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
            >
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 21 16"
              >
                <path
                  d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"
                />
              </svg>
              <span class="sr-only">Discord community</span>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
            >
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 17"
                >
                <path
                  fill-rule="evenodd"
                  d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Twitter page</span>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
            >
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                  clip-rule="evenodd"
                  />
              </svg>
              <span class="sr-only">GitHub account</span>
            </a>
            <a
              href="#"
              class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5"
            >
              <svg
                class="w-4 h-4"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                  clip-rule="evenodd"
                />
              </svg>
              <span class="sr-only">Dribbble account</span>
            </a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>
</html>
