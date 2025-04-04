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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->dateTime('enrollment_date')->nullable();
            $table->enum('enrollment_type', [
                'self_paced',
                'online',
                'offline'
            ]);
            $table->enum('status', [
                'pending',
                'active',
                'completed',
                'dropped'
            ])->default('pending');
            $table->enum('payment_status', [
                'pending',
                'paid',
                'rejected'
            ])->default('pending');
            $table->string('payment_proof')->nullable();
            $table->decimal('completion_percentage', 5, 2)->default(0);
            $table->dateTime('expiry_date')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
