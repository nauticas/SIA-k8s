<?php

use Illuminate\Database\Seeder;

class TblRuangTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_ruang')->delete();
        
        \DB::table('tbl_ruang')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_ruang' => 'S.2.1',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            1 => 
            array (
                'id' => 2,
                'nama_ruang' => 'S.2.2',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            2 => 
            array (
                'id' => 3,
                'nama_ruang' => 'S.2.3',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            3 => 
            array (
                'id' => 4,
                'nama_ruang' => 'U.2.3',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            4 => 
            array (
                'id' => 5,
                'nama_ruang' => 'U.2.4',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            5 => 
            array (
                'id' => 6,
                'nama_ruang' => 'S.3.1',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            6 => 
            array (
                'id' => 7,
                'nama_ruang' => 'S.3.2',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            7 => 
            array (
                'id' => 8,
                'nama_ruang' => 'S.3.3',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            8 => 
            array (
                'id' => 9,
                'nama_ruang' => 'B.1.2',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            9 => 
            array (
                'id' => 10,
                'nama_ruang' => 'B.1.3',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            10 => 
            array (
                'id' => 11,
                'nama_ruang' => 'B.1.4',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            11 => 
            array (
                'id' => 12,
                'nama_ruang' => 'B.1.5',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            12 => 
            array (
                'id' => 13,
                'nama_ruang' => 'Lab KOMDAS',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            13 => 
            array (
                'id' => 14,
                'nama_ruang' => 'Lab Akuntansi',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            14 => 
            array (
                'id' => 15,
                'nama_ruang' => 'Lab Pemrograman',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            15 => 
            array (
                'id' => 16,
                'nama_ruang' => 'Lab Basis Data',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            16 => 
            array (
                'id' => 17,
                'nama_ruang' => 'Lab Aplikasi',
                'deleted_at' => '2018-01-18 12:02:37',
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-18 12:02:37',
            ),
            17 => 
            array (
                'id' => 18,
                'nama_ruang' => 'Lab Multimedia',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            18 => 
            array (
                'id' => 19,
                'nama_ruang' => 'Lab Jaringan Komputer',
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-10 08:30:09',
            ),
        ));
        
        
    }
}
