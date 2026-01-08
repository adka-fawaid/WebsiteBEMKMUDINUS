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
        if (!Schema::hasTable('partnerships')) {
            Schema::create('partnerships', function (Blueprint $table) {
                $table->id();
                $table->foreignId('kategori_partnership_id')->constrained('kategori_partnerships')->onDelete('cascade');
                $table->string('nama');
                $table->longText('deskripsi')->nullable();
                $table->string('link')->nullable();
                $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partnerships');
    }
};
