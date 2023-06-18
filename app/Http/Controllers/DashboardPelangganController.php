<?php

namespace App\Http\Controllers;

use App\Models\Kontrak;

class DashboardPelangganController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $totalKontrakAnda = Kontrak::where('is_paid', true)
                                     ->where('user_id', $userId)
                                     ->count();
        return view('pelanggan.dashboardPelanggan', compact('totalKontrakAnda'));
    }
}
