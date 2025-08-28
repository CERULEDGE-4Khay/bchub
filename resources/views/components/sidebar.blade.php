<!-- sidenav  -->
<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
  <div class="h-19">
    <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
    <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="https://demos.creative-tim.com/argon-dashboard-tailwind/pages/dashboard.html" target="_blank">
      <img src="{{ asset('assets/images/logo-removebg-preview.png') }}" class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
      <img src="assets/img/logo-ct.png" class="hidden h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
      <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Bandung Creative Hub</span>
    </a>
  </div>

  <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

  <div class="items-center block w-auto grow basis-full">
    <ul class="flex flex-col pl-0 mb-0">
      <li class="mt-0.5 w-full">
        <a class="py-2.7 {{ request()->routeIs('dashboard.admin') ? 'bg-blue-500/13 font-semibold text-slate-700' : '' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 transition-colors" href="{{ route('dashboard.admin') }}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="relative top-0 text-sm leading-normal text-blue-500 bi bi-columns"></i>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class="py-2.7 {{ request()->routeIs('rooms.*') ? 'bg-blue-500/13 font-semibold text-slate-700' : '' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('rooms.index') }}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
            <i class="relative top-0 text-sm leading-normal text-orange-500 bi bi-building-fill"></i>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Ruangan</span>
        </a>
      </li>

      <li class="mt-0.5 w-full">
        <a class=" py-2.7 {{ request()->routeIs('inventories.*') ? 'bg-blue-500/13 font-semibold text-slate-700' : '' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('inventories.index') }}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
            <i class="relative top-0 text-sm leading-normal text-emerald-500 bi bi-backpack4-fill"></i>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Inventory</span>
        </a>
      </li>
      <li class="mt-0.5 w-full">
        <a class=" py-2.7 {{ request()->routeIs('bookings.*') ? 'bg-blue-500/13 font-semibold text-slate-700' : '' }} text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ route('bookings.index') }}">
          <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
            <i class="relative top-0 text-sm leading-normal text-violet-500 bi bi-calendar-week"></i>
          </div>
          <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Pengajuan Ruangan</span>
        </a>
      </li>

      {{-- <li class="w-full mt-4">
        <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase opacity-60">Account pages</h6>
      </li> --}}
    </ul>
  </div>
</aside>