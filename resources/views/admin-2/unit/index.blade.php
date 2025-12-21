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
                            <a href="{{ route('unit') }}">ukm</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <h4 class="fw-bold mb-2">Halaman Management ukm</h4>
        <p>Atur dan Kelola ukm Kegiatan BEM KM UDINUS</p>

        <a href="{{ route('unit.create') }}" class="btn btn-primary">Buat ukm</a>

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
                    @foreach ($ukms as $ukm)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{ asset('storage/ukm/' . $ukm->image) }}" height="100" alt="">
                        </td>
                        <td>
                            {{ $ukm->judul }}
                        </td>
                        <td>
                            <a href="{{ route('unit.edit', $ukm->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('unit.destroy', $ukm->id) }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" onclick="alert('apakah yakin akan dihapus?')" class="btn btn-danger">Hapus</button>
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