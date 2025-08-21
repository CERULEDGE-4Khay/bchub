<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': false, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
    x-init="
         darkMode = JSON.parse(localStorage.getItem('darkMode'));
         $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
    :class="{'dark bg-gray-900': darkMode === true}">

  <x-preloader></x-preloader>

  <div class="flex h-screen overflow-hidden">
    <x-sidebar></x-sidebar>

    <div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
      <div
        @click="sidebarToggle = false"
        :class="sidebarToggle ? 'block lg:hidden' : 'hidden'"
        class="fixed w-full h-screen z-9 bg-gray-900/50"
      ></div>

      <x-header-dashboard></x-header-dashboard>

      <main>
        <div class="p-4 mx-auto max-w-(--breakpoint-2xl) md:p-6">
          <div class="grid grid-cols-12 gap-4 md:gap-6">
            @yield('content')
          </div>
        </div>
      </main>
    </div>
  </div>
  
</body>
</html>