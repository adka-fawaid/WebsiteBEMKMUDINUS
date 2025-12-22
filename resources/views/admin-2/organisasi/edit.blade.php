@extends('layouts.layouts')

@section('content')
<section style="margin-top: 100px" class="py-5">
    <div class="container col-xxl-8 py-5">
        <!-- Navigasi -->
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
                        <li class="breadcrumb-item">
                            <a href="">Edit ormawa</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </nav>

        <h4 class="fw-bold mb-2">Halaman Edit organisasi</h4>

        <form action="{{ route('organisasi.update', $ormawa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label for="">Masukkan Judul Kegiatan</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                    value="{{ old('judul', $ormawa->judul) }}">

                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="form-group mb-4">
                <label for="">Pilih Foto Kegiatan</label>
                <input type="hidden" name="old_image" value="{{ $ormawa->image }}">
                <div><img src="{{ asset('storage/ormawa/' . $ormawa->image) }}" class="col-lg-4" alt=""></div>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <div class="form-group mb-4">
                <label for="">ormawa ormawa</label>'
                <textarea name="desc" id="summernote">
                    {!! $ormawa->desc !!}
                </textarea>

                @error('desc')
                <div class="text-danger">
                    {{ $message }}
                </div>
                @enderror

            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>

    </div>
</section>
@endsection