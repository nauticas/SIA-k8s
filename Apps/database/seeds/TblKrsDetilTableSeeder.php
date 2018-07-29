<?php

use Illuminate\Database\Seeder;

class TblKrsDetilTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_krs_detil')->delete();
        
        \DB::table('tbl_krs_detil')->insert(array (
            0 => 
            array (
                'id' => 6,
                'krs_id' => 1,
                'jadwal_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:29:17',
                'updated_at' => '2018-01-11 04:29:17',
            ),
            1 => 
            array (
                'id' => 7,
                'krs_id' => 1,
                'jadwal_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:29:17',
                'updated_at' => '2018-01-11 04:29:17',
            ),
            2 => 
            array (
                'id' => 8,
                'krs_id' => 1,
                'jadwal_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:29:17',
                'updated_at' => '2018-01-11 04:29:17',
            ),
            3 => 
            array (
                'id' => 9,
                'krs_id' => 1,
                'jadwal_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:29:17',
                'updated_at' => '2018-01-11 04:29:17',
            ),
            4 => 
            array (
                'id' => 10,
                'krs_id' => 1,
                'jadwal_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:29:17',
                'updated_at' => '2018-01-11 04:29:17',
            ),
            5 => 
            array (
                'id' => 25,
                'krs_id' => 2,
                'jadwal_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:48:18',
                'updated_at' => '2018-01-11 04:48:18',
            ),
            6 => 
            array (
                'id' => 26,
                'krs_id' => 2,
                'jadwal_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:48:18',
                'updated_at' => '2018-01-11 04:48:18',
            ),
            7 => 
            array (
                'id' => 27,
                'krs_id' => 2,
                'jadwal_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:48:18',
                'updated_at' => '2018-01-11 04:48:18',
            ),
            8 => 
            array (
                'id' => 28,
                'krs_id' => 2,
                'jadwal_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:48:18',
                'updated_at' => '2018-01-11 04:48:18',
            ),
            9 => 
            array (
                'id' => 29,
                'krs_id' => 2,
                'jadwal_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:48:18',
                'updated_at' => '2018-01-11 04:48:18',
            ),
        ));
        
        
    }
}
