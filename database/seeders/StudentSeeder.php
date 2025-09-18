<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            ["nama"=> "nama murid 1", "nis"=> "test", "jurusan_id"=> 3],
            ["nama"=> "nama murid 2", "nis"=> "test", "jurusan_id"=> 2],
            ["nama"=> "nama murid 3", "nis"=> "test", "jurusan_id"=> 1]
        ];

        foreach($students as $murid){
            \App\Models\Student::create($murid);
        }
    }
}
