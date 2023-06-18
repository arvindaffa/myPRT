<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use App\Models\kontrak;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class KontrakController extends Controller
{
    public function cari()
    {
        $pekerja = Pekerja::all();

        return view('pelanggan.cariPekerja', compact('pekerja'));
    }

    public function detail($id)
    {
        $pekerja = Pekerja::find($id);
        $tanggalLahir = Carbon::parse($pekerja->tanggal_lahir);
        $umur = $tanggalLahir->age;
        return view('pelanggan.detailPekerja', ['pekerja' => $pekerja, 'umur' => $umur]);
    }

    // memilih tawaran
    public function index($id)
    {
        $pekerja = Pekerja::find($id);

        return view('coba.kontrak', compact('pekerja'));
    }

    // mengirim tawaran
    public function store(Request $request)
    {
        // Membuat kontrak baru
        $kontrak = new kontrak;
        $kontrak->user_id = auth()->user()->id;
        $kontrak->pekerja_id = $request->pekerja_id;
        $kontrak->jam_kerja = $request->jam_kerja;
        $kontrak->durasi_kerja = $request->durasi_kerja;
        $kontrak->catatan_khusus = $request->catatan_khusus;
        // Simpan data kontrak ke dalam tabel
        $kontrak->save();

        $userId = auth()->user()->id;
        $totalKontrakAnda = Kontrak::where('is_paid', true)
            ->where('user_id', $userId)
            ->count();

        return view('pelanggan.dashboardpelanggan', compact('totalKontrakAnda'));
    }

    public function status()
    {
        $list = kontrak::where('user_id', auth()->user()->id)->get();
        return view('coba.statuspemesanan', compact('list'));
    }

    // Melihat list tawaran kontrak
    public function list()
    {
        // Mengambil data kontrak yang telah dibayar
        $kontrakDibayar = Kontrak::where('user_id', Auth::user()->id)
            ->where('is_paid', true)
            ->get();

        // Mengambil data kontrak yang belum dibayar
        $kontrakBelumDibayar = Kontrak::where('user_id', Auth::user()->id)
            ->where('is_paid', false)
            ->get();

        return view('pelanggan.pekerjaAnda', compact('kontrakDibayar', 'kontrakBelumDibayar'));
    }

    public function detailPekerjaSekarang($id)
    {
        $kontrak = Kontrak::findOrFail($id)->load('pekerja'); // Menggunakan metode load() untuk mengambil relasi pekerja
        $gaji = $kontrak->pekerja->gaji; // Mengambil data gaji pekerja
        $namaPekerja = $kontrak->pekerja->name; // Mengambil data nama pekerja

        return view('pelanggan.detailPekerjaSekarang', compact('kontrak', 'gaji', 'namaPekerja')); // Mengirimkan data gaji dan nama pekerja ke view
    }

    // Melihat detail status pemesanan
    public function detailStatusPemesanan($id)
    {
        $list = kontrak::where('user_id', auth()->user()->id)->get(); //mencocokkan user_id dalam kontrak dengan id user yg login
        $kontrak = Kontrak::findOrFail($id)->load('pekerja'); // Menggunakan metode load() untuk mengambil relasi pekerja
        $gaji = $kontrak->pekerja->gaji; // Mengambil data gaji pekerja
        $namaPekerja = $kontrak->pekerja->name; // Mengambil data nama pekerja

        return view('pelanggan.detailStatusPemesanan', compact('list', 'kontrak', 'gaji', 'namaPekerja')); // Mengirimkan data gaji dan nama pekerja ke view
    }

    public function lamanbayar($id)
    {
        $list = kontrak::where('user_id', auth()->user()->id)->get();
        $kontrak = Kontrak::findOrFail($id)->load('pekerja'); // Menggunakan metode load() untuk mengambil relasi pekerja
        $gaji = $kontrak->pekerja->gaji; // Mengambil data gaji pekerja

        return view('pelanggan.lamanPembayaran', compact('list', 'kontrak', 'gaji'));
    }

    public function bayar($id)
    {
        $kontrak = Kontrak::findOrFail($id)->load('pekerja'); // Menggunakan metode load() untuk mengambil relasi pekerja
        $gaji = $kontrak->pekerja->gaji; // Mengambil data gaji pekerja
        $list = kontrak::findOrFail($id);
        $gajiPekerja = $list->pekerja->gaji;
        $user = User::findOrFail(auth()->user()->id);

        if ($user->saldo >= $gajiPekerja) {
            $user->saldo -= $gajiPekerja;
            $user->save();

            $list->is_paid = true; // Set status pembayaran menjadi true
            $list->save();

            // ketika udah selesai, maka mengarah ke laman notifikasi pembayaran terverifikasi
            return view('pelanggan.pembayaranTerverifikasi');
        } else {
            return view('pelanggan.pembayaranGagal', compact('kontrak', 'gaji'));
        }
    }
}
