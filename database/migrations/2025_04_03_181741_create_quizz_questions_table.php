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
        Schema::create('quizz_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quizz_id')->constrained('quizzs')->onDelete('cascade');
            $table->enum('question_type',[
                'multiple_choice',
                'single_choice',
                'true_false',
                'essay',
                'fill_in_blank',
                'matching',
                'coding',
            ])->default('multiple_choice');
            $table->text('question_text')->nullable();
            $table->string('question_image')->nullable();
            $table->longText('code_snippet')->nullable();
            $table->integer('points')->default(1);
            $table->text('explanation')->nullable();
            $table->integer('order_index')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->index('quizz_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizz_questions');
    }
};
