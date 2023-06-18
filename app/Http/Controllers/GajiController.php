<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index()
    {
        $daftarPekerja = Pekerja::all();

        return view('coba.cobapembayaran', compact('daftarPekerja'));
    }

    public function bayarGaji(Request $request)
    {
        // Validasi input
        $request->validate([
            'id' => 'required|integer'
        ]);

        // Ambil pengguna yang sedang login
        $user = auth()->user();

        // Ambil data pekerja berdasarkan ID yang diberikan
        $pekerja = Pekerja::find($request->id);

        // Periksa apakah pekerja dan pengguna yang sedang login ada
        if ($pekerja && $user) {
            // Lakukan pembayaran gaji
            $pekerja->bayarGaji($user);

            // Berikan respon jika berhasil
            return 'Saldo berhasil dikurangi.';
        }

        // Berikan respon jika terjadi kesalahan
        return 'Terjadi kesalahan dalam pengurangan saldo.';
    }
}
