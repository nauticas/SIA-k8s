<?php

use Illuminate\Database\Seeder;

class TblJadwalTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_jadwal')->delete();
        
        \DB::table('tbl_jadwal')->insert(array (
            0 => 
            array (
                'id' => 2,
                'mk_id' => 9,
                'dosen_id' => 14,
                'thnajaran_id' => '5',
                'hari' => 'Tue',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 08:39:14',
                'updated_at' => '2018-01-18 08:39:14',
            ),
            1 => 
            array (
                'id' => 3,
                'mk_id' => 2,
                'dosen_id' => 16,
                'thnajaran_id' => '4',
                'hari' => 'Fri',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 08:39:45',
                'updated_at' => '2018-01-18 08:42:37',
            ),
            2 => 
            array (
                'id' => 4,
                'mk_id' => 12,
                'dosen_id' => 8,
                'thnajaran_id' => '5',
                'hari' => 'Tue',
                'waktu_mulai' => '20:00:00',
                'waktu_selesai' => '21:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 08:40:39',
                'updated_at' => '2018-01-18 08:40:39',
            ),
            3 => 
            array (
                'id' => 5,
                'mk_id' => 10,
                'dosen_id' => 1,
                'thnajaran_id' => '5',
                'hari' => 'Fri',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 08:42:02',
                'updated_at' => '2018-01-18 08:42:02',
            ),
            4 => 
            array (
                'id' => 6,
                'mk_id' => 19,
                'dosen_id' => 12,
                'thnajaran_id' => '5',
                'hari' => 'Wed',
                'waktu_mulai' => '20:00:00',
                'waktu_selesai' => '21:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 08:43:16',
                'updated_at' => '2018-01-18 08:43:16',
            ),
            5 => 
            array (
                'id' => 7,
                'mk_id' => 3,
                'dosen_id' => 12,
                'thnajaran_id' => '1',
                'hari' => 'Mon',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '19:00:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 08:46:51',
                'updated_at' => '2018-01-18 08:46:51',
            ),
            6 => 
            array (
                'id' => 21,
                'mk_id' => 11,
                'dosen_id' => 13,
                'thnajaran_id' => '1',
                'hari' => 'Thu',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '19:00:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:18:34',
                'updated_at' => '2018-01-18 11:18:34',
            ),
            7 => 
            array (
                'id' => 22,
                'mk_id' => 17,
                'dosen_id' => 7,
                'thnajaran_id' => '1',
                'hari' => 'Mon',
                'waktu_mulai' => '19:00:00',
                'waktu_selesai' => '21:00:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:19:40',
                'updated_at' => '2018-01-18 11:19:40',
            ),
            8 => 
            array (
                'id' => 23,
                'mk_id' => 18,
                'dosen_id' => 17,
                'thnajaran_id' => '1',
                'hari' => 'Mon',
                'waktu_mulai' => '19:00:00',
                'waktu_selesai' => '21:00:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:23:19',
                'updated_at' => '2018-01-18 11:23:19',
            ),
            9 => 
            array (
                'id' => 24,
                'mk_id' => 1,
                'dosen_id' => 11,
                'thnajaran_id' => '2',
                'hari' => 'Fri',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:25:43',
                'updated_at' => '2018-01-18 11:25:43',
            ),
            10 => 
            array (
                'id' => 25,
                'mk_id' => 7,
                'dosen_id' => 7,
                'thnajaran_id' => '2',
                'hari' => 'Thu',
                'waktu_mulai' => '18:30:00',
                'waktu_selesai' => '20:00:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:27:45',
                'updated_at' => '2018-01-18 11:27:45',
            ),
            11 => 
            array (
                'id' => 26,
                'mk_id' => 13,
                'dosen_id' => 3,
                'thnajaran_id' => '2',
                'hari' => 'Thu',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:29:05',
                'updated_at' => '2018-01-18 11:29:05',
            ),
            12 => 
            array (
                'id' => 27,
                'mk_id' => 14,
                'dosen_id' => 6,
                'thnajaran_id' => '2',
                'hari' => 'Fri',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:30:20',
                'updated_at' => '2018-01-18 11:30:20',
            ),
            13 => 
            array (
                'id' => 28,
                'mk_id' => 5,
                'dosen_id' => 11,
                'thnajaran_id' => '3',
                'hari' => 'Thu',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:31:40',
                'updated_at' => '2018-01-18 11:31:40',
            ),
            14 => 
            array (
                'id' => 29,
                'mk_id' => 16,
                'dosen_id' => 10,
                'thnajaran_id' => '3',
                'hari' => 'Fri',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 1,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:32:31',
                'updated_at' => '2018-01-18 11:32:31',
            ),
            15 => 
            array (
                'id' => 30,
                'mk_id' => 15,
                'dosen_id' => 4,
                'thnajaran_id' => '3',
                'hari' => 'Mon',
                'waktu_mulai' => '18:30:00',
                'waktu_selesai' => '20:00:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:33:09',
                'updated_at' => '2018-01-18 11:33:09',
            ),
            16 => 
            array (
                'id' => 32,
                'mk_id' => 4,
                'dosen_id' => 7,
                'thnajaran_id' => '4',
                'hari' => 'Fri',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:36:41',
                'updated_at' => '2018-01-18 11:36:41',
            ),
            17 => 
            array (
                'id' => 33,
                'mk_id' => 6,
                'dosen_id' => 7,
                'thnajaran_id' => '4',
                'hari' => 'Thu',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:37:07',
                'updated_at' => '2018-01-18 11:37:07',
            ),
            18 => 
            array (
                'id' => 34,
                'mk_id' => 20,
                'dosen_id' => 5,
                'thnajaran_id' => '4',
                'hari' => 'Thu',
                'waktu_mulai' => '17:00:00',
                'waktu_selesai' => '18:30:00',
                'program' => 'Sore',
                'kelas' => '9',
                'kapasitas' => 30,
                'ruang_id' => 4,
                'deleted_at' => NULL,
                'created_at' => '2018-01-18 11:37:44',
                'updated_at' => '2018-01-18 11:37:44',
            ),
        ));
        
        
    }
}
