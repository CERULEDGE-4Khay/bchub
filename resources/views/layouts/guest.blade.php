<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('UPTD Kebudayaan dan Pariwisata', 'UPTD Kebudayaan dan Pariwisata') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
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
        {{-- Success Message --}}
        @if (session('success'))
        <div id="alert-success"
            class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded-lg shadow-md z-50">
            {{ session('success') }}
        </div>
        @endif

        {{-- Error Message --}}
        @if ($errors->any())
        <div id="alert-error"
            class="fixed top-5 right-5 bg-red-500 text-white px-4 py-2 rounded-lg shadow-md z-50">
            <ul class="list-disc list-inside text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        @include('components.header')
        @yield('content')
        @include('components.footer')

        <script>
        setTimeout(() => {
            const successBox = document.getElementById('alert-success');
            const errorBox = document.getElementById('alert-error');
            if (successBox) successBox.remove();
            if (errorBox) errorBox.remove();
        }, 3000); // 3 detik
        </script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    </body>

</html>
