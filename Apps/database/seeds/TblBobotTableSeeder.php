<?php

use Illuminate\Database\Seeder;

class TblBobotTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_bobot')->delete();
        
        \DB::table('tbl_bobot')->insert(array (
            0 => 
            array (
                'id' => 1,
                'bobot' => 4.0,
                'nilai' => 'A',
                'created_at' => '2018-01-10 08:30:01',
                'updated_at' => '2018-01-10 08:30:01',
            ),
            1 => 
            array (
                'id' => 2,
                'bobot' => 3.0,
                'nilai' => 'B',
                'created_at' => '2018-01-10 08:30:01',
                'updated_at' => '2018-01-10 08:30:01',
            ),
            2 => 
            array (
                'id' => 3,
                'bobot' => 2.0,
                'nilai' => 'C',
                'created_at' => '2018-01-10 08:30:01',
                'updated_at' => '2018-01-10 08:30:01',
            ),
            3 => 
            array (
                'id' => 4,
                'bobot' => 1.0,
                'nilai' => 'D',
                'created_at' => '2018-01-10 08:30:01',
                'updated_at' => '2018-01-10 08:30:01',
            ),
            4 => 
            array (
                'id' => 5,
                'bobot' => 0.0,
                'nilai' => 'E',
                'created_at' => '2018-01-10 08:30:01',
                'updated_at' => '2018-01-10 08:30:01',
            ),
        ));
        
        
    }
}
