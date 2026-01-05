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
        Schema::create('makna_simbols', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kabinet_id')->constrained('kabinets')->onDelete('cascade');
            $table->string('simbol');
            $table->longText('makna');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('makna_simbols');
    }
};
