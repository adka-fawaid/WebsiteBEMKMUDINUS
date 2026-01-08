@extends('layouts.layouts')

@section('content')
<!-- partnership -->
<section id="partnership" style="margin-top: 100px;">
    <div class="container py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="/partnership">Partnership</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <div class="header-partnership text-center" style="margin-top: 50px; margin-bottom: 50px;">
            <h2 class="fw-bold">Partnership BEM KM UDINUS</h2>
            <p class="text-muted mt-2">Kerjasama dengan berbagai pihak untuk program dan kegiatan BEM</p>
        </div>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <!-- Add Partnership Button (visible for authenticated users) -->
        @auth
        <div class="mb-4 text-center">
            <a href="{{ route('partnership.create') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-plus-circle"></i> Tambah Partnership Baru
            </a>
        </div>
        @endauth

        <div class="row g-4 py-4">

            @forelse ($partnerships as $item)
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body d-flex flex-column">
                        <!-- Title & Status -->
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <h5 class="card-title fw-bold mb-1">{{ $item->nama }}</h5>
                                <small class="text-muted d-block">{{ $item->kategoriPartnership->nama ?? 'N/A' }}</small>
                            </div>
                            @if ($item->status === 'approved')
                            <span class="badge bg-success">Approved</span>
                            @elseif ($item->status === 'pending')
                            <span class="badge bg-warning">Pending</span>
                            @else
                            <span class="badge bg-danger">Rejected</span>
                            @endif
                        </div>

                        <!-- Description -->
                        @if ($item->deskripsi)
                        <p class="card-text text-secondary mb-3 flex-grow-1">
                            {{ Str::limit($item->deskripsi, 150) }}
                        </p>
                        @endif

                        <!-- Actions -->
                        <div class="d-flex gap-2 mt-3 flex-wrap">
                            @if ($item->link)
                            <a href="{{ $item->link }}" target="_blank" class="btn btn-outline-primary btn-sm" 
                               title="Kunjungi website">
                                <i class="bi bi-globe"></i> Website
                            </a>
                            @endif

                            @if ($item->pdf_file)
                            <a href="{{ route('partnership.downloadPdf', $item->id) }}" class="btn btn-outline-danger btn-sm" 
                               title="Download PDF">
                                <i class="bi bi-download"></i> PDF
                            </a>
                            @endif

                            @auth
                            <a href="{{ route('partnership.edit', $item->id) }}" class="btn btn-outline-warning btn-sm" 
                               title="Edit partnership">
                                <i class="bi bi-pencil"></i> Edit
                            </a>

                            <form action="{{ route('partnership.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm" 
                                        onclick="return confirm('Yakin ingin menghapus partnership ini?')" 
                                        title="Hapus partnership">
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
                    <strong>Informasi</strong> - Belum ada partnership yang diapprove. 
                    @auth
                    <a href="{{ route('partnership.create') }}" class="alert-link">Tambah partnership sekarang</a>
                    @endauth
                </div>
            </div>
            @endforelse

        </div>

    </div>

</section>
<!-- partnership -->
@endsection
