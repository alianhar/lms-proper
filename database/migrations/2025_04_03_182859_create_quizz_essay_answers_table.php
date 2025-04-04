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
        Schema::create('quizz_essay_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('quizz_questions')->onDelete('cascade');
            $table->text('model_answer');
            $table->text('keywords');
            $table->timestamps();
            $table->softDeletes();
            $table->index('question_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizz_essay_answers');
    }
};
