<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
public function index(Request $request)
{
    $driver = DB::getDriverName();
    $tahunDipilih = $request->get('tahun', Carbon::now()->year); // default tahun sekarang

    if ($driver === 'sqlite') {
        $pengunjungPerBulan = User::select(
                DB::raw("strftime('%m', created_at) as bulan"),
                DB::raw("COUNT(*) as total")
            )
            ->whereRaw("strftime('%Y', created_at) = ?", [(string) $tahunDipilih])
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');
    } else {
        $pengunjungPerBulan = User::select(
                DB::raw('MONTH(created_at) as bulan'),
                DB::raw('COUNT(*) as total')
            )
            ->whereYear('created_at', $tahunDipilih)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->pluck('total', 'bulan');
    }

    // Buat array 12 bulan
    $dataBulan = [];
    for ($i = 1; $i <= 12; $i++) {
        $key = $driver === 'sqlite' ? str_pad($i, 2, '0', STR_PAD_LEFT) : $i;
        $dataBulan[$i] = $pengunjungPerBulan[$key] ?? 0;
    }

    // Ambil daftar tahun yang ada di tabel users
    if ($driver === 'sqlite') {
        $daftarTahun = User::selectRaw("strftime('%Y', created_at) as tahun")
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');
    } else {
        $daftarTahun = User::selectRaw("YEAR(created_at) as tahun")
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun');
    }

    // Jumlah user (pengunjung)
        $jumlahPengunjung = User::count();

        // Total ruangan
        $totalRuangan = Room::count();

        // Pengajuan ruangan terbaru (ambil 1 booking terakhir)
        $pengajuanTerbaru = DB::table('bookings')
            ->latest()
            ->first();

        // Total booking hari ini
        $totalBookingHariIni = DB::table('bookings')
            ->whereDate('created_at', Carbon::today())
            ->count();

        // Tambahan di dalam DashboardController@index

// Booking per bulan (selain pengunjung)
if ($driver === 'sqlite') {
    $bookingPerBulan = DB::table('bookings')
        ->select(DB::raw("strftime('%m', created_at) as bulan"), DB::raw("COUNT(*) as total"))
        ->whereRaw("strftime('%Y', created_at) = ?", [(string) $tahunDipilih])
        ->groupBy('bulan')
        ->orderBy('bulan')
        ->pluck('total', 'bulan');
} else {
    $bookingPerBulan = DB::table('bookings')
        ->select(DB::raw("MONTH(created_at) as bulan"), DB::raw("COUNT(*) as total"))
        ->whereYear('created_at', $tahunDipilih)
        ->groupBy('bulan')
        ->orderBy('bulan')
        ->pluck('total', 'bulan');
}

// Susun array 12 bulan
$dataBookingBulan = [];
for ($i = 1; $i <= 12; $i++) {
    $key = $driver === 'sqlite' ? str_pad($i, 2, '0', STR_PAD_LEFT) : $i;
    $dataBookingBulan[$i] = $bookingPerBulan[$key] ?? 0;
}

// Booking terbaru (5 data terakhir)
$bookingTerbaru = DB::table('bookings')
    ->join('users', 'bookings.user_id', '=', 'users.id')
    ->join('rooms', 'bookings.room_id', '=', 'rooms.id')
    ->select('bookings.*', 'users.name as user_name', 'rooms.name as room_name')
    ->latest()
    ->limit(5)
    ->get();

// Inventaris status
$statusInventaris = DB::table('inventory_items')
    ->select('condition', DB::raw('COUNT(*) as total'))
    ->groupBy('condition')
    ->pluck('total','condition');

// Artikel & berita terbaru
$artikelTerbaru = DB::table('articles')->latest()->limit(3)->get();
$beritaTerbaru = DB::table('beritas')->latest()->limit(3)->get();

return view('dashboard.admin.index', [
    'tahunDipilih'        => $tahunDipilih,
    'daftarTahun'         => $daftarTahun,
    'pengunjungBulan'     => array_values($dataBulan),
    'labelBulan'          => collect(range(1, 12))->map(fn($m) => Carbon::create()->month($m)->format('M')),
    'jumlahPengunjung'    => $jumlahPengunjung,
    'totalRuangan'        => $totalRuangan,
    'pengajuanTerbaru'    => $pengajuanTerbaru,
    'totalBookingHariIni' => $totalBookingHariIni,

    // tambahan
    'bookingBulan'        => array_values($dataBookingBulan),
    'bookingTerbaru'      => $bookingTerbaru,
    'statusInventaris'    => $statusInventaris,
    'artikelTerbaru'      => $artikelTerbaru,
    'beritaTerbaru'       => $beritaTerbaru,
]);
}

}
