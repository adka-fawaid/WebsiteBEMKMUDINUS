<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Partnership;
use App\Models\ProsedurPartnership;
use App\Models\PendaftaranMediaPartner;
use App\Models\PendaftaranDelegasi;
use App\Models\PendaftaranKampusVisit;
use App\Models\PendaftaranKolaborasi;
use App\Models\PendaftaranSponsorship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PartnershipController extends Controller
{
    public function index()
    {
        $partnerships = Partnership::all();

        return view('guest.partnership.index', compact(
            'partnerships'
        ));
    }

    public function mediaPartner()
    {
        return view('guest.partnership.media-partner.index');
    }

    public function prosedurMediaPartner($kategori)
    {
        // Validasi kategori
        $validKategori = ['gratis', 'berbayar'];
        if (!in_array(strtolower($kategori), $validKategori)) {
            abort(404);
        }

        // Konversi kategori ke format database
        $kategoriDb = $kategori === 'gratis' ? 'Medpart Gratis' : 'Medpart Berbayar';

        // Ambil prosedur berdasarkan kategori
        $prosedurs = ProsedurPartnership::where('kategori', $kategoriDb)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('guest.partnership.media-partner.prosedur.index', compact('prosedurs', 'kategori', 'kategoriDb'));
    }

    public function prosedur($kategori)
    {
        // Validasi kategori
        $validKategori = ['sponsorship', 'kolaborasi', 'kampus-visit', 'delegasi'];
        if (!in_array(strtolower($kategori), $validKategori)) {
            abort(404);
        }

        // Konversi kategori ke format database
        $kategoriDb = match ($kategori) {
            'sponsorship' => 'Sponsorship',
            'kolaborasi' => 'Kolaborasi',
            'kampus-visit' => 'Kampus Visit',
            'delegasi' => 'Delegasi',
            default => abort(404)
        };

        // Ambil prosedur berdasarkan kategori
        $prosedurs = ProsedurPartnership::where('kategori', $kategoriDb)
            ->orderBy('created_at', 'asc')
            ->get();

        return view('guest.partnership.prosedur.index', compact('prosedurs', 'kategori', 'kategoriDb'));
    }

    public function daftar($kategori)
    {
        return view('guest.partnership.daftar.index', compact('kategori'));
    }

    public function storeDaftar(Request $request, $kategori)
    {
        // Validasi kategori
        $validKategori = ['media-partner', 'sponsorship', 'kolaborasi', 'kampus-visit', 'delegasi'];
        if (!in_array(strtolower($kategori), $validKategori)) {
            abort(404);
        }

        // Konversi kategori ke format database
        $kategoriDb = match ($kategori) {
            'media-partner' => 'Media Partner',
            'sponsorship' => 'Sponsorship',
            'kolaborasi' => 'Kolaborasi',
            'kampus-visit' => 'Kampus Visit',
            'delegasi' => 'Delegasi',
            default => abort(404)
        };

        // Validasi dan simpan berdasarkan kategori
        switch ($kategoriDb) {
            case 'Media Partner':
                return $this->storeMediaPartner($request);

            case 'Delegasi':
                return $this->storeDelegasi($request);

            case 'Kampus Visit':
                return $this->storeKampusVisit($request);

            case 'Kolaborasi':
                return $this->storeKolaborasi($request);

            case 'Sponsorship':
                return $this->storeSponsorship($request);

            default:
                abort(404);
        }
    }

    protected function storeMediaPartner(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'nama_acara' => 'required|string|max:255',
            'deskripsi_acara' => 'required|string',
            'proposal_acara' => 'required|file|mimes:pdf|max:10240',
            'poster_acara' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'jenis_paket' => 'required|in:gratis,berbayar',
            'bukti_pembayaran' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'bukti_follow' => 'required|image|mimes:jpg,jpeg,png|max:5120',
            'akun_tag' => 'required|string|max:255',
        ]);

        // Generate nomor pendaftaran
        $tahun = date('Y');
        $nomorUrut = str_pad(PendaftaranMediaPartner::count() + 1, 4, '0', STR_PAD_LEFT);
        $nomorPendaftaran = 'MP-' . $tahun . '-' . $nomorUrut;

        // Upload files
        $proposalPath = $request->file('proposal_acara')->store('pendaftaran/media-partner/proposal', 'public');
        $posterPath = $request->file('poster_acara')->store('pendaftaran/media-partner/poster', 'public');
        $buktiFollowPath = $request->file('bukti_follow')->store('pendaftaran/media-partner/bukti-follow', 'public');

        $buktiPembayaranPath = null;
        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPembayaranPath = $request->file('bukti_pembayaran')->store('pendaftaran/media-partner/bukti-pembayaran', 'public');
        }

        PendaftaranMediaPartner::create([
            'nomor_pendaftaran' => $nomorPendaftaran,
            'email' => $validated['email'],
            'nama_lengkap' => $validated['nama_lengkap'],
            'nama_instansi' => $validated['nama_instansi'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'nama_acara' => $validated['nama_acara'],
            'deskripsi_acara' => $validated['deskripsi_acara'],
            'proposal_acara' => $proposalPath,
            'poster_acara' => $posterPath,
            'jenis_paket' => $validated['jenis_paket'],
            'bukti_pembayaran' => $buktiPembayaranPath,
            'bukti_follow' => $buktiFollowPath,
            'akun_tag' => $validated['akun_tag'],
        ]);

        return redirect()->back()->with('success', 'Pendaftaran Media Partner berhasil! Nomor pendaftaran: ' . $nomorPendaftaran);
    }

    protected function storeDelegasi(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'nama_acara' => 'required|string|max:255',
            'deskripsi_acara' => 'required|string',
            'surat_undangan' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Generate nomor pendaftaran
        $tahun = date('Y');
        $nomorUrut = str_pad(PendaftaranDelegasi::count() + 1, 4, '0', STR_PAD_LEFT);
        $nomorPendaftaran = 'DLG-' . $tahun . '-' . $nomorUrut;

        // Upload file
        $suratPath = $request->file('surat_undangan')->store('pendaftaran/delegasi/surat', 'public');

        PendaftaranDelegasi::create([
            'nomor_pendaftaran' => $nomorPendaftaran,
            'email' => $validated['email'],
            'nama_lengkap' => $validated['nama_lengkap'],
            'nama_instansi' => $validated['nama_instansi'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'nama_acara' => $validated['nama_acara'],
            'deskripsi_acara' => $validated['deskripsi_acara'],
            'surat_undangan' => $suratPath,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran Delegasi berhasil! Nomor pendaftaran: ' . $nomorPendaftaran);
    }

    protected function storeKampusVisit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'proposal_acara' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Generate nomor pendaftaran
        $tahun = date('Y');
        $nomorUrut = str_pad(PendaftaranKampusVisit::count() + 1, 4, '0', STR_PAD_LEFT);
        $nomorPendaftaran = 'KV-' . $tahun . '-' . $nomorUrut;

        // Upload file
        $proposalPath = $request->file('proposal_acara')->store('pendaftaran/kampus-visit/proposal', 'public');

        PendaftaranKampusVisit::create([
            'nomor_pendaftaran' => $nomorPendaftaran,
            'email' => $validated['email'],
            'nama_lengkap' => $validated['nama_lengkap'],
            'nama_instansi' => $validated['nama_instansi'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'proposal_acara' => $proposalPath,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran Kampus Visit berhasil! Nomor pendaftaran: ' . $nomorPendaftaran);
    }

    protected function storeKolaborasi(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'nama_acara' => 'required|string|max:255',
            'deskripsi_acara' => 'required|string',
            'proposal_acara' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Generate nomor pendaftaran
        $tahun = date('Y');
        $nomorUrut = str_pad(PendaftaranKolaborasi::count() + 1, 4, '0', STR_PAD_LEFT);
        $nomorPendaftaran = 'KLB-' . $tahun . '-' . $nomorUrut;

        // Upload file
        $proposalPath = $request->file('proposal_acara')->store('pendaftaran/kolaborasi/proposal', 'public');

        PendaftaranKolaborasi::create([
            'nomor_pendaftaran' => $nomorPendaftaran,
            'email' => $validated['email'],
            'nama_lengkap' => $validated['nama_lengkap'],
            'nama_instansi' => $validated['nama_instansi'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'nama_acara' => $validated['nama_acara'],
            'deskripsi_acara' => $validated['deskripsi_acara'],
            'proposal_acara' => $proposalPath,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran Kolaborasi berhasil! Nomor pendaftaran: ' . $nomorPendaftaran);
    }

    protected function storeSponsorship(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'nama_lengkap' => 'required|string|max:255',
            'nama_instansi' => 'required|string|max:255',
            'nomor_telepon' => 'required|string|max:20',
            'proposal_acara' => 'required|file|mimes:pdf|max:10240',
        ]);

        // Generate nomor pendaftaran
        $tahun = date('Y');
        $nomorUrut = str_pad(PendaftaranSponsorship::count() + 1, 4, '0', STR_PAD_LEFT);
        $nomorPendaftaran = 'SPO-' . $tahun . '-' . $nomorUrut;

        // Upload file
        $proposalPath = $request->file('proposal_acara')->store('pendaftaran/sponsorship/proposal', 'public');

        PendaftaranSponsorship::create([
            'nomor_pendaftaran' => $nomorPendaftaran,
            'email' => $validated['email'],
            'nama_lengkap' => $validated['nama_lengkap'],
            'nama_instansi' => $validated['nama_instansi'],
            'nomor_telepon' => $validated['nomor_telepon'],
            'proposal_acara' => $proposalPath,
        ]);

        return redirect()->back()->with('success', 'Pendaftaran Sponsorship berhasil! Nomor pendaftaran: ' . $nomorPendaftaran);
    }
}
