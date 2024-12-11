<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('groups')->insert([
            [
                'id' => 1
                , 'educational_experience_id' => 2
                ,'teacher_id' => 8
                , 'name' => 'INTRO A LA PROG 2024'
                , 'shift' => 'Vespertino'
                , 'period' => '2021-2022'
            ],
            [
                'id' => 2
                , 'educational_experience_id' => 1
                ,'teacher_id' => 7
                , 'name' => 'REDES 2025'
                , 'shift' => 'Matutino'
                , 'period' => '2024-2025'
            ],
        ]);
    }
}
