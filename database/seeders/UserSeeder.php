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
            [
                'id' => 13,
                'role_id' => 3,
                 'tuition' => 's22017030', 
                 'name' => 'JUAN', 
                 'last_name' => 'MERLIN', 
                 'mother_last_name' =>'PRIETO',
                 'email' => 'juanprieto30@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 14,
                'role_id' => 3,
                 'tuition' => 's22017031', 
                 'name' => 'JUAN', 
                 'last_name' => 'MERLIN', 
                 'mother_last_name' =>'MONTERO',
                 'email' => 'juanmontero31@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 15,
                'role_id' => 3,
                 'tuition' => 's22017032', 
                 'name' => 'JUAN', 
                 'last_name' => 'MERLIN', 
                 'mother_last_name' =>'FRANCISCO',
                 'email' => 'juanfrancisco32@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 16,
                'role_id' => 3,
                 'tuition' => 's22017033', 
                 'name' => 'JUAN', 
                 'last_name' => 'MERLIN', 
                 'mother_last_name' =>'VAZQUEZ',
                 'email' => 'juanvazquez33@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 17,
                'role_id' => 3,
                 'tuition' => 's22017034', 
                 'name' => 'JUAN', 
                 'last_name' => 'MERLIN', 
                 'mother_last_name' =>'LAUREANI',
                 'email' => 'juanlaureani34@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 18,
                'role_id' => 3,
                 'tuition' => 's22017035', 
                 'name' => 'JUAN', 
                 'last_name' => 'MERLIN', 
                 'mother_last_name' =>'ORTIZ',
                 'email' => 'juanortiz35@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 19,
                'role_id' => 3,
                 'tuition' => 's22017036', 
                 'name' => 'JUAN', 
                 'last_name' => 'HERNANDEZ', 
                 'mother_last_name' =>'PRIETO',
                 'email' => 'juanprieto36@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 20,
                'role_id' => 3,
                 'tuition' => 's22017037', 
                 'name' => 'JUAN', 
                 'last_name' => 'HERNANDEZ', 
                 'mother_last_name' =>'MONTERO',
                 'email' => 'juanmontero37@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 21,
                'role_id' => 3,
                 'tuition' => 's22017038', 
                 'name' => 'JUAN', 
                 'last_name' => 'HERNANDEZ', 
                 'mother_last_name' =>'FRANCISCO',
                 'email' => 'juanfrancisco38@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 22,
                'role_id' => 3,
                 'tuition' => 's22017039', 
                 'name' => 'JUAN', 
                 'last_name' => 'HERNANDEZ', 
                 'mother_last_name' =>'VAZQUEZ',
                 'email' => 'juanvazquez39@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 23,
                'role_id' => 3,
                 'tuition' => 's22017040', 
                 'name' => 'JUAN', 
                 'last_name' => 'HERNANDEZ', 
                 'mother_last_name' =>'LAUREANI',
                 'email' => 'juanlaureani40@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 24,
                'role_id' => 3,
                 'tuition' => 's22017041', 
                 'name' => 'JUAN', 
                 'last_name' => 'HERNANDEZ', 
                 'mother_last_name' =>'ORTIZ',
                 'email' => 'juanortiz41@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 25,
                'role_id' => 3,
                 'tuition' => 's22017042', 
                 'name' => 'JUAN', 
                 'last_name' => 'ENOCH', 
                 'mother_last_name' =>'PRIETO',
                 'email' => 'juanprieto42@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 26,
                'role_id' => 3,
                 'tuition' => 's22017043', 
                 'name' => 'JUAN', 
                 'last_name' => 'ENOCH', 
                 'mother_last_name' =>'MONTERO',
                 'email' => 'juanmontero43@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 27,
                'role_id' => 3,
                 'tuition' => 's22017044', 
                 'name' => 'JUAN', 
                 'last_name' => 'ENOCH', 
                 'mother_last_name' =>'FRANCISCO',
                 'email' => 'juanfrancisco44@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 28,
                'role_id' => 3,
                 'tuition' => 's22017045', 
                 'name' => 'JUAN', 
                 'last_name' => 'ENOCH', 
                 'mother_last_name' =>'VAZQUEZ',
                 'email' => 'juanvazquez45@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 29,
                'role_id' => 3,
                 'tuition' => 's22017046', 
                 'name' => 'JUAN', 
                 'last_name' => 'ENOCH', 
                 'mother_last_name' =>'LAUREANI',
                 'email' => 'juanlaureani46@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 30,
                'role_id' => 3,
                 'tuition' => 's22017047', 
                 'name' => 'JUAN', 
                 'last_name' => 'ENOCH', 
                 'mother_last_name' =>'ORTIZ',
                 'email' => 'juanortiz47@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 31,
                'role_id' => 3,
                 'tuition' => 's22017048', 
                 'name' => 'JUAN', 
                 'last_name' => 'FERNANDEZ', 
                 'mother_last_name' =>'PRIETO',
                 'email' => 'juanprieto48@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 32,
                'role_id' => 3,
                 'tuition' => 's22017049', 
                 'name' => 'JUAN', 
                 'last_name' => 'FERNANDEZ', 
                 'mother_last_name' =>'MONTERO',
                 'email' => 'juanmontero49@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 33,
                'role_id' => 3,
                 'tuition' => 's22017050', 
                 'name' => 'JUAN', 
                 'last_name' => 'FERNANDEZ', 
                 'mother_last_name' =>'FRANCISCO',
                 'email' => 'juanfrancisco50@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 34,
                'role_id' => 3,
                 'tuition' => 's22017051', 
                 'name' => 'JUAN', 
                 'last_name' => 'FERNANDEZ', 
                 'mother_last_name' =>'VAZQUEZ',
                 'email' => 'juanvazquez51@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 35,
                'role_id' => 3,
                 'tuition' => 's22017052', 
                 'name' => 'JUAN', 
                 'last_name' => 'FERNANDEZ', 
                 'mother_last_name' =>'LAUREANI',
                 'email' => 'juanlaureani52@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 36,
                'role_id' => 3,
                 'tuition' => 's22017053', 
                 'name' => 'JUAN', 
                 'last_name' => 'FERNANDEZ', 
                 'mother_last_name' =>'ORTIZ',
                 'email' => 'juanortiz53@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 37,
                'role_id' => 3,
                 'tuition' => 's22017054', 
                 'name' => 'JUAN', 
                 'last_name' => 'BARRIOS', 
                 'mother_last_name' =>'PRIETO',
                 'email' => 'juanprieto54@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 38,
                'role_id' => 3,
                 'tuition' => 's22017055', 
                 'name' => 'JUAN', 
                 'last_name' => 'BARRIOS', 
                 'mother_last_name' =>'MONTERO',
                 'email' => 'juanmontero55@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 39,
                'role_id' => 3,
                 'tuition' => 's22017056', 
                 'name' => 'JUAN', 
                 'last_name' => 'BARRIOS', 
                 'mother_last_name' =>'FRANCISCO',
                 'email' => 'juanfrancisco56@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 40,
                'role_id' => 3,
                 'tuition' => 's22017057', 
                 'name' => 'JUAN', 
                 'last_name' => 'BARRIOS', 
                 'mother_last_name' =>'VAZQUEZ',
                 'email' => 'juanvazquez57@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 41,
                'role_id' => 3,
                 'tuition' => 's22017058', 
                 'name' => 'JUAN', 
                 'last_name' => 'BARRIOS', 
                 'mother_last_name' =>'LAUREANI',
                 'email' => 'juanlaureani58@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 42,
                'role_id' => 3,
                 'tuition' => 's22017059', 
                 'name' => 'JUAN', 
                 'last_name' => 'BARRIOS', 
                 'mother_last_name' =>'ORTIZ',
                 'email' => 'juanortiz59@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 43,
                'role_id' => 3,
                 'tuition' => 's22017060', 
                 'name' => 'JUAN', 
                 'last_name' => 'BAUTISTA', 
                 'mother_last_name' =>'PRIETO',
                 'email' => 'juanprieto60@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 44,
                'role_id' => 3,
                 'tuition' => 's22017061', 
                 'name' => 'JUAN', 
                 'last_name' => 'BAUTISTA', 
                 'mother_last_name' =>'MONTERO',
                 'email' => 'juanmontero61@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 45,
                'role_id' => 3,
                 'tuition' => 's22017062', 
                 'name' => 'JUAN', 
                 'last_name' => 'BAUTISTA', 
                 'mother_last_name' =>'FRANCISCO',
                 'email' => 'juanfrancisco62@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                'id' => 46,
                'role_id' => 3,
                 'tuition' => 's22017063', 
                 'name' => 'JUAN', 
                 'last_name' => 'BAUTISTA', 
                 'mother_last_name' =>'VAZQUEZ',
                 'email' => 'juanvazquez63@gmail.com',
                 'password' => Hash::make('12345678'),
                 'university_career'=> null 
                ],
                [
                    'id' => 47,
                    'role_id' => 3,
                    'tuition' => 's22017064',
                    'name' => 'JORGE',
                    'last_name' => 'BARLAU',
                    'mother_last_name' => 'BOTE',
                    'email' => 'kriegsbote3@gmail.com',
                    'password' => Hash::make('12345678'),
                    'university_career'=> null
                ],
            
        ]);
    }
}
