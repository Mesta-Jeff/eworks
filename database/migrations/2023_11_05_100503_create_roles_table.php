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
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name',30)->unique();
            $table->text('description')->nullable();
            $table->string('open',3)->default('Yes');
            $table->string('status',10)->default('Active');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE roles AUTO_INCREMENT = 20000;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
