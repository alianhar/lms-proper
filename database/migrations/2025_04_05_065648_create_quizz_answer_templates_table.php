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
        Schema::create('quizz_answer_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('quizz_questions')->onDelete('cascade');
            $table->enum('answer_type', [
                'essay',
                'coding',
                'matching',
                'fill_in_blank'
            ]);

            $table->text('model_answer')->nullable();
            $table->text('keywords')->nullable();

            $table->longText('expected_output')->nullable();
            $table->longText('solution_code')->nullable();
            $table->string('programming_language')->nullable();

            $table->text('grading_notes')->nullable();
            $table->decimal('partial_credit_threshold', 5, 2)->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->index('question_id');
            $table->index('answer_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizz_answer_templates');
    }
};
