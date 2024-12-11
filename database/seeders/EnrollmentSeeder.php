<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enrollments')->insert([
            [
                'id' => 1
                ,'student_id' => 11
                , 'group_id' => 2
            ],
            [
                'id' => 2
                ,'student_id' => 12
                , 'group_id' => 1
            ],
        ]);
    }
}
