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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('judul');
            $table->enum('kategori', ['Berita Acara', 'Berita Kajian', 'Press Release', 'Informasi', 'Lain-lain']);
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->string('dokumen')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
