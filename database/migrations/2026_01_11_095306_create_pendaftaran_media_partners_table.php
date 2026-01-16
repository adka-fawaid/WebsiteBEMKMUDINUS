<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftaran_media_partners', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pendaftaran')->unique();
            $table->string('email')->unique();
            $table->string('nama_lengkap');
            $table->string('nama_instansi');
            $table->string('nomor_telepon');
            $table->string('nama_acara');
            $table->text('deskripsi_acara');
            $table->string('proposal_acara');
            $table->string('poster_acara');
            $table->enum('jenis_paket', ['Paket 1', 'Paket 2']);
            $table->string('bukti_follow');
            $table->string('akun_tag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_media_partners');
    }
};
