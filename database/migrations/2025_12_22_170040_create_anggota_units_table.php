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
        Schema::create('anggota_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_organisasi_id')->constrained('unit_organisasis')->onDelete('cascade');
            $table->string('nama');
            $table->string('nim');
            $table->string('program_studi');
            $table->year('angkatan');
            $table->enum('jabatan', [
                'Presiden Mahasiswa',
                'Wakil Presiden Mahasiswa',
                'Sekretaris Jenderal',
                'Kepala',
                'Menteri Koordinator',
                'Menteri',
                'Sekretaris',
                'Ketua Bidang',
                'Staff Biro',
                'Staff Ahli',
                'Eksekutif Muda',
            ]);
            $table->string('foto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_units');
    }
};
