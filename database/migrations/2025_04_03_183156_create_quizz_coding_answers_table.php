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
        Schema::create('quizz_coding_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('quizz_questions')->onDelete('cascade');
            $table->longText('expected_output')->nullable();
            $table->longText('solution_code')->nullable();
            $table->string('programming_language');
            $table->softDeletes();
            $table->timestamps();
            $table->index('question_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizz_coding_answers');
    }
};
