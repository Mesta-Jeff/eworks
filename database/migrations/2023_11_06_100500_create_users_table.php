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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('worker_id')->unique();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('worker_id') ->references('id')->on('workers')->onDelete('cascade')->cascadeOnUpdate();
        });

        DB::statement('ALTER TABLE users AUTO_INCREMENT = 62100;');
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['worker_id']);
        });

        Schema::dropIfExists('users');
    }
};
