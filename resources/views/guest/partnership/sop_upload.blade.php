@extends('layouts.layouts')

@section('content')
<!-- SOP Upload Section -->
<section id="sop-upload" style="margin-top: 100px;">
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="/sop">SOP Media Partner</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Upload SOP
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="header-sop text-center" style="margin-top: 50px;">
            <h2 class="fw-bold">Upload SOP Media Partner BEM KM UDINUS</h2>
            <p class="text-muted mt-2">Bagikan SOP Media Partner untuk kemudahan akses</p>
        </div>

        <div class="row justify-content-center py-4">
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

                        <form action="{{ route('sop.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Title Field -->
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Judul SOP <span class="text-danger">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                       id="title" name="title" value="{{ old('title') }}" 
                                       placeholder="Contoh: SOP Media Partnership 2025" required>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Description Field -->
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Deskripsi (Opsional)</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" 
                                          id="description" name="description" rows="4" 
                                          placeholder="Deskripsikan konten atau tujuan SOP ini...">{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- File Upload Field -->
                            <div class="mb-4">
                                <label for="file" class="form-label fw-bold">File PDF <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="file" class="form-control @error('file') is-invalid @enderror" 
                                           id="file" name="file" accept=".pdf" required>
                                    <span class="input-group-text">PDF only</span>
                                    @error('file')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <small class="text-muted d-block mt-2">
                                    📄 Format: PDF | Ukuran maksimal: 10MB
                                </small>
                            </div>

                            <!-- Form Actions -->
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-primary flex-grow-1">
                                    <i class="bi bi-cloud-upload"></i> Upload SOP
                                </button>
                                <a href="{{ route('sop.index') }}" class="btn btn-secondary">
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
<!-- End SOP Upload Section -->
@endsection
