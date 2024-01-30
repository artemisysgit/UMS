<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();
        $admin = Admin::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('admin@123'),
            'email' => 'admin@gmail.com',
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
