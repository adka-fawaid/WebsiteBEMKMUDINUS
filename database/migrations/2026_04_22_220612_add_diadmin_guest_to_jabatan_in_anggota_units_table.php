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
        DB::statement("ALTER TABLE anggota_units MODIFY COLUMN jabatan ENUM('Presiden Mahasiswa', 'Wakil Presiden Mahasiswa', 'Sekretaris Jenderal', 'Kepala', 'Menteri Koordinator', 'Menteri', 'Sekretaris', 'Ketua Bidang', 'Staff Biro', 'diadmin', 'guest', 'Staff Ahli', 'Eksekutif Muda')");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('anggota_units', function (Blueprint $table) {
            //
        });
    }
};
