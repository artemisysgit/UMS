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
            $table->integer('collegeID')->default(0);
            $table->integer('courseID')->default(0);
            $table->string('title');
            $table->text('short_descr')->nullable();
            $table->text('descr')->nullable();
            $table->string('startDate');
            $table->tinyInteger('course_type');
            $table->tinyInteger('status')->default(1);
            $table->string('image')->default('null');
            $table->integer('createdBy');
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
