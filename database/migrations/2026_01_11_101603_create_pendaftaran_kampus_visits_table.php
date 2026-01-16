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
        Schema::create('pendaftaran_kampus_visits', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_pendaftaran')->unique();
            $table->string('email')->unique();
            $table->string('nama_lengkap');
            $table->string('nama_instansi');
            $table->string('nomor_telepon');
            $table->string('proposal_acara');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran_kampus_visits');
    }
};
