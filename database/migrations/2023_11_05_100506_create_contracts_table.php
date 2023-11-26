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
        Schema::create('contracts', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedBigInteger('worker_id')->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->string('tag_number',10)->nullable();
            $table->date('contract_starts')->nullable();
            $table->date('contract_ends')->nullable();
            $table->string('contract_type',25)->nullable();
            $table->integer('track');
            $table->string('administer',50)->default('HR');
            $table->string('status',10)->default('Active');
            $table->timestamps();

            $table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade')->nullable();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
