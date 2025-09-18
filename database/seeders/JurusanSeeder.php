<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusans = [
            ["namajurusan"=> "teknik informatika", "deskripsi"=> "test"],
            ["namajurusan"=> "teknik besi", "deskripsi"=> "test"],
            ["namajurusan"=> "teknik peleburan besi", "deskripsi"=> "test"],
        ];

        foreach($jurusans as $jurusan){
            \App\Models\Jurusan::create($jurusan);
        }
    }
}
