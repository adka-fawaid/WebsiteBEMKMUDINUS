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
        Schema::create('program_kerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kategori', ['Rencana Kerja Tahunan', 'Non Rencana Kerja Tahunan', 'Duta Kampus']);
            $table->longText('deskripsi')->nullable();
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->string('foto')->nullable();
            $table->boolean('pendaftaran')->default(false);
            $table->string('link_pendaftaran')->nullable();
            $table->boolean('use_link')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_kerjas');
    }
};
