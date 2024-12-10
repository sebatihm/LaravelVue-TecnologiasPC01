<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'id' => 1,
                'name' => 'ADMINISTRADOR',
                'description' => NULL,
            ],
            [
                'id' => 2,
                'name' => 'MAESTRO',
                'description' => NULL,
            ],
            [
                'id' => 3,
                'name' => 'ALUMNO',
                'description' => NULL,
            ],
        ]);
    }
}
