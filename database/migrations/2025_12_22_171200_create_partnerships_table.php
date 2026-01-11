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
                $table->enum('kategori', ['Media Partner', 'Sponsorship', 'Kolaborasi', 'Kampus Visit', 'Delegasi']);
                $table->longText('deskripsi')->nullable();
                $table->string('link_pendaftaran')->nullable();
                $table->boolean('use_link')->default(false);
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
