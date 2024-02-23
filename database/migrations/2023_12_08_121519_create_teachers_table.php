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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('collegeID')->default(0);
            $table->integer('deptID')->default(0);
            $table->string('name');
            $table->string('userName')->unique();
            $table->string('userType')->default('teacher');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('mobile');
            $table->string('qualification')->nullable();
            $table->text('descr')->nullable();
            $table->string('dob')->nullable();
            $table->string('image')->nullable();
            $table->integer('stateID')->default(0);
            $table->string('district')->nullable();
            $table->string('address')->nullable();
            $table->string('pinCode')->nullable();
            $table->string('is_admin')->default(0);
            $table->string('status')->default(1);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
