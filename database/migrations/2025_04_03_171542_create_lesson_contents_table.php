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
        Schema::create('lesson_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id')->constrained('lessons')->onDelete('cascade');
            $table->longText('content_text');
            $table->longText('content_html')->nullable();
            $table->enum('media_type', [
                'pdf',
                'video',
                'ppt',
                'image',
                'audio',
                'other'
            ]);
            $table->string('thumbnail')->nullable();
            $table->string('file_path')->nullable();
            $table->integer('duration_seconds')->nullable();
            $table->string('external_url')->nullable();
            $table->enum('provider',[
                'youtube',
                'local',
                'google_slides',
                'other'
            ])->default('local');
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
        Schema::dropIfExists('lesson_contents');
    }
};
