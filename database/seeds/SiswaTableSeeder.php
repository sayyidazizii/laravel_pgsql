<?php

use App\Siswa;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nis'    => '7375',
            'nama'     =>'Sayyid Syafiq ',
            'kelas'  =>'RPLC',
        ]);
        Siswa::create([
            'nis'    => '7376',
            'nama'     =>'Abdul Aziz',
            'kelas'  =>'RPLA',
        ]);
        Siswa::create([
            'nis'    => '7377',
            'nama'     =>'Coba 3',
            'kelas'  =>'RPLA',
        ]);
 
    }
}
