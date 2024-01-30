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
        Schema::create('college_admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('userName')->unique()->nullable();
            $table->string('userType')->default('admin');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->integer('collegeID')->default(0);
            $table->string('mobile');
            $table->string('dob')->nullable();
            $table->string('image')->nullable();
            $table->string('state')->nullable();
            $table->integer('countryID')->default(0);
            $table->string('district')->nullable();
            $table->string('address')->nullable();
            $table->string('pinCode')->nullable();
            $table->string('is_admin')->default(1);
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
        Schema::dropIfExists('college_admins');
    }
};
