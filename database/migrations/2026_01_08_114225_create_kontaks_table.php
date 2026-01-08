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
        Schema::create('kontaks', function (Blueprint $table) {
            $table->id();
            $table->string('tipe'); // e.g., 'email', 'phone', 'address'
            $table->string('kontak'); // e.g., the actual email address, phone number, or physical address
            $table->string('nama')->nullable(); // Optional: display name/label
            $table->string('url')->nullable(); // Optional: URL link for the contact
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kontaks');
    }
};
