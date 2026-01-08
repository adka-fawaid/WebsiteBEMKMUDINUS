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
        Schema::table('partnerships', function (Blueprint $table) {
            // Check if column doesn't exist before adding
            if (Schema::hasColumn('partnerships', 'status')) {
                // Column already exists, skip
                return;
            }
            
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending')->after('link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partnerships', function (Blueprint $table) {
            if (Schema::hasColumn('partnerships', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
};
