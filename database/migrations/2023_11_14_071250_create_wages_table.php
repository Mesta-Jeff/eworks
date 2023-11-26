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
        Schema::create('wages', function (Blueprint $table) {
            $table->id();
            $table->decimal('casual_daily', 10,2)->default(0.00);
            $table->decimal('casual_holiday', 10, 2)->default(0.00);
            $table->decimal('contract_daily', 10,2)->default(0.00);
            $table->decimal('contract_holiday', 10, 2)->default(0.00);
            $table->decimal('permanent_daily', 10, 2)->default(0.00);
            $table->decimal('permanent_holiday', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wages');
    }
};
