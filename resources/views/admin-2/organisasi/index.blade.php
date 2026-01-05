@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8 py-5">

        <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="\dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('organisasi') }}">organisasi ormawa</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <h4 class="fw-bold mb-2">Halaman Management organisasi</h4>
        <p>Atur dan Kelola organisasi Kegiatan BEM KM UDINUS</p>

        <a href="{{ route('organisasi.create') }}" class="btn btn-primary">Buat ormawa</a>

        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($ormawas as $ormawa)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{ asset('storage/ormawa/' . $ormawa->image) }}" height="100" alt="">
                        </td>
                        <td>
                            {{ $ormawa->judul }}
                        </td>
                        <td>
                            <a href="{{ route('organisasi.edit', $ormawa->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('organisasi.destroy', $ormawa->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" onclick="alert('apakah yakin akan dihapus?')"
                                    class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection