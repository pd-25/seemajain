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
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('duration')->nullable();
            $table->string('skill_level')->nullable();
            $table->string('language')->nullable();
            $table->integer('assessments')->default(0);
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->decimal('regular_price', 8, 2)->nullable();
            $table->longText('overview')->nullable();
            $table->longText('curriculum')->nullable();
            $table->longText('instructor')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
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
