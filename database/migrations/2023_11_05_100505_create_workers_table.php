<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('first_name',50);
            $table->string('last_name',150);
            $table->string('initials', 5)->nullable();
            $table->string('nickname', 15)->nullable();
            $table->string('gender',10);
            $table->string('marital_status',10);
            $table->string('religion',20);
            $table->string('blood',5);
            $table->unsignedBigInteger('nationality')->nullable();
            $table->unsignedBigInteger('region_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('hometown')->nullable();
            $table->string('ethnicity',50);
            $table->string('languages');
            $table->date('date_of_birth');
            $table->unsignedBigInteger('country_of_birth')->nullable();
            $table->unsignedBigInteger('region_of_birth')->nullable();
            $table->unsignedBigInteger('district_of_birth')->nullable();
            $table->unsignedBigInteger('place_of_birth')->nullable();
            // Bank Details
            $table->unsignedBigInteger('bank_id')->nullable();
            $table->string('account_number',16)->unique()->nullable();
            $table->string('ssnit',16)->unique();
            // Contact Details
            $table->string('phone',10)->unique()->nullable();
            $table->string('tel',10)->nullable();
            $table->string('email',150)->unique()->nullable();
            // Address Details
            $table->unsignedBigInteger('current_district')->nullable();
            $table->unsignedBigInteger('current_region')->nullable();
            $table->string('landmark')->nullable();
            $table->string('gps',15)->nullable();
            // Emergency Contact
            $table->string('emergency_name',150)->nullable();
            $table->string('emergency_address')->nullable();
            $table->string('emergency_phone',10)->nullable();
            $table->string('emergency_relationship',15)->nullable();
            $table->unsignedBigInteger('role_id')->nullable();
            $table->string('designation',25)->nullable();
            $table->string('national_identities',50)->nullable();
            $table->string('id_numbers ',50)->nullable();
            $table->binary('picture')->nullable();
            $table->string('status',10)->default('Active');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade')->nullable();
            $table->foreign('current_district')->references('id')->on('districts')->onDelete('cascade')->nullable();
            $table->foreign('current_region')->references('id')->on('regions')->onDelete('cascade')->nullable();
            $table->foreign('place_of_birth')->references('id')->on('towns')->onDelete('cascade')->nullable();
            $table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade')->nullable();
            $table->foreign('district_of_birth')->references('id')->on('districts')->onDelete('cascade')->nullable();
            $table->foreign('country_of_birth')->references('id')->on('countries')->onDelete('cascade')->nullable();
            $table->foreign('region_of_birth')->references('id')->on('regions')->onDelete('cascade')->nullable();
            $table->foreign('hometown')->references('id')->on('towns')->onDelete('cascade')->nullable();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade')->nullable();
            $table->foreign('region_id')->references('id')->on('regions')->onDelete('cascade')->nullable();
            $table->foreign('nationality')->references('id')->on('countries')->onDelete('cascade')->nullable();
        });

        DB::statement('ALTER TABLE workers AUTO_INCREMENT = 82126000;');
    }

    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};

