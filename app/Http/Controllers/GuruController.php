<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Auth::user();

        if (!$guru) {
            return redirect()->route('login');
        }

        $totalSiswa = Siswa::where('guru_id', $guru->id)->count();
        $totalTabungan = Siswa::where('guru_id', $guru->id)->sum('tabungan');
        $jumlahTransaksi = Transaksi::whereHas('siswa', function ($query) use ($guru) {
            $query->where('guru_id', $guru->id);
        })->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->count();

        $siswaBelumSetor = Siswa::where('guru_id', $guru->id)
            ->whereDoesntHave('transaksi', function($query) {
                $query->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()]);
            })
            ->get();

        $reminderSetoranRutin = null;

        return view('guru.home', compact(
            'totalSiswa',
            'totalTabungan',
            'jumlahTransaksi',
            'siswaBelumSetor',
            'reminderSetoranRutin'
        ));
    }
}
