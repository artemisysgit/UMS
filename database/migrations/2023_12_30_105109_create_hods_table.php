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
        Schema::create('hods', function (Blueprint $table) {
            $table->id();
            $table->integer('collegeID')->default(0);
            $table->integer('teacherID')->default(0);
            $table->integer('deptID')->default(0);
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
        Schema::dropIfExists('hods');
    }
};
