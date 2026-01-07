@extends('layouts.layouts')

@section('content')
<section id="partnership-manual" style="margin-top: 80px; padding-bottom:40px;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h2 class="fw-bold">Manual Partnership</h2>
                <p class="text-secondary">Halaman manual Partnership — baca panduan lengkap di bawah dan gunakan formulir untuk mengajukan partnership.</p>
            </div>

            <div class="col-lg-8">
                <div class="card p-4 mb-4">
                    <h5 class="mb-3">Panduan / SOP Partnership</h5>
                    <!-- Embed PDF if uploaded to public/docs/; otherwise show placeholder -->
                    <div class="pdf-embed mb-3">
                        <embed src="/docs/SOP-MEDPART-Bemkm-udinus.pdf" type="application/pdf" width="100%" height="600px" />
                        <p class="text-muted small mt-2">Jika PDF tidak muncul, silakan unggah file PDF ke <strong>public/docs/SOP-MEDPART-Bemkm-udinus.pdf</strong> atau tempelkan teksnya di bawah.</p>
                    </div>

                    <div id="pdf-text-content" class="mt-3" style="white-space:pre-wrap;">
                        <!-- If you prefer the plain text of the PDF, paste it here and it will render. -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-4 mb-4">
                    <h5 class="mb-3">Form Pengajuan Partnership</h5>
                    <form action="/partnership/submit" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama Partnership</label>
                            <input type="text" name="judul" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <textarea name="desc" class="form-control" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kontak / Email</label>
                            <input type="text" name="contact" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Logo / Gambar (opsional)</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <button class="btn btn-danger w-100" type="submit">Kirim Pengajuan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
