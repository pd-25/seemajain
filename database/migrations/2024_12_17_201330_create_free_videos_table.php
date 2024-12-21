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
        Schema::create('free_videos', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title'); // Video title
            $table->string('youtube_link'); // YouTube link
            $table->string('type'); // Video type
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_videos');
    }
};
