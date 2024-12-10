<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'role_id' => 1,
                'tuition' => 'S22017009',
                'name' => 'HENRY ENOCH',
                'last_name' => 'FRANCISCO',
                'mother_last_name' => 'VÁZQUEZ',
                'email' => 'vazquezhenry62@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 2,
                'role_id' => 1,
                'tuition' => 'S22017027',
                'name' => 'ANDRES EMILIO',
                'last_name' => 'JASSO',
                'mother_last_name' => 'LOPEZ',
                'email' => 'emiliogay@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
        ]);
    }
}
