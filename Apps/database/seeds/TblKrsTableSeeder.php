<?php

use Illuminate\Database\Seeder;

class TblKrsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_krs')->delete();
        
        \DB::table('tbl_krs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mahasiswa_id' => 20,
                'tgl_krs' => '2018-01-10',
                'tgl_persetujuan' => '2018-01-11',
                'thnajaran_id' => 20,
                'status' => 2,
                'semester' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:40:23',
                'updated_at' => '2018-01-11 04:30:47',
            ),
            1 => 
            array (
                'id' => 2,
                'mahasiswa_id' => 19,
                'tgl_krs' => '2018-01-11',
                'tgl_persetujuan' => NULL,
                'thnajaran_id' => 20,
                'status' => 0,
                'semester' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-01-11 04:33:09',
                'updated_at' => '2018-01-11 04:33:09',
            ),
        ));
        
        
    }
}
