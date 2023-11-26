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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->unique();
            $table->string('initials', 15)->unique();
            $table->string('location');
            $table->string('type',50)->nullable();
            $table->string('email',150)->unique();
            $table->string('tel',10)->nullable();
            $table->string('phone',10)->unique();
            $table->string('status',10)->default('Active');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE banks AUTO_INCREMENT = 10000');
    }

    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
