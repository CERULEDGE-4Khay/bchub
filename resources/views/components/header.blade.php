<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCH</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<nav class="bg-white fixed top-0 left-0 right-0 z-40 border-gray-200 shadow-sm">
    <div class="container mx-auto flex flex-wrap items-center justify-between py-4 px-6 lg:px-8">
        <a href="/" class="flex items-center space-x-2 lg:space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/images/logo-removebg-preview.png') }}" class="h-8 lg:h-10" alt="UPTD Logo" />
            <span class="hidden lg:block self-center text-sm lg:text-lg font-semibold whitespace-nowrap text-clifford">UPTD Padepokan Seni, Kreativitas dan Kebudayaan</span>
        </a>

        <!-- Tombol Hamburger untuk Mobile -->
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center lg:hidden text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
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
                    <a href="{{ route('beritas.public.index')}}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0">Berita</a>
                </li>
                <li>
                    <a href="{{ route('articles.public.index')}}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-blue-700 lg:p-0">Artikel</a>
                </li>

<!-- 🔔 Notifikasi Dropdown -->
{{-- @auth
<li class="relative">
    <button id="notifDropdownButton" class="relative flex items-center p-2 text-gray-600 hover:text-blue-600 focus:outline-none">
        <!-- Ikon lonceng -->
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3c0 .386-.149.735-.405 1.002L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
        </svg>
        <!-- Badge jumlah notif -->
        @if(auth()->user()->unreadNotifications->count() > 0)
            <span id="notifCount"
                  class="absolute -top-1 -right-1 bg-red-600 text-white text-xs rounded-full px-1">
                {{ auth()->user()->unreadNotifications->count() }}
            </span>
        @endif
    </button>

    <!-- Dropdown isi notif -->
    <div id="notifDropdown" class="hidden absolute right-0 mt-2 w-72 bg-white border border-gray-200 rounded-lg shadow-lg">
        <div class="p-3 font-semibold border-b">Notifikasi</div>
        <ul id="notifList" class="max-h-60 overflow-y-auto">
            @forelse(auth()->user()->notifications as $notif)
                <li class="px-4 py-2 text-sm hover:bg-gray-100">
                    <p>Status Booking:
                        <span class="font-semibold">{{ ucfirst($notif->data['status']) }}</span>
                    </p>
                    <p>Ruangan: {{ $notif->data['room'] }} ({{ $notif->data['date'] }})</p>
                    @if(!empty($notif->data['note']))
                        <p>Catatan: {{ $notif->data['note'] }}</p>
                    @endif
                    <small class="text-gray-500">{{ $notif->created_at->diffForHumans() }}</small>
                </li>
            @empty
                <li class="px-4 py-2 text-sm text-gray-500">Belum ada notifikasi.</li>
            @endforelse
        </ul>
        <div class="p-2 text-center border-t">
            <a href="#" class="text-blue-600 text-sm hover:underline">Lihat semua</a>
        </div>
    </div>
</li>
@endauth

<script>
    // Toggle dropdown notifikasi
    document.getElementById('notifDropdownButton')?.addEventListener('click', () => {
        document.getElementById('notifDropdown').classList.toggle('hidden');
    });
</script> --}}
@auth
<div class="relative">
  <!-- Tombol Lonceng -->
  <button id="notifDropdownBtn" class="relative flex items-center justify-center w-10 h-10 rounded-full hover:bg-gray-100 focus:outline-none">
    <i class="fas fa-bell text-xl text-gray-700"></i>
    @if(auth()->user()->unreadNotifications->count() > 0)
      <span id="notifCount"
            class="absolute top-1.5 right-1.5 bg-red-600 text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full leading-none">
        {{ auth()->user()->unreadNotifications->count() }}
      </span>
    @endif
  </button>

  <!-- Dropdown -->
  <div id="notifDropdown"
       class="hidden absolute right-0 mt-3 w-80 max-w-[90vw] bg-white border border-gray-200 rounded-xl shadow-lg z-50">
    <div class="px-4 py-2 font-semibold border-b text-gray-800">Notifikasi</div>

    <ul id="notifList" class="max-h-72 overflow-y-auto divide-y">
      @forelse(auth()->user()->notifications as $notif)
        <li class="px-4 py-3 text-sm hover:bg-gray-50">
          <p class="text-gray-800">
            Status Booking:
            <span class="font-semibold text-gray-900">{{ ucfirst($notif->data['status']) }}</span>
          </p>
          <p class="text-gray-700">Ruangan: {{ $notif->data['room'] }} ({{ $notif->data['date'] }})</p>
          @if(!empty($notif->data['note']))
            <p class="text-gray-600 text-xs">Catatan: {{ $notif->data['note'] }}</p>
          @endif
          <small class="text-gray-400 text-xs">{{ $notif->created_at->diffForHumans() }}</small>
        </li>
      @empty
        <li class="px-4 py-3 text-gray-500 text-sm text-center">Belum ada notifikasi.</li>
      @endforelse
    </ul>

    <div class="p-2 text-center border-t">
      <a href="{{ route('notifications.index')}}" class="text-blue-600 text-sm hover:underline">Lihat semua</a>
    </div>
  </div>
</div>
@endauth



                <li>
                    @guest
                    <a href="{{ route('login') }}" class="text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Masuk</a>
                    @else
                    <form action="{{ route('logout')}}" method="post">
                        @csrf
                        <button class="text-white bg-clifford hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center" type="submit">Keluar</button>
                    </form>
                    @endguest
                </li>

            </ul>
        </div>
    </div>
</nav>

</body>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const notifBtn = document.getElementById("notifDropdownBtn");
    const notifDropdown = document.getElementById("notifDropdown");

    // Toggle dropdown
    notifBtn.addEventListener("click", () => {
        notifDropdown.classList.toggle("hidden");
    });

    // Klik luar → close dropdown
    document.addEventListener("click", (e) => {
        if (!notifBtn.contains(e.target) && !notifDropdown.contains(e.target)) {
            notifDropdown.classList.add("hidden");
        }
    });
});

function markAsRead(event, id) {
    event.preventDefault();

    fetch(`/notifications/${id}/read`, {
        method: "POST",
        headers: {
            "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
            "Accept": "application/json",
        },
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            // Hilangkan notif dari list
            const notifItem = event.target.closest("a");
            notifItem.remove();

            // Update badge
            let badge = document.getElementById("notifCount");
            if (badge) {
                let count = parseInt(badge.innerText) - 1;
                if (count > 0) {
                    badge.innerText = count;
                } else {
                    badge.remove();
                }
            }
        }
        // Redirect ke link aslinya (detail booking)
        window.location.href = event.target.closest("a").getAttribute("href");
    });
}
</script>

</html>
