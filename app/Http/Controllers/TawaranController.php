<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kontrak;

class TawaranController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;

        $kontrak = Kontrak::where('user_id', $userId)
            ->get();

        return view('pekerja.tawaran', compact('kontrak'));
    }
    public function konfirmasi(Request $request, $id)
    {
        $kontrak = Kontrak::findOrFail($id);

        if ($request->action == 'accept') {
            $kontrak->status = 'disetujui';
            $kontrak->save();
            return view('pekerja.tawaranDiterima');
        } elseif ($request->action == 'reject') {
            $kontrak->status = 'ditolak';
            $kontrak->save();
            return view('pekerja.tawaranDitolak');
        }
    }

    public function kontrak()
    {

        $userId = auth()->user()->id;

        $kontrak = Kontrak::where('user_id', $userId)
            ->get();
        return view('pekerja.kontrakanda', compact('kontrak'));
    }
}
