<?php

use Illuminate\Database\Seeder;

class TblThnajaranTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_thnajaran')->delete();
        
        \DB::table('tbl_thnajaran')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kd_tahun' => 'Gasal-2015/2016',
                'keterangan' => 'Gasal-2015/2016',
                'tgl_kuliah' => '2015-09-28',
                'tgl_awal_perwalian' => '2015-08-31',
                'tgl_akhir_perwalian' => '2015-09-20',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-18 08:19:52',
            ),
            1 => 
            array (
                'id' => 2,
                'kd_tahun' => 'Genap-2015/2016',
                'keterangan' => 'Genap-2015/2016',
                'tgl_kuliah' => '2016-03-01',
                'tgl_awal_perwalian' => '2016-02-01',
                'tgl_akhir_perwalian' => '2016-02-20',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:09',
            ),
            2 => 
            array (
                'id' => 3,
                'kd_tahun' => 'Gasal-2016/2017',
                'keterangan' => 'Gasal-2016/2017',
                'tgl_kuliah' => '2016-09-28',
                'tgl_awal_perwalian' => '2016-08-31',
                'tgl_akhir_perwalian' => '2016-09-04',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:09',
            ),
            3 => 
            array (
                'id' => 4,
                'kd_tahun' => 'Genap-2016/2017',
                'keterangan' => 'Genap-2016/2017',
                'tgl_kuliah' => '2017-03-09',
                'tgl_awal_perwalian' => '2017-02-06',
                'tgl_akhir_perwalian' => '2017-02-09',
                'status' => 0,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:09',
            ),
            4 => 
            array (
                'id' => 5,
                'kd_tahun' => 'Gasal-2017/2018',
                'keterangan' => 'Gasal-2017/2018',
                'tgl_kuliah' => '2017-09-27',
                'tgl_awal_perwalian' => '2017-09-20',
                'tgl_akhir_perwalian' => '2017-09-25',
                'status' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:09',
            ),
        ));
        
        
    }
}
