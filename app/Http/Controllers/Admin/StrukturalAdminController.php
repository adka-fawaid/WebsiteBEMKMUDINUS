<?php

namespace App\Http\Controllers\Admin;


use App\Models\AnggotaUnit;
use Illuminate\Http\Request;
use App\Models\UnitOrganisasi;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class StrukturalAdminController extends Controller
{
    /*
    * STRUKTURAL UNIT ORGANISASI
    */
    public function index()
    {
        $query = UnitOrganisasi::query();

        // Search by nama or deskripsi
        if (request()->filled('search')) {
            $search = request('search');
            $query->where(function ($q) use ($search) {
                $q->where('nama', 'like', "%$search%")
                    ->orWhere('deskripsi', 'like', "%$search%");
            });
        }

        // Filter by kategori
        $kategori = request('kategori');
        $allowedKategori = ['Badan Pengurus Harian', 'Biro', 'Kementerian'];
        if ($kategori && in_array($kategori, $allowedKategori)) {
            $query->where('kategori', $kategori);
        }

        // Pagination with max 25 per page
        $perPage = min((int) request('per_page', 10), 25);
        $unitOrganisasis = $query->paginate($perPage)->appends(request()->except('page'));

        return view('admin.struktural.index', compact('unitOrganisasis'));
    }

    public function store(Request $request)
    {
        // Check file size
        if ($request->hasFile('logo') && $request->file('logo')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran file lebih dari 5 MB')->withInput();
        }

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|in:Badan Pengurus Harian,Biro,Kementerian',
            'deskripsi' => 'required|string',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        // Handle foto upload
        if ($request->hasFile('logo')) {
            $imageName = time() . '-' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('storage/img/unit-organisasi'), $imageName);
            $validatedData['logo'] = $imageName;
        }

        UnitOrganisasi::create($validatedData);

        return redirect()->route('admin.struktural.index')->with('success', 'Struktural berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $unitOrganisasi = UnitOrganisasi::findOrFail($id);

        // Check file size
        if ($request->hasFile('logo') && $request->file('logo')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran file lebih dari 5 MB')->withInput();
        }

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'kategori' => 'required|string|in:Badan Pengurus Harian,Biro,Kementerian',
            'deskripsi' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            // Delete old logo if exists
            $oldLogoPath = public_path('storage/img/unit-organisasi/' . $unitOrganisasi->logo);
            if (file_exists($oldLogoPath)) {
                unlink($oldLogoPath);
            }

            // Upload new logo
            $imageName = time() . '-' . $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('storage/img/unit-organisasi'), $imageName);
            $validatedData['logo'] = $imageName;
        } else {
            // Keep old logo if no new logo uploaded
            unset($validatedData['logo']);
        }

        $unitOrganisasi->update($validatedData);

        return redirect()->route('admin.struktural.index')->with('success', 'Struktural berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $unitOrganisasi = UnitOrganisasi::findOrFail($id);

        // Delete logo if exists
        $logoPath = public_path('storage/img/unit-organisasi/' . $unitOrganisasi->logo);
        if (file_exists($logoPath)) {
            unlink($logoPath);
        }

        $unitOrganisasi->delete();

        return redirect()->route('admin.struktural.index')->with('success', 'Struktural berhasil dihapus.');
    }

    /*
    * ANGGOTA UNIT ORGANISASI
    */
    public function unitOrganisasi($unitOrganisasiId)
    {
        $unitOrganisasi = UnitOrganisasi::findOrFail($unitOrganisasiId);
        $anggotaUnits = AnggotaUnit::where('unit_organisasi_id', $unitOrganisasiId)->get();

        return view('admin.struktural.unit-organisasi.index', compact('unitOrganisasi', 'anggotaUnits'));
    }

    public function createAnggotaUnit(Request $request, $unitOrganisasiId)
    {
        // Check file size
        if ($request->hasFile('foto') && $request->file('foto')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran file lebih dari 5 MB')->withInput();
        }

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'nullable|string|max:20',
            'program_studi' => 'nullable|string|max:100',
            'angkatan' => 'required|string|max:4',
            'jabatan' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        // Handle foto upload
        if ($request->hasFile('foto')) {
            $imageName = time() . '-' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('storage/img/anggota-unit'), $imageName);
            $validatedData['foto'] = $imageName;
        }

        $validatedData['unit_organisasi_id'] = $unitOrganisasiId;

        AnggotaUnit::create($validatedData);

        return redirect()->route('admin.struktural.unit-organisasi.index', $unitOrganisasiId)->with('success', 'Anggota unit berhasil ditambahkan.');
    }

    public function updateAnggotaUnit(Request $request, $anggotaId)
    {
        $anggotaUnit = AnggotaUnit::findOrFail($anggotaId);

        // Check file size
        if ($request->hasFile('foto') && $request->file('foto')->getSize() > 5120 * 1024) {
            return redirect()->back()->with('error', 'Ukuran file lebih dari 5 MB')->withInput();
        }

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'nullable|string|max:20',
            'program_studi' => 'nullable|string|max:100',
            'angkatan' => 'required|string|max:4',
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
        ]);

        // Handle foto upload
        if ($request->hasFile('foto')) {
            // Delete old foto if exists
            $oldFotoPath = public_path('storage/img/anggota-unit/' . $anggotaUnit->foto);
            if (file_exists($oldFotoPath)) {
                unlink($oldFotoPath);
            }

            // Upload new foto
            $imageName = time() . '-' . $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move(public_path('storage/img/anggota-unit'), $imageName);
            $validatedData['foto'] = $imageName;
        } else {
            // Keep old foto if no new foto uploaded
            unset($validatedData['foto']);
        }

        $anggotaUnit->update($validatedData);

        return redirect()->route('admin.struktural.unit-organisasi.index', $anggotaUnit->unit_organisasi_id)->with('success', 'Anggota unit berhasil diperbarui.');
    }

    public function destroyAnggotaUnit($anggotaId)
    {
        $anggotaUnit = AnggotaUnit::findOrFail($anggotaId);
        $unitOrganisasiId = $anggotaUnit->unit_organisasi_id;

        // Delete foto if exists
        $fotoPath = public_path('storage/img/anggota-unit/' . $anggotaUnit->foto);
        if (file_exists($fotoPath)) {
            unlink($fotoPath);
        }

        $anggotaUnit->delete();

        return redirect()->route('admin.struktural.unit-organisasi.index', $unitOrganisasiId)->with('success', 'Anggota unit berhasil dihapus.');
    }
}
