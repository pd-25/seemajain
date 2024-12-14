<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();
        Admin::create([
            // "name" => "Admin Lions Club",
            // "email" => "admin@mail.com",
            // "password" => Hash::make("12345"),
            // "slug" => "admin1-lions-club",

            "name" => "Admin Portal",
            "email" => "admin@mail.com",
            "password" => Hash::make("12345"),
            "slug" => "admin2-portal",
      
        ]);


    }
}
