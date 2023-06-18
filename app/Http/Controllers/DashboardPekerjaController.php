<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;

class DashboardPekerjaController extends Controller
{
    public function index()
{
    $userId = auth()->user()->id;

    $totalKontrakAnda = Kontrak::where('is_paid', true)
                               ->where('user_id', $userId)
                               ->count();

    $totalTawaranKontrak = Kontrak::where('status', 'diproses')
                                  ->where('user_id', $userId)
                                  ->count();

    return view('pekerja.dashboardPekerja', compact('totalKontrakAnda', 'totalTawaranKontrak'));
}
}
