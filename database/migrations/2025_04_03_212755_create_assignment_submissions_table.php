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
        Schema::create('assignment_submissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assignment_id')->constrained('assignments')->onDelete('cascade');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('enrollment_id')->constrained('enrollments')->onDelete('cascade');

            $table->text('submission_text')->nullable();
            $table->string('file_path')->nullable();
            $table->string('submission_url')->nullable();
            $table->string('repository_url')->nullable();
            $table->date('submitted_at');
            $table->decimal('score',5,2)->nullable();
            $table->text('teacher_feedback')->nullable();
            $table->enum('status',[
                'submitted',
                'graded',
                'returned_for_revision'
            ])->default('submitted');
            $table->foreignId('graded_by')->constrained('teachers')->nullable();
            $table->date('graded_at')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->index('graded_by');
            $table->index('enrollment_id');
            $table->index('assignment_id');
            $table->index('student_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_submissions');
    }
};
