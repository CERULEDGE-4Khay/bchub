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
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Pengajuan Ruangan Terbaru</p>
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
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Jumlah Pengunjung</p>
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
                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Total Ruangan</p>
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
  <div class="p-4 mt-10 bg-white rounded-lg shadow w-full md:w-full lg:w-1/2">
      <div class="flex items-center justify-between mb-4">
          <h2 class="text-xl font-bold">Pengunjung Per Bulan ({{ $tahunDipilih }})</h2>
          
          <!-- Dropdown pilih tahun -->
        <form method="GET" action="{{ route('dashboard.admin') }}" class="relative">
          <label for="tahun" class="sr-only">Pilih tahun</label>

          <!-- Tombol “palsu” yang terlihat -->
          <div class="relative inline-flex">
            <div class="border rounded px-3 py-1 text-sm flex items-center gap-2 select-none">
              <!-- icon (opsional) -->
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                <line x1="16" y1="2" x2="16" y2="6"></line>
                <line x1="8" y1="2" x2="8" y2="6"></line>
                <line x1="3" y1="10" x2="21" y2="10"></line>
              </svg>
              <span>Ganti Tahun</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                <path d="M6 9l6 6 6-6"></path>
              </svg>
            </div>

            <!-- Select asli: tak terlihat, tapi menutupi tombol agar tetap bisa diklik -->
            <select id="tahun" name="tahun"
                    onchange="this.form.submit()"
                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                    aria-label="Pilih tahun">
              @foreach($daftarTahun as $tahun)
                <option value="{{ $tahun }}" {{ (string)$tahun === (string)$tahunDipilih ? 'selected' : '' }}>
                  {{ $tahun }}
                </option>
              @endforeach
            </select>
          </div>
        </form>

      </div>

      <canvas id="pengunjungChart" height="100"></canvas>
  </div>

  <script>
      const ctx = document.getElementById('pengunjungChart').getContext('2d');
      new Chart(ctx, {
          type: 'line',
          data: {
              labels: @json($labelBulan),
              datasets: [{
                  label: 'Jumlah Pengunjung',
                  data: @json($pengunjungBulan),
                  borderColor: 'rgba(75, 192, 192, 1)',
                  backgroundColor: 'rgba(75, 192, 192, 0.2)',
                  tension: 0.3,
                  fill: true,
                  pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                  pointRadius: 5
              }]
          },
          options: {
              responsive: true,
              plugins: {
                  legend: { display: true }
              },
              scales: {
                  y: { beginAtZero: true }
              }
          }
      });
  </script>



  <footer class="pt-4 mt-10">
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
