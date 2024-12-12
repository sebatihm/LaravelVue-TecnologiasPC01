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
            [
                'id' => 3
                ,'student_id' => 11
                , 'group_id' => 6
            ],
            [
                'id' => 4,
                'student_id' => 13,
                'group_id' => 1
              ],
              [
                'id' => 5,
                'student_id' => 13,
                'group_id' => 2
              ],
              [
                'id' => 6,
                'student_id' => 14,
                'group_id' => 3
              ],
              [
                'id' => 7,
                'student_id' => 14,
                'group_id' => 4
              ],
              [
                'id' => 8,
                'student_id' => 15,
                'group_id' => 5
              ],
              [
                'id' => 9,
                'student_id' => 15,
                'group_id' => 6
              ],
              [
                'id' => 10,
                'student_id' => 16,
                'group_id' => 1
              ],
              [
                'id' => 11,
                'student_id' => 16,
                'group_id' => 2
              ],
              [
                'id' => 12,
                'student_id' => 17,
                'group_id' => 3
              ],
              [
                'id' => 13,
                'student_id' => 17,
                'group_id' => 4
              ],
              [
                'id' => 14,
                'student_id' => 18,
                'group_id' => 5
              ],
              [
                'id' => 15,
                'student_id' => 18,
                'group_id' => 6
              ],
              [
                'id' => 16,
                'student_id' => 19,
                'group_id' => 1
              ],
              [
                'id' => 17,
                'student_id' => 19,
                'group_id' => 2
              ],
              [
                'id' => 18,
                'student_id' => 20,
                'group_id' => 3
              ],
              [
                'id' => 19,
                'student_id' => 20,
                'group_id' => 4
              ],
              [
                'id' => 20,
                'student_id' => 21,
                'group_id' => 5
              ],
              [
                'id' => 21,
                'student_id' => 21,
                'group_id' => 6
              ],
              [
                'id' => 22,
                'student_id' => 22,
                'group_id' => 1
              ],
              [
                'id' => 23,
                'student_id' => 22,
                'group_id' => 2
              ],
              [
                'id' => 24,
                'student_id' => 23,
                'group_id' => 3
              ],
              [
                'id' => 25,
                'student_id' => 23,
                'group_id' => 4
              ],
              [
                'id' => 26,
                'student_id' => 24,
                'group_id' => 5
              ],
              [
                'id' => 27,
                'student_id' => 24,
                'group_id' => 6
              ],
              [
                'id' => 28,
                'student_id' => 25,
                'group_id' => 1
              ],
              [
                'id' => 29,
                'student_id' => 25,
                'group_id' => 2
              ],
              [
                'id' => 30,
                'student_id' => 26,
                'group_id' => 3
              ],
              [
                'id' => 31,
                'student_id' => 26,
                'group_id' => 4
              ],
              [
                'id' => 32,
                'student_id' => 27,
                'group_id' => 5
              ],
              [
                'id' => 33,
                'student_id' => 27,
                'group_id' => 6
              ],
              [
                'id' => 34,
                'student_id' => 28,
                'group_id' => 1
              ],
              [
                'id' => 35,
                'student_id' => 28,
                'group_id' => 2
              ],
              [
                'id' => 36,
                'student_id' => 29,
                'group_id' => 3
              ],
              [
                'id' => 37,
                'student_id' => 29,
                'group_id' => 4
              ],
              [
                'id' => 38,
                'student_id' => 30,
                'group_id' => 5
              ],
              [
                'id' => 39,
                'student_id' => 30,
                'group_id' => 6
              ],
              [
                'id' => 40,
                'student_id' => 31,
                'group_id' => 1
              ],
              [
                'id' => 41,
                'student_id' => 31,
                'group_id' => 2
              ],
              [
                'id' => 42,
                'student_id' => 32,
                'group_id' => 3
              ],
              [
                'id' => 43,
                'student_id' => 32,
                'group_id' => 4
              ],
              [
                'id' => 44,
                'student_id' => 33,
                'group_id' => 5
              ],
              [
                'id' => 45,
                'student_id' => 33,
                'group_id' => 6
              ],
              [
                'id' => 46,
                'student_id' => 34,
                'group_id' => 1
              ],
              [
                'id' => 47,
                'student_id' => 34,
                'group_id' => 2
              ],
              [
                'id' => 48,
                'student_id' => 35,
                'group_id' => 3
              ],
              [
                'id' => 49,
                'student_id' => 35,
                'group_id' => 4
              ],
              [
                'id' => 50,
                'student_id' => 36,
                'group_id' => 5
              ],
              [
                'id' => 51,
                'student_id' => 36,
                'group_id' => 6
              ],
              [
                'id' => 52,
                'student_id' => 37,
                'group_id' => 1
              ],
              [
                'id' => 53,
                'student_id' => 37,
                'group_id' => 2
              ],
              [
                'id' => 54,
                'student_id' => 38,
                'group_id' => 3
              ],
              [
                'id' => 55,
                'student_id' => 38,
                'group_id' => 4
              ],
              [
                'id' => 56,
                'student_id' => 39,
                'group_id' => 5
              ],
              [
                'id' => 57,
                'student_id' => 39,
                'group_id' => 6
              ],
              [
                'id' => 58,
                'student_id' => 40,
                'group_id' => 1
              ],
              [
                'id' => 59,
                'student_id' => 40,
                'group_id' => 2
              ],
              [
                'id' => 60,
                'student_id' => 41,
                'group_id' => 3
              ],
              [
                'id' => 61,
                'student_id' => 41,
                'group_id' => 4
              ],
              [
                'id' => 62,
                'student_id' => 42,
                'group_id' => 5
              ],
              [
                'id' => 63,
                'student_id' => 42,
                'group_id' => 6
              ],
              [
                'id' => 64,
                'student_id' => 43,
                'group_id' => 1
              ],
              [
                'id' => 65,
                'student_id' => 43,
                'group_id' => 2
              ],
              [
                'id' => 66,
                'student_id' => 44,
                'group_id' => 3
              ],
              [
                'id' => 67,
                'student_id' => 44,
                'group_id' => 4
              ],
              [
                'id' => 68,
                'student_id' => 45,
                'group_id' => 5
              ],
              [
                'id' => 69,
                'student_id' => 45,
                'group_id' => 6
              ],
              [
                'id' => 70,
                'student_id' => 46,
                'group_id' => 1
              ],
              [
                'id' => 71,
                'student_id' => 46,
                'group_id' => 2
              ]
        ]);
    }
}
