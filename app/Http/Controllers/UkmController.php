<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class UkmController extends Controller
{
    public function index()
    {
        return view('admin.unit.index', [
            'ukms' => Ukm::all()
        ]);
    }

    public function create()
    {
        return view('admin.unit.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
            'desc.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Image
        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/ukm', $fileName);

        # ukm
        $storage = "storage/content-ukm";
        $dom = new \DOMDocument();

        # untuk menonaktifkan kesalahan libxml standar dan memungkinkan penanganan kesalahan pengguna.
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        # Menghapus buffer kesalahan libxml
        libxml_clear_errors();

        # Baca di https://dosenit.com/php/fungsi-libxml-php
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1440, 720)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        Ukm::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'image' => $fileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('unit'))->with('success', 'data berhasil di simpan');
    }

    public function edit($id)
    {
        $ukm = Ukm::find($id);
        return view('admin.unit.edit', [
            'ukm' => $ukm
        ]);
    }

    public function update(Request $request, $id)
    {
        $ukm = Ukm::find($id);

        # Jika ada image baru
        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = '';
        }

        $rules = [
            'judul' => 'required',
            'image' => $fileCheck,
            'desc' => 'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
            'desc.required' => 'Judul wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Cek jika ada image baru
        if ($request->hasFile('image')) {
            if (\File::exists('storage/ukm/' . $ukm->image)) {
                \File::delete('storage/ukm/' . $request->old_image);
            }
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/ukm', $fileName);
        }

        if ($request->hasFile('image')) {
            $checkFileName = $fileName;
        } else {
            $checkFileName = $request->old_image;
        }

        // ukm
        $storage = "storage/content-ukm";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent), 6, 6) . '_' . time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200, 1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $ukm->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect(route('unit'))->with('success', 'data berhasil di update');
    }

    public function destroy($id)
    {
        $ukm = Ukm::find($id);
        if (\File::exists('storage/ukm/' . $ukm->image)) {
            \File::delete('storage/ukm/' . $ukm->image);
        }

        $ukm->delete();

        return redirect(route('unit'))->with('success', 'data berhasil di hapus');
    }
}