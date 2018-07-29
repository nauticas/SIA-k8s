<?php

use Illuminate\Database\Seeder;

class TblNilaiTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_nilai')->delete();
        
        \DB::table('tbl_nilai')->insert(array (
            0 => 
            array (
                'id' => 1,
                'krsdetil_id' => 6,
                'mahasiswa_id' => 20,
                'bobot_id' => 3,
                'thnajaran_id' => 20,
                'semester_ditempuh' => 1,
                'created_at' => '2018-01-11 04:30:47',
                'updated_at' => '2018-01-11 04:30:47',
            ),
            1 => 
            array (
                'id' => 2,
                'krsdetil_id' => 33,
                'mahasiswa_id' => 8,
                'bobot_id' => 1,
                'thnajaran_id' => 5,
                'semester_ditempuh' => 1,
                'created_at' => '2018-01-18 12:38:58',
                'updated_at' => '2018-01-18 12:38:58',
            ),
        ));
        
        
    }
}
