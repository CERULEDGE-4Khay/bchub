@extends('layouts.admin')

@section('content')
  <div class="flex flex-wrap -mx-3">
    <!-- card1 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Menunggu</p>
                <h5 class="mb-2 font-bold">20 Orang</h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500 w-12 h-12 flex justify-center items-center">
                <i class="bi bi-hourglass-split text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- card2 -->
    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Diterima</p>
                <h5 class="mb-2 font-bold">50 Orang</h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="rounded-circle bg-gradient-to-tl from-red-600 to-orange-600 w-12 h-12 flex justify-center items-center">
                <i class="bi bi-hourglass-split text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Ditolak</p>
                <h5 class="mb-2 font-bold">50 Orang</h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="rounded-circle bg-gradient-to-tl from-red-600 to-orange-600 w-12 h-12 flex justify-center items-center">
                <i class="bi bi-hourglass-split text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
      <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
        <div class="flex-auto p-4">
          <div class="flex flex-row -mx-3">
            <div class="flex-none w-2/3 max-w-full px-3">
              <div>
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Total Booking Hari Ini</p>
                <h5 class="mb-2 font-bold">50 Orang</h5>
              </div>
            </div>
            <div class="px-3 text-right basis-1/3">
              <div class="rounded-circle bg-gradient-to-tl from-red-600 to-orange-600 w-12 h-12 flex justify-center items-center">
                <i class="bi bi-hourglass-split text-white"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="pt-4">
    <div class="w-full px-6 mx-auto">
      <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
        <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
          <div class="text-sm leading-normal text-center text-sky-500 lg:text-slate-700 lg:text-left">
            ©
            <script>
              document.write(new Date().getFullYear() + ",");
            </script>
            made with <i class="fa fa-heart"></i> by
            <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
            for a better web.
          </div>
        </div>
        <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
          <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-sky-500 lg:text-slate-700" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-sky-500 lg:text-slate-700" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-in-out text-sky-500 lg:text-slate-700" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-in-out text-sky-500 lg:text-slate-700" target="_blank">License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
@endsection
