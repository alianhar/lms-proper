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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('class_type_id')->constrained('class_types')->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('capacity')->default(0);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status',[
                'upcoming',
                'active',
                'completed'
            ])->default('upcoming');
            $table->timestamps();
            $table->softDeletes();
            $table->index('course_id');
            $table->index('class_type_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
