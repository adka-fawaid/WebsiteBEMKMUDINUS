<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pendaftaran;
use App\Models\RespondPendaftaran;
use Illuminate\Http\Request;

class RekapPendaftaranAdminController extends Controller
{
    public function index()
    {

        $pendaftarans = Pendaftaran::all();

        return view('admin.rekap-pendaftaran.index', compact('pendaftarans'));
    }

    public function responPendaftaran($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        $respondPendaftarans = RespondPendaftaran::where('pendaftaran_id', $id)->get();

        // Ambil semua pertanyaan unik
        $pertanyaans = $respondPendaftarans->pluck('pertanyaan')->unique()->values();

        // Group responden berdasarkan timestamp atau batch submission
        // Asumsikan setiap responden submit semua jawaban dengan created_at yang sama
        $groupedResponses = $respondPendaftarans->groupBy(function ($item) {
            return $item->created_at->format('Y-m-d H:i:s');
        });

        return view('admin.rekap-pendaftaran.respon-pendaftaran.index', compact('pendaftaran', 'respondPendaftarans', 'pertanyaans', 'groupedResponses'));
    }
}
