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
        Schema::create('offers', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('title'); // Offer title
            $table->text('description'); // Offer description
            $table->json('course_ids'); // JSON field for storing array of course IDs
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the offer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
