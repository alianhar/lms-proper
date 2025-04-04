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
        Schema::create('quizz_attempts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quizz_id')->constrained('quizzs')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('enrollment_id')->constrained('enrollments')->onDelete('cascade');
            $table->decimal('score',5,2)->default(0);
            $table->enum('status',[
                'in_progress',
                'completed',
                'timed_out'
            ])->default('in_progress');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->integer('time_spend_seconds')->nullable();
            $table->boolean('is_passed')->default(false);
            $table->softDeletes();
            $table->timestamps();
            $table->index('quizz_id');
            $table->index('enrollment_id');
            $table->index('student_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizz_attempts');
    }
};
