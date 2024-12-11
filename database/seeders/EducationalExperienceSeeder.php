<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class EducationalExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educational_experiences')->insert([
            [
                'id' => 1
                , 'nrc' => 86345
                ,'name' => 'Redes'
                , 'modality' => 'Escolarizado'
            ],
            [
                'id' => 2
                , 'nrc' => 86346
                ,'name' => 'Introduccion a la Programacion'
                , 'modality' => 'Escolarizado'
            ],
        ]);
    }
}
