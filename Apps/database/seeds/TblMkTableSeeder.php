<?php

use Illuminate\Database\Seeder;

class TblMkTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_mk')->delete();
        
        \DB::table('tbl_mk')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kd_mk' => '256955',
                'nama_mk' => 'SISTEM BASIS DATA',
                'sks' => 2,
                'semester' => 2,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            1 => 
            array (
                'id' => 2,
                'kd_mk' => '24746',
                'nama_mk' => 'PEMROGRAMAN DESKTOP',
                'sks' => 2,
                'semester' => 4,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            2 => 
            array (
                'id' => 3,
                'kd_mk' => '947013',
                'nama_mk' => 'ALGORITMA DAN PEMROGRAMAN 1',
                'sks' => 3,
                'semester' => 1,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            3 => 
            array (
                'id' => 4,
                'kd_mk' => '965719',
                'nama_mk' => 'JARINGAN NIRKABEL',
                'sks' => 2,
                'semester' => 4,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            4 => 
            array (
                'id' => 5,
                'kd_mk' => '688046',
                'nama_mk' => 'STRUKTUR DATA',
                'sks' => 2,
                'semester' => 3,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            5 => 
            array (
                'id' => 6,
                'kd_mk' => '20719',
                'nama_mk' => 'KONSEP CLOUD COMPUTING',
                'sks' => 2,
                'semester' => 4,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            6 => 
            array (
                'id' => 7,
                'kd_mk' => '639553',
                'nama_mk' => 'JARINGAN KOMPUTER',
                'sks' => 2,
                'semester' => 2,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            7 => 
            array (
                'id' => 9,
                'kd_mk' => '851372',
                'nama_mk' => 'INTERAKSI MANUSIA DAN KOMPUTER',
                'sks' => 2,
                'semester' => 5,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            8 => 
            array (
                'id' => 10,
                'kd_mk' => '253958',
                'nama_mk' => 'PEMROGRAMAN BERORIENTASI OBJEK',
                'sks' => 2,
                'semester' => 5,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            9 => 
            array (
                'id' => 11,
                'kd_mk' => '263784',
                'nama_mk' => 'LOGIKA INFORMATIKA',
                'sks' => 2,
                'semester' => 1,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            10 => 
            array (
                'id' => 12,
                'kd_mk' => '679018',
                'nama_mk' => 'TEKNOLOGI CLOUD COMPUTING',
                'sks' => 2,
                'semester' => 5,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            11 => 
            array (
                'id' => 13,
                'kd_mk' => '672812',
                'nama_mk' => 'SISTEM OPERASI',
                'sks' => 2,
                'semester' => 2,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            12 => 
            array (
                'id' => 14,
                'kd_mk' => '83863',
                'nama_mk' => 'ALGORITMA DAN PEMROGRAMAN 2',
                'sks' => 3,
                'semester' => 2,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            13 => 
            array (
                'id' => 15,
                'kd_mk' => '168802',
                'nama_mk' => 'ANALISIS DESAIN TERSTRUKTUR',
                'sks' => 2,
                'semester' => 3,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            14 => 
            array (
                'id' => 16,
                'kd_mk' => '583058',
                'nama_mk' => 'ANALISIS DESAIN BERORIENTASI OBJEK',
                'sks' => 2,
                'semester' => 3,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            15 => 
            array (
                'id' => 17,
                'kd_mk' => '994164',
                'nama_mk' => 'SISTEM DIGITAL',
                'sks' => 2,
                'semester' => 1,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            16 => 
            array (
                'id' => 18,
                'kd_mk' => '371786',
                'nama_mk' => 'SISTEM INFORMASI MANAJEMEN DAN BISNIS',
                'sks' => 2,
                'semester' => 1,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            17 => 
            array (
                'id' => 19,
                'kd_mk' => '33499',
                'nama_mk' => 'TEKNOLOGI MOBILE',
                'sks' => 2,
                'semester' => 5,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-10 08:30:09',
            ),
            18 => 
            array (
                'id' => 20,
                'kd_mk' => '555425',
                'nama_mk' => 'KECERDASAN BUATAN',
                'sks' => 2,
                'semester' => 4,
                'prasyarat_mk' => NULL,
                'jurusan' => 'Teknik Informatika',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-10 08:30:09',
            ),
        ));
        
        
    }
}
