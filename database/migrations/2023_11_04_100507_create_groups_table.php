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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->integer('size');
            $table->string('status',10)->default('Active');
            $table->timestamps();
        });

        // DB::statement('ALTER TABLE groups AUTO_INCREMENT = 1000');
    }

    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
