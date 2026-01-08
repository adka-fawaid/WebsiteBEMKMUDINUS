@extends('layouts.layouts')

@section('content')
<!-- Create Partnership Section -->
<section id="create-partnership" style="margin-top: 100px;">
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/partnership">Partnership</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tambah Partnership
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="header-partnership text-center" style="margin-top: 50px; margin-bottom: 50px;">
            <h2 class="fw-bold">Tambah Data Partnership</h2>
            <p class="text-muted">Kirimkan data partnership baru untuk BEM KM UDINUS</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-5">

                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Berhasil!</strong> {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal!</strong> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Validasi Gagal!</strong>
                            <ul class="mb-0 mt-2">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <form action="{{ route('partnership.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Kategori Field -->
                            <div class="mb-3">
                                <label for="kategori_partnership_id" class="form-label fw-bold">Kategori Partnership <span class="text-danger">*</span></label>
                                <select class="form-select @error('kategori_partnership_id') is-invalid @enderror" 
                                        id="kategori_partnership_id" name="kategori_partnership_id" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}" {{ old('kategori_partnership_id') == $kategori->id ? 'selected' : '' }}>
                                        {{ $kategori->nama }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('kategori_partnership_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Nama Field -->
                            <div class="mb-3">
                                <label for="nama" class="form-label fw-bold">Nama Partnership <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                       id="nama" name="nama" value="{{ old('nama') }}" 
                                       placeholder="Contoh: PT. Telekomunikasi Indonesia" required>
                                @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Deskripsi Field -->
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label fw-bold">Deskripsi</label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" 
                                          id="deskripsi" name="deskripsi" rows="4" 
                                          placeholder="Deskripsikan partnership ini...">{{ old('deskripsi') }}</textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Link Field -->
                            <div class="mb-3">
                                <label for="link" class="form-label fw-bold">Link Website</label>
                                <input type="url" class="form-control @error('link') is-invalid @enderror" 
                                       id="link" name="link" value="{{ old('link') }}" 
                                       placeholder="https://example.com">
                                @error('link')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- PDF File Field -->
                            <div class="mb-4">
                                <label for="pdf_file" class="form-label fw-bold">File PDF (Opsional)</label>
                                <input type="file" class="form-control @error('pdf_file') is-invalid @enderror" 
                                       id="pdf_file" name="pdf_file" accept=".pdf">
                                @error('pdf_file')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="text-muted d-block mt-2">
                                    📄 Format: PDF | Ukuran maksimal: 10MB
                                </small>
                            </div>

                            <!-- Form Actions -->
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary flex-grow-1">
                                    <i class="bi bi-check-circle"></i> Kirim Partnership
                                </button>
                                <a href="{{ route('partnership.index') }}" class="btn btn-secondary">
                                    <i class="bi bi-arrow-left"></i> Kembali
                                </a>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End Create Partnership Section -->
@endsection
