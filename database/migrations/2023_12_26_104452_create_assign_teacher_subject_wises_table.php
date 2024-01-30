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
        Schema::create('assign_teacher_subject_wises', function (Blueprint $table) {
            $table->id();
            $table->integer('collegeID')->default(0);
            $table->integer('teacherID')->default(0);
            $table->integer('courseID')->default(0);
            $table->integer('deptID')->default(0);
            $table->integer('subjectID')->default(0);
            $table->integer('semID')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_teacher_subject_wises');
    }
};
