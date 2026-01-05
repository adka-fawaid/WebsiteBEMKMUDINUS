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
        Schema::create('referensi_kajians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('berita_kajian_id')->constrained('berita_kajians')->onDelete('cascade');
            $table->string('judul');
            $table->string('link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('referensi_kajians');
    }
};
