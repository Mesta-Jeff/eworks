<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('optional_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id');
            
            // Educational Background
            $table->string('education_level')->nullable();
            $table->string('school')->nullable();
            $table->string('location')->nullable();
            $table->string('certification')->nullable();

            // Driver's License Details
            $table->string('driver_license_name')->nullable();
            $table->string('driver_license_number')->nullable();
            $table->date('driver_license_expire_date')->nullable();
            $table->string('driver_license_class')->nullable();
            $table->string('driver_license_type')->nullable();

            // Medical Information
            $table->string('health_conditions')->nullable();
            $table->string('allergies')->nullable();
            $table->timestamps();

            $table->foreign('worker_id')->references('id')->on('workers')->cascadeOnUpdate()->onDelete('cascade')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('optional_information');
    }

};
