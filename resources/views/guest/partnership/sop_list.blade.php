@extends('layouts.layouts')

@section('content')
<!-- SOP List Section -->
<section id="sop-list" style="margin-top: 100px;">
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            SOP Media Partner
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="header-sop text-center" style="margin-top: 50px; margin-bottom: 50px;">
            <h2 class="fw-bold mb-3">SOP Media Partner BEM KM UDINUS</h2>
            <p class="text-muted">Akses dan download SOP Media Partnership untuk kemudahan koordinasi</p>
        </div>

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

        <!-- Upload Button (visible for authenticated users) -->
        @auth
        <div class="mb-4 text-center">
            <a href="{{ route('sop.create') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-cloud-upload"></i> Upload SOP Baru
            </a>
        </div>
        @endauth

        <!-- SOP Files List -->
        <div class="row g-4">
            @forelse ($sopFiles as $sop)
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <!-- Icon & Title -->
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <div class="bg-danger bg-opacity-10 p-3 rounded" style="min-width: 60px;">
                                <i class="bi bi-filetype-pdf text-danger" style="font-size: 2rem;"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="card-title fw-bold mb-1">{{ $sop->title }}</h5>
                                <small class="text-muted d-block">
                                    📅 {{ $sop->created_at->format('d M Y') }}
                                </small>
                            </div>
                        </div>

                        <!-- Description -->
                        @if ($sop->description)
                        <p class="card-text text-secondary mb-3 flex-grow-1">
                            {{ Str::limit($sop->description, 150) }}
                        </p>
                        @endif

                        <!-- Actions -->
                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ route('sop.download', $sop->id) }}" 
                               class="btn btn-primary btn-sm flex-grow-1" 
                               title="Download SOP">
                                <i class="bi bi-download"></i> Download
                            </a>
                            @auth
                            <form action="{{ route('sop.destroy', $sop->id) }}" method="POST" class="flex-grow-1">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm w-100" 
                                        onclick="return confirm('Yakin ingin menghapus file ini?')" 
                                        title="Hapus SOP">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <i class="bi bi-info-circle"></i>
                    <strong>Informasi</strong> - Belum ada SOP yang diupload. 
                    @auth
                    <a href="{{ route('sop.create') }}" class="alert-link">Upload SOP sekarang</a>
                    @endauth
                </div>
            </div>
            @endforelse
        </div>

        <!-- Total Count -->
        @if ($sopFiles->count() > 0)
        <div class="text-center mt-5 text-muted">
            <small>Total SOP: <strong>{{ $sopFiles->count() }} file</strong></small>
        </div>
        @endif

    </div>
</section>
<!-- End SOP List Section -->
@endsection
