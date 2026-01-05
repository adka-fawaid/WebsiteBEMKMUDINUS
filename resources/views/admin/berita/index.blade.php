HEAD
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
                            <a href="{{ route('berita') }}">Berita</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <h4 class="fw-bold mb-2">Halaman Management Berita</h4>
        <p>Atur dan Kelola Berita BEM KM UDINUS</p>

        <a href="{{ route('berita.create') }}" class="btn btn-primary">Buat Berita</a>

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
                    @foreach ($artikels as $artikel)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>
                            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" height="100" alt="">
                        </td>
                        <td>
                            {{ $artikel->judul }}
                        </td>
                        <td>
                            <a href="{{ route('berita.edit', $artikel->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('berita.destroy', $artikel->id) }}" method="POST" class="d-inline">
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

<x-app-layout>
    <!-- Dashboard Content -->
    <main class="ml-0 md:ml-64 peer-checked:md:ml-0 transition-all duration-300">
        <section class="pt-24 px-8 pb-10 bg-[#e8eaf0] min-h-screen">
            <div class="max-w-7xl mx-auto px-3">
                <!-- Heading dan Breadcrumb -->
                <div class="mb-6">
                    <nav class="text-sm text-gray-500">
                        <ol class="list-reset flex items-center space-x-2">
                            <li><a href="{{ route('admin.dashboard') }}" class="hover:underline text-blue-600">Admin</a>
                            </li>
                            <li><span class="text-blue-400">></span></li>
                            <li class="text-blue-700 font-semibold">Berita</li>
                        </ol>
                        <h1 class="text-3xl font-bold text-gray-800 mt-2">Kelola Berita</h1>
                    </nav>
                </div>
            </div>
        </section>
    </main>

</x-app-layout>
aecc797f54fe021064f53fb6fbda34cff91c98f9
