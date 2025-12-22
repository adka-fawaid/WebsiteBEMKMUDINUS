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
        Schema::create('opsi_jawaban_pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pendaftaran_partnership_id')->constrained('pendaftaran_partnerships')->onDelete('cascade');
            $table->string('opsi_jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opsi_jawaban_pendaftarans');
    }
};
