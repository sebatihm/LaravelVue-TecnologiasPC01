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
            [
                'id' => 3,
                'role_id' => 1,
                'tuition' => 'S22017007',
                'name' => 'SEBASTIAN DE JESUS',
                'last_name' => 'HERNANDEZ',
                'mother_last_name' => 'MONTERO',
                'email' => 'sebasmon020@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 4,
                'role_id' => 1,
                'tuition' => 'S22017041',
                'name' => 'ROBERTO',
                'last_name' => 'ZUÑIGA',
                'mother_last_name' => 'ROMAN',
                'email' => 'XxzhrineZxX@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 5,
                'role_id' => 2,
                'tuition' => 't22140331',
                'name' => 'MAGDIEL',
                'last_name' => 'MERCADO',
                'mother_last_name' => 'CARRILO',
                'email' => 'hectorivanalvarado@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 6,
                'role_id' => 2,
                'tuition' => 't22140332',
                'name' => 'JAVIER',
                'last_name' => 'PINO',
                'mother_last_name' => 'HERRERA',
                'email' => 'jpino@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 7,
                'role_id' => 2,
                'tuition' => 't22140333',
                'name' => 'IRWING',
                'last_name' => 'IBAÑEZ',
                'mother_last_name' => 'CASTILLO',
                'email' => 'iribañez@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 8,
                'role_id' => 2,
                'tuition' => 't22140334',
                'name' => 'JOSE',
                'last_name' => 'VERGARA',
                'mother_last_name' => 'CAMACHO',
                'email' => 'jvergara@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 9,
                'role_id' => 2,
                'tuition' => 't22140335',
                'name' => 'LUIS',
                'last_name' => 'MORALES',
                'mother_last_name' => 'CARRILO',
                'email' => 'luismorales04@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 10,
                'role_id' => 2,
                'tuition' => 't22140336',
                'name' => 'TILIN',
                'last_name' => 'CIRO',
                'mother_last_name' => 'INSANO',
                'email' => 'autodidacta@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 11,
                'role_id' => 3,
                'tuition' => 's22017043',
                'name' => 'ALEXIS',
                'last_name' => 'NAVA',
                'mother_last_name' => 'MOYA',
                'email' => 'mediocre@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],
            [
                'id' => 12,
                'role_id' => 3,
                'tuition' => 's22017010',
                'name' => 'RICARDO',
                'last_name' => 'LANDA',
                'mother_last_name' => 'SOLANO',
                'email' => 'mediocrSS@gmail.com',
                'password' => Hash::make('12345678'),
                'university_career'=> null
            ],


        ]);
    }
}
