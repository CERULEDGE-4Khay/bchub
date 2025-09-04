@extends('layouts.admin')

@section('content')


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
  <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
    <div class="p-6">
      <div class="flex items-center justify-between">
        <div class="flex-grow">
          <p class="text-sm font-semibold uppercase text-gray-500 mb-1">Pengajuan Ruangan Terbaru</p>
          <h3 class="text-2xl font-bold text-gray-900">{{ $pengajuanTerbaru ?  ' | Room: ' . $pengajuanTerbaru->room_id : 'Belum ada' }}</h3>
        </div>
        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center text-white shadow-md">
          <i class="bi bi-hourglass-split text-xl"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
    <div class="p-6">
      <div class="flex items-center justify-between">
        <div class="flex-grow">
          <p class="text-sm font-semibold uppercase text-gray-500 mb-1">Jumlah Pengunjung</p>
          <h3 class="text-2xl font-bold text-gray-900">{{ $jumlahPengunjung }} Orang</h3>
        </div>
        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-red-600 to-orange-600 rounded-full flex items-center justify-center text-white shadow-md">
          <i class="bi bi-people-fill text-xl"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
    <div class="p-6">
      <div class="flex items-center justify-between">
        <div class="flex-grow">
          <p class="text-sm font-semibold uppercase text-gray-500 mb-1">Total Ruangan</p>
          <h3 class="text-2xl font-bold text-gray-900">{{ $totalRuangan }} Ruangan</h3>
        </div>
        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-full flex items-center justify-center text-white shadow-md">
          <i class="bi bi-building-fill text-xl"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="relative bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
    <div class="p-6">
      <div class="flex items-center justify-between">
        <div class="flex-grow">
          <p class="text-sm font-semibold uppercase text-gray-500 mb-1">Total Booking Hari Ini</p>
          <h3 class="text-2xl font-bold text-gray-900">{{ $totalBookingHariIni }} Booking</h3>
        </div>
        <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-lime-500 to-green-600 rounded-full flex items-center justify-center text-white shadow-md">
          <i class="bi bi-calendar-check-fill text-xl"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
  <div class="bg-white rounded-xl shadow-lg p-6">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-bold text-gray-700">Pengunjung Per Bulan ({{ $tahunDipilih }})</h2>
      <form method="GET" action="{{ route('dashboard.admin') }}" class="relative">
        <div class="relative inline-flex items-center bg-gray-100 rounded-full px-4 py-1 text-sm text-gray-600 cursor-pointer transition-colors hover:bg-gray-200">
          <span class="mr-2">Tahun</span>
          <i class="bi bi-caret-down-fill text-xs"></i>
          <select id="tahun" name="tahun" onchange="this.form.submit()" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
            @foreach($daftarTahun as $tahun)
              <option value="{{ $tahun }}" {{ (string)$tahun === (string)$tahunDipilih ? 'selected' : '' }}>
                {{ $tahun }}
              </option>
            @endforeach
          </select>
        </div>
      </form>
    </div>
    <div class="relative h-auto">
      <canvas id="pengunjungChart"></canvas>
    </div>
  </div>

  <div class="bg-white rounded-xl shadow-lg p-6">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Status Inventaris</h2>
    <canvas id="inventoryChart" height="80"></canvas>
  </div>

  <div class="bg-white rounded-xl shadow-lg p-6 lg:col-span-1 md:col-span-2">
    <h2 class="text-lg font-bold text-gray-700 mb-4">Booking Per Bulan ({{ $tahunDipilih }})</h2>
    <div class="relative h-96">
      <canvas id="bookingChart"></canvas>
    </div>
  </div>
</div>

<div class="mt-10 bg-white p-6 rounded-lg shadow-lg">
  <h2 class="text-xl font-bold text-gray-800 mb-6">Booking Terbaru</h2>
  <div class="overflow-x-auto">
    <table class="min-w-full text-sm text-left">
      <thead class="bg-gray-50">
        <tr>
          <th class="py-3 px-4 font-medium text-gray-600 uppercase tracking-wider">User</th>
          <th class="py-3 px-4 font-medium text-gray-600 uppercase tracking-wider">Ruangan</th>
          <th class="py-3 px-4 font-medium text-gray-600 uppercase tracking-wider">Waktu</th>
          <th class="py-3 px-4 font-medium text-gray-600 uppercase tracking-wider">Status</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-200">
        @foreach($bookingTerbaru as $b)
        <tr class="hover:bg-gray-50 transition-colors duration-150">
          <td class="py-4 px-4 whitespace-nowrap">{{ $b->user_name }}</td>
          <td class="py-4 px-4 whitespace-nowrap">{{ $b->room_name }}</td>
          <td class="py-4 px-4 whitespace-nowrap">{{ $b->start_time }} - {{ $b->end_time }}</td>
          <td class="py-4 px-4 whitespace-nowrap">
            @php
              $statusClass = '';
              if ($b->status === 'approved') {
                $statusClass = 'bg-green-100 text-green-800';
              } elseif ($b->status === 'pending') {
                $statusClass = 'bg-yellow-100 text-yellow-800';
              } else {
                $statusClass = 'bg-red-100 text-red-800';
              }
            @endphp
            <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $statusClass }}">
              {{ ucfirst($b->status) }}
            </span>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-10">
  <div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-lg font-bold text-gray-800 mb-4">Artikel Terbaru</h2>
    <ul class="divide-y divide-gray-200">
      @foreach($artikelTerbaru as $a)
      <li class="py-3 flex items-center justify-between">
        <span class="text-gray-800 font-medium">{{ $a->title }}</span>
        <span class="text-sm text-gray-500">({{ \Carbon\Carbon::parse($a->published_at)->format('d M Y') }})</span>
      </li>
      @endforeach
    </ul>
  </div>

  <div class="bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-lg font-bold text-gray-800 mb-4">Berita Terbaru</h2>
    <ul class="divide-y divide-gray-200">
      @foreach($beritaTerbaru as $b)
      <li class="py-3 flex items-center justify-between">
        <span class="text-gray-800 font-medium">{{ $b->title }}</span>
        <span class="text-sm text-gray-500">({{ \Carbon\Carbon::parse($b->published_at)->format('d M Y') }})</span>
      </li>
      @endforeach
    </ul>
  </div>
</div>

<footer class="pt-8 mt-12 border-t border-gray-200">
  <div class="container mx-auto px-6 text-center text-gray-500 text-sm">
    <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
  </div>
</footer>

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

<script>
  const ctxBooking = document.getElementById('bookingChart').getContext('2d');
  new Chart(ctxBooking, {
      type: 'bar',
      data: {
          labels: @json($labelBulan),
          datasets: [{
              label: 'Jumlah Booking',
              data: @json($bookingBulan),
              backgroundColor: 'rgba(153, 102, 255, 0.5)',
              borderColor: 'rgba(153, 102, 255, 1)',
              borderWidth: 1
          }]
      },
      options: {
          responsive: true,
          scales: { y: { beginAtZero: true } }
      }
  });
</script>

<script>
  const ctxInventory = document.getElementById('inventoryChart').getContext('2d');
  new Chart(ctxInventory, {
      type: 'pie',
      data: {
          labels: @json(array_keys($statusInventaris->toArray())),
          datasets: [{
              data: @json(array_values($statusInventaris->toArray())),
              backgroundColor: ['#4CAF50','#FFC107','#F44336'],
          }]
      }
  });
</script>

@endsection
