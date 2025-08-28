<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCH</title>
</head>

<body>

<nav class="bg-white fixed top-0 left-0 right-0 z-40 border-gray-200 shadow-sm">
    <div class="container mx-auto flex flex-wrap items-center justify-between py-4 px-6 lg:px-8">
        <a href="/" class="flex items-center space-x-2 lg:space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/logo-removebg-preview.png') }}" class="h-8 lg:h-10" alt="UPTD Logo" />
            <!-- Menyesuaikan ukuran font untuk perangkat yang berbeda -->
            <span class="hidden lg:block self-center text-sm lg:text-lg font-semibold whitespace-nowrap text-clifford">UPTD Padepokan Seni, Kreativitas dan Kebudayaan</span>
        </a>

        <!-- Tombol Hamburger untuk Mobile -->
        <button  data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center lg:hidden text-sm text-gray-500 rounded-lg  hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Buka menu utama</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>

        <!-- Menu Utama -->
        <div class="hidden w-full lg:inline lg:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 lg:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 lg:flex-row lg:space-x-8 rtl:space-x-reverse lg:mt-0 lg:border-0 lg:bg-white">
                <li>
                    <a href="/" class="block py-2 px-3 text-gray-900 hover:text-blue-600 rounded-sm lg:bg-transparent lg:p-0" aria-current="page">Beranda</a>
                </li>
                <li class="relative">
                    <button id="mega-menu-full-dropdown-button" data-collapse-toggle="mega-menu-full-dropdown" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm lg:w-auto hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-600 lg:p-0">
                        Fasilitas
                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- MEGA MENU -->
                    <!-- Menyesuaikan lebar menu untuk tablet dan desktop -->
                    <div id="mega-menu-full-dropdown" class="hidden absolute z-50 mt-2 w-screen max-w-sm sm:max-w-xl lg:max-w-3xl inset-x-0 mx-auto border border-gray-200 shadow-lg bg-white">
                        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4 px-4 py-5 text-gray-900 max-h-[80vh] overflow-y-auto">
                            <!-- Kolom 1 -->
                            <ul>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Basement dan Area Parkir</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Studio Musik (Basement)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Exhibition Area (Lt.1)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Amphitheater (Lt.1)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Perpustakaan (Lt.2)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Coworking Space (Lt.2)</div></a></li>
                            </ul>
                            <!-- Kolom 2 -->
                            <ul>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Ruang Kaca (Lt.2)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Recording Studio (Lt.3)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Auditorium (Lt.3)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Digital Content Studio (Lt.3)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Studio Tari (Lt.3)</div></a></li>
                            </ul>
                            <!-- Kolom 3 -->
                            <ul>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Taman (Lt.4)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Teleconference Room (Lt.4)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Studio Jahit (Lt.4)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Studio Animasi & Editing (Lt.4)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Studio Fesyen (Lt.5)</div></a></li>
                                <li><a href="#" class="block p-3 rounded-lg hover:bg-gray-100"><div class="font-semibold">Aula (Lt.5)</div></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="berita" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0">Berita</a>
                </li>
                <li>
                    <a href="artikel" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0">Artikel</a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

</body>
</html>