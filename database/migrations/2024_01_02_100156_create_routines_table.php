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
        Schema::create('routines', function (Blueprint $table) {
            $table->id();
            $table->integer('collegeID')->default(0);
            $table->integer('deptID')->default(0);
            $table->integer('teacherID')->default(0);
            $table->integer('semID')->default(0);
            $table->integer('weekID')->default(0);
            $table->integer('timeID')->default(0);
            $table->string('startTime')->nullable();
            $table->string('endTime')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('createdBy')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routines');
    }
};
