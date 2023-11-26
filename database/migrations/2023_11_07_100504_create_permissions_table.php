<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('name',50)->unique();
            $table->string('keys',50)->nullable();
            $table->string('actions',8)->default('Specific');
            $table->string('status',10)->default('Active');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE permissions AUTO_INCREMENT = 50000;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
