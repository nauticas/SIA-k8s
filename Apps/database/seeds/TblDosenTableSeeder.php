<?php

use Illuminate\Database\Seeder;

class TblDosenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_dosen')->delete();
        
        \DB::table('tbl_dosen')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kode_dosen' => 'D226',
                'nidn' => '57913',
                'nama_dosen' => 'Adi Kusjani',
                'user_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            1 => 
            array (
                'id' => 2,
                'kode_dosen' => 'D64',
                'nidn' => '32532',
                'nama_dosen' => 'Agung Budi Prasetyo ',
                'user_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            2 => 
            array (
                'id' => 3,
                'kode_dosen' => 'D552',
                'nidn' => '30328',
                'nama_dosen' => 'Berta Bednar ',
                'user_id' => 6,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            3 => 
            array (
                'id' => 4,
                'kode_dosen' => 'D831',
                'nidn' => '4398',
                'nama_dosen' => 'Cuk Subiyantoro ',
                'user_id' => 8,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            4 => 
            array (
                'id' => 5,
                'kode_dosen' => 'D587',
                'nidn' => '46151',
                'nama_dosen' => 'Febri Nova Lenti ',
                'user_id' => 10,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            5 => 
            array (
                'id' => 6,
                'kode_dosen' => 'D775',
                'nidn' => '69077',
                'nama_dosen' => 'Indra Yatini ',
                'user_id' => 12,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            6 => 
            array (
                'id' => 7,
                'kode_dosen' => 'D210',
                'nidn' => '65186',
                'nama_dosen' => 'M Agung Nugroho',
                'user_id' => 14,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-18 08:27:21',
            ),
            7 => 
            array (
                'id' => 8,
                'kode_dosen' => 'D75',
                'nidn' => '76539',
                'nama_dosen' => 'Luthfan Hadi Pramono',
                'user_id' => 16,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            8 => 
            array (
                'id' => 9,
                'kode_dosen' => 'D361',
                'nidn' => '23261',
                'nama_dosen' => 'Sri Rejeki ',
                'user_id' => 18,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            9 => 
            array (
                'id' => 10,
                'kode_dosen' => 'D319',
                'nidn' => '52326',
                'nama_dosen' => 'Totok Suprawoto ',
                'user_id' => 20,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            10 => 
            array (
                'id' => 11,
                'kode_dosen' => 'D407',
                'nidn' => '27487',
                'nama_dosen' => 'Tri Prabawa ',
                'user_id' => 22,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            11 => 
            array (
                'id' => 12,
                'kode_dosen' => 'D440',
                'nidn' => '3619',
                'nama_dosen' => 'Yosef Murya',
                'user_id' => 24,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            12 => 
            array (
                'id' => 13,
                'kode_dosen' => 'D26',
                'nidn' => '58198',
                'nama_dosen' => 'Erna Hudianti ',
                'user_id' => 26,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-18 08:28:46',
            ),
            13 => 
            array (
                'id' => 14,
                'kode_dosen' => 'D736',
                'nidn' => '64571',
                'nama_dosen' => 'Dison Librado ',
                'user_id' => 28,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-18 08:29:46',
            ),
            14 => 
            array (
                'id' => 15,
                'kode_dosen' => 'D630',
                'nidn' => '28643',
                'nama_dosen' => 'Mrs. Violette Will',
                'user_id' => 30,
                'deleted_at' => '2018-01-18 08:29:48',
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-18 08:29:48',
            ),
            15 => 
            array (
                'id' => 16,
                'kode_dosen' => 'D756',
                'nidn' => '29221',
                'nama_dosen' => 'Maria',
                'user_id' => 32,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-18 08:42:25',
            ),
            16 => 
            array (
                'id' => 17,
                'kode_dosen' => 'D323',
                'nidn' => '13835',
                'nama_dosen' => 'Dixian',
                'user_id' => 34,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-18 11:22:28',
            ),
            17 => 
            array (
                'id' => 18,
                'kode_dosen' => 'D201',
                'nidn' => '44111',
                'nama_dosen' => 'Kris Mraz',
                'user_id' => 36,
                'deleted_at' => '2018-01-18 11:20:20',
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-18 11:20:20',
            ),
            18 => 
            array (
                'id' => 19,
                'kode_dosen' => 'D826',
                'nidn' => '40218',
                'nama_dosen' => 'Chelsey Crona Jr.',
                'user_id' => 38,
                'deleted_at' => '2018-01-11 03:58:43',
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-11 03:58:43',
            ),
            19 => 
            array (
                'id' => 20,
                'kode_dosen' => 'D965',
                'nidn' => '28277',
                'nama_dosen' => 'Nelda Lind',
                'user_id' => 40,
                'deleted_at' => '2018-01-11 03:58:35',
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-11 03:58:35',
            ),
            20 => 
            array (
                'id' => 21,
                'kode_dosen' => 'D234',
                'nidn' => '197888',
                'nama_dosen' => 'Dison',
                'user_id' => 42,
                'deleted_at' => '2018-01-18 11:20:15',
                'created_at' => '2018-01-11 04:01:42',
                'updated_at' => '2018-01-18 11:20:15',
            ),
        ));
        
        
    }
}
