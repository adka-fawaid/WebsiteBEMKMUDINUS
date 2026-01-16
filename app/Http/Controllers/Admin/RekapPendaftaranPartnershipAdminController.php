<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\PendaftaranDelegasi;
use App\Http\Controllers\Controller;
use App\Models\PendaftaranKolaborasi;
use App\Models\PendaftaranKampusVisit;
use App\Models\PendaftaranSponsorship;
use App\Models\PendaftaranMediaPartner;

class RekapPendaftaranPartnershipAdminController extends Controller
{
    public function index()
    {
        $rekapMedpart = PendaftaranMediaPartner::all();
        $rekapSponsorship = PendaftaranSponsorship::all();
        $rekapKolaborasi = PendaftaranKolaborasi::all();
        $rekapKampusVisit = PendaftaranKampusVisit::all();
        $rekapDelegasi = PendaftaranDelegasi::all();
        return view('admin.rekap-pendaftaran-partnership.index', compact(
            'rekapMedpart',
            'rekapSponsorship',
            'rekapKolaborasi',
            'rekapKampusVisit',
            'rekapDelegasi'
        ));
    }
}
