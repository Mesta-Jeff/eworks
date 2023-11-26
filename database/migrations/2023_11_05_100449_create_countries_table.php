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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name',70)->unique();
            $table->string('code',5)->unique();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE countries AUTO_INCREMENT = 1000');
    }

    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
