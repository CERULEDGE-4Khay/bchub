<?php

namespace App\Http\Controllers;

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
    $daftarTahun = User::selectRaw("strftime('%Y', created_at) as tahun")
        ->distinct()
        ->orderBy('tahun', 'desc')
        ->pluck('tahun');

    return view('dashboard.admin.index', [
        'tahunDipilih' => $tahunDipilih,
        'daftarTahun' => $daftarTahun,
        'pengunjungBulan' => array_values($dataBulan),
        'labelBulan' => collect(range(1, 12))->map(fn($m) => Carbon::create()->month($m)->format('M'))
    ]);
}

}
