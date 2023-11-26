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
        Schema::create('towns', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->unique();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->timestamps();

            $table->foreign('district_id')->references('id')->on('districts')->cascadeOnUpdate()->onDelete('cascade')->nullable();
        });

        DB::statement('ALTER TABLE towns AUTO_INCREMENT = 4000;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('towns');
    }
};
