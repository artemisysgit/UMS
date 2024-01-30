<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\college\CollegeAdmin;
use Illuminate\Support\Facades\Hash;

class CollegeAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CollegeAdmin::truncate();
        $admin = CollegeAdmin::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin@123'),
            'email' => 'admin@gmail.com',
            'collegeID' => 1,
            'mobile' => '0909778899',
            'dob' => '',
            'image' => '',
            'state' => '',
            'countryID' => 0,
            'district' => '',
            'address' => '',
            'pinCode' => '',
            'status' => 1,
        ]);
    }
}
