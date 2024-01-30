<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::truncate();
        $teacher = Teacher::create([
            'name' => 'Teacher',
            'username' => 'teacher',
            'password' => Hash::make('teacher@123'),
            'email' => 'teacher@gmail.com',
            'mobile' => '2222222222',
            'image' => '',
            'stateID' => 0,
            'district' => '',
            'address' => '',
            'pinCode' => '',
            'status' => 1,
        ]);
    }
}
