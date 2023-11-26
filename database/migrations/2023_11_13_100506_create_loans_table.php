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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('worker_id');
            $table->decimal('amount', 10, 2);
            $table->date('application_date');
            $table->date('approval_date')->nullable();
            $table->string('status')->default('pending');
            $table->unsignedInteger('installment_count')->default(0);
            $table->decimal('interest_rate', 5, 2)->default(0.00);
            $table->unsignedInteger('repayment_term_months')->default(0);
            $table->decimal('monthly_payment', 10, 2)->default(0.00);
            $table->text('purpose')->nullable();

            // Additional loan application details
            $table->string('employment_type');
            $table->decimal('monthly_income', 10, 2);
            $table->string('employment_duration');
            $table->string('credit_score')->nullable();
            $table->text('additional_notes')->nullable();

            $table->timestamps();

            //foreign key relationship
            $table->foreign('worker_id')->references('id')->on('workers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
