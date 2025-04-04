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
        Schema::create('quizz_student_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('attempt_id')->constrained('quizz_attempts')->onDelete('cascade');
            $table->foreignId('question_id')->constrained('quizz_questions')->onDelete('cascade');
            $table->foreignId('selected_option_id')->constrained('quizz_options')->onDelete('cascade');
            $table->text('essay_answer')->nullable();
            $table->longText('coding_answer')->nullable();
            $table->boolean('is_correct')->nullable();
            $table->decimal('points_earned',5,2)->nullable();
            $table->text('teacher_feedback')->nullable();
            $table->decimal('manual_score',5,2)->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->index('attempt_id');
            $table->index('question_id');
            $table->index('selected_option_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizz_student_answers');
    }
};
