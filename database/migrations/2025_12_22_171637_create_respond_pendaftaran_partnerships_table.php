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
        Schema::create('respond_pendaftaran_partnerships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partnership_id')->constrained('partnerships')->onDelete('cascade');
            $table->string('pertanyaan');
            $table->longText('jawaban');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('respond_pendaftaran_partnerships');
    }
};
