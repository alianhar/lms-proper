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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained('lessons')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->date('deadline_date')->nullable();
            // $table->date('')->nullable();
            $table->integer('max_score')->default(100);
            $table->integer('passing_score')->default(70);
            $table->string('attachment_path')->nullable();
            $table->enum('submission_type',[
                'text',
                'file',
                'url',
                'repository',
            ]);
            $table->timestamps();
            $table->softDeletes();
            $table->index('lesson_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
