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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('teachers')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('course_categories')->onDelete('cascade');

            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->decimal('price', 10, 2);
            $table->enum('difficulty_level', [
                'beginner',
                'intermediate',
                'advanced'
            ])->default('beginner');
            $table->boolean('is_published')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->text('prerequisites')->nullable();
            $table->text('what_you_will_learn')->nullable();
            $table->integer('duration_in_minutes')->default(0);
            $table->enum('course_type', [
                'self_paced',
                'online',
                'offline'
            ]);
            $table->integer('access_duration')->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->index('category_id');
            $table->index('teacher_id');
            $table->index(['is_published', 'is_featured']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
