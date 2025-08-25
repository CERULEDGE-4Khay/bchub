<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
  <link rel="icon" type="image/png" href="assets/img/favicon.png" />
  <title>Argon Dashboard 2 Tailwind by Creative Tim</title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Nucleo Icons -->
  <link href="/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Popper -->
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <!-- Main Styling -->
  <link href="/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/perfect-scrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/tooltips.css') }}">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
  <div class="absolute w-full bg-blue-500 min-h-75"></div>

  <x-sidebar></x-sidebar>

  <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <x-header-dashboard></x-header-dashboard>

    <div class="w-full px-6 py-6 mx-auto">
      @yield('content')
    </div>
  </main>
<!-- plugin for charts  -->
  <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}" async></script>
  <!-- plugin for scrollbar  -->
  <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}" async></script>
  <!-- main script file  -->
  <script src="{{ asset('assets/js/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('assets/js/navbar-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/nav-pills.js') }}"></script>
  <script src="{{ asset('assets/js/dropdown.js') }}"></script>
  <script src="{{ asset('assets/js/fixed-plugin.js') }}"></script>
  <script src="{{ asset('assets/js/navbar-sticky.js') }}"></script>
  <script src="{{ asset('assets/js/sidenav-burger.js') }}"></script>
  <script src="{{ asset('assets/js/charts.js') }}"></script>
</body>
</html>