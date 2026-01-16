<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AnggotaUnit;
use App\Models\Berita;
use App\Models\Partnership;
use App\Models\Pendaftaran;
use App\Models\ProgramKerja;
use App\Models\RespondPendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $beritaCount = Berita::count();
        $prokerCount = ProgramKerja::count();
        $anggotaCount = AnggotaUnit::count();
        $partnershipCount = Partnership::count();
        $pendaftaranCount = Pendaftaran::count();
        $respondCount = RespondPendaftaran::count();

        return view('admin.index', compact(
            'user',
            'beritaCount',
            'prokerCount',
            'anggotaCount',
            'partnershipCount',
            'pendaftaranCount',
            'respondCount'
        ));
    }
}
