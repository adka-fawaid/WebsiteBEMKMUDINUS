@extends('layouts.layouts')

@section('content')
<section class="vh-100" style="background-color: #2779e2;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9">

        <h1 class="text-white mb-4">Form Pendaftaran</h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Nama Lengkap</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Email Mahasiswa</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="email" class="form-control form-control-lg" placeholder="example@example.com" />

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Alasan Mengikuti LKMM-TM</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" placeholder="Deskripsikan Secara Lengkap dan Dengan Pemahaman yang Masuk Akal"></textarea>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Upload CV</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                <div class="small text-muted mt-2">Upload Sertifikat LKMM-TD atau File Lain Yang Relevan. Max file
                  size 50 MB</div>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Submit</button>
            </div>

          </div>
        </div>

      </div>
    </div>
    <div id="responseMessage" class="mt-3"></div>
  </div>
</section>
<script>
        $(document).ready(function() {
            $('#registrationForm').on('submit', function(e) {
                e.preventDefault();

                var formData = {
                    "nama": $('#nama').val(),
                    "email": $('#email').val(),
                    "telepon": $('#telepon').val(),
                    "alamat": $('#alamat').val()
                };

                $.ajax({
                    url: 'https://script.google.com/macros/s/AKfycbwi789iU5PZOUzJbcmF-JxZyy-hRTg8HwK5yN6gIZsNMKxrCChJScskyjh923u_XCTB/exec', // Ganti dengan URL Web App Anda
                    type: 'POST',
                    contentType: 'application/json',
                    data: JSON.stringify(formData),
                    success: function(response) {
                        $('#responseMessage').text('Pendaftaran berhasil!');
                        $('#registrationForm')[0].reset();
                    },
                    error: function() {
                        $('#responseMessage').text('Terjadi kesalahan. Silakan coba lagi.');
                    }
                });
            });
        });
    </script>
@endsection