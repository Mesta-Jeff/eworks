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
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->unique();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->timestamps();

            $table->foreign('region_id')->references('id')->on('regions')->cascadeOnUpdate()->onDelete('cascade')->nullable();
        });

        DB::statement('ALTER TABLE districts AUTO_INCREMENT = 3000');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};
