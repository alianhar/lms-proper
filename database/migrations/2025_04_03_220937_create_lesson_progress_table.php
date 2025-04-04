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
        Schema::create('lesson_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enrollment_id')->constrained('enrollments')->onDelete('cascade');
            $table->foreignId('lesson_id')->constrained('lessons')->onDelete('cascade');

            $table->enum('status', [
                'not_started',
                'in_progress',
                'completed'
            ])->default('not_started');
            $table->date('completed_at')->nullable();
            $table->integer('time_spent')->default(0);
            $table->integer('last_positon')->default(0);
            $table->softDeletes();
            $table->timestamps();
            $table->index('enrollment_id');
            $table->index('lesson_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_progress');
    }
};
