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
        $query = Pendaftaran::query();

        // Search by judul or deskripsi
        if (request()->filled('search')) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('judul', 'like', "%$search%")
                    ->orWhere('deskripsi', 'like', "%$search%");
            });
        }

        // Pagination with max 100 per page
        $perPage = min((int) request('per_page', 10), 100);
        $pendaftarans = $query->paginate($perPage)->appends(request()->except('page'));

        return view('admin.rekap-pendaftaran.index', compact('pendaftarans'));
    }

    public function responPendaftaran($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);

        $respondPendaftarans = RespondPendaftaran::where('pendaftaran_id', $id)->get();

        // Ambil semua pertanyaan unik
        $pertanyaans = $respondPendaftarans->pluck('pertanyaan')->unique()->values();

        // Group responden berdasarkan nomor_pendaftaran
        $groupedResponses = $respondPendaftarans->groupBy('nomor_pendaftaran');

        // Manual pagination for grouped data
        $perPage = min((int) request('per_page', 10), 100);
        $currentPage = request('page', 1);
        $groupedCollection = collect($groupedResponses);

        $paginatedGroups = new \Illuminate\Pagination\LengthAwarePaginator(
            $groupedCollection->forPage($currentPage, $perPage),
            $groupedCollection->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('admin.rekap-pendaftaran.respon-pendaftaran.index', compact('pendaftaran', 'respondPendaftarans', 'pertanyaans', 'paginatedGroups'));
    }
}
