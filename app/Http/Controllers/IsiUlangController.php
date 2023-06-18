<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class IsiUlangController extends Controller
{
    public function isiulang(Request $request)
{
    // Validasi input saldo yang diinputkan pengguna
    $request->validate([
        'saldo' => 'required|numeric|min:0', // Ubah aturan validasi sesuai kebutuhan
    ]);

    // Ambil pengguna yang sedang login
    $user = User::find(auth()->user()->id);

    // Update saldo pengguna
    $user->saldo += $request->saldo;
    $user->save();

    return view('pelanggan.isiulangberhasil');
}
}
