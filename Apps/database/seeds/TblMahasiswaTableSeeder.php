<?php

use Illuminate\Database\Seeder;

class TblMahasiswaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_mahasiswa')->delete();
        
        \DB::table('tbl_mahasiswa')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nim' => '62495',
                'nama_mahasiswa' => 'ANDERSON',
                'angkatan' => '2016',
                'jurusan' => 'Sistem Informasi',
                'kelas_program' => 'Pagi',
                'dosen_id' => 1,
                'user_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            1 => 
            array (
                'id' => 2,
                'nim' => '52181',
                'nama_mahasiswa' => 'ARIF RIYADI',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 2,
                'user_id' => 5,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            2 => 
            array (
                'id' => 3,
                'nim' => '58080',
                'nama_mahasiswa' => 'SITI',
                'angkatan' => '2015',
                'jurusan' => 'Sistem Informasi',
                'kelas_program' => 'Pagi',
                'dosen_id' => 2,
                'user_id' => 7,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            3 => 
            array (
                'id' => 4,
                'nim' => '18886',
                'nama_mahasiswa' => 'NURCAHYO',
                'angkatan' => '2014',
                'jurusan' => 'Sistem Informasi',
                'kelas_program' => 'Pagi',
                'dosen_id' => 2,
                'user_id' => 9,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            4 => 
            array (
                'id' => 5,
                'nim' => '12267',
                'nama_mahasiswa' => 'DHITYA PAMUNGKAS',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 2,
                'user_id' => 11,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            5 => 
            array (
                'id' => 6,
                'nim' => '96764',
                'nama_mahasiswa' => 'AZIS',
                'angkatan' => '2016',
                'jurusan' => 'Sistem Informasi',
                'kelas_program' => 'Pagi',
                'dosen_id' => 6,
                'user_id' => 13,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            6 => 
            array (
                'id' => 7,
                'nim' => '37496',
                'nama_mahasiswa' => 'RENI KUMALAWATI',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 7,
                'user_id' => 15,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            7 => 
            array (
                'id' => 8,
                'nim' => '82094',
                'nama_mahasiswa' => 'RISKA AMALIA',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 1,
                'user_id' => 17,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            8 => 
            array (
                'id' => 9,
                'nim' => '14622',
                'nama_mahasiswa' => 'JOHNSON',
                'angkatan' => '2014',
                'jurusan' => 'Manajemen Informatika',
                'kelas_program' => 'Pagi',
                'dosen_id' => 1,
                'user_id' => 19,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            9 => 
            array (
                'id' => 10,
                'nim' => '11880',
                'nama_mahasiswa' => 'THOMAS',
                'angkatan' => '2013',
                'jurusan' => 'Sistem Informasi',
                'kelas_program' => 'Pagi',
                'dosen_id' => 1,
                'user_id' => 21,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            10 => 
            array (
                'id' => 11,
                'nim' => '83986',
                'nama_mahasiswa' => 'IRWAN SETIAWAN',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 10,
                'user_id' => 23,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            11 => 
            array (
                'id' => 12,
                'nim' => '52236',
                'nama_mahasiswa' => 'JALU',
                'angkatan' => '204',
                'jurusan' => 'Sistem Informasi',
                'kelas_program' => 'Pagi',
                'dosen_id' => 6,
                'user_id' => 25,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            12 => 
            array (
                'id' => 13,
                'nim' => '90624',
                'nama_mahasiswa' => 'JONES',
                'angkatan' => '2013',
                'jurusan' => 'Manajemen Informatika',
                'kelas_program' => 'Pagi',
                'dosen_id' => 13,
                'user_id' => 27,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            13 => 
            array (
                'id' => 14,
                'nim' => '21109',
                'nama_mahasiswa' => 'SUTARMAN',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 9,
                'user_id' => 29,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            14 => 
            array (
                'id' => 15,
                'nim' => '17982',
                'nama_mahasiswa' => 'GERHARD FELIX S',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 11,
                'user_id' => 31,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            15 => 
            array (
                'id' => 16,
                'nim' => '74303',
                'nama_mahasiswa' => 'ELY',
                'angkatan' => '2016',
                'jurusan' => 'Manajemen Informatika',
                'kelas_program' => 'Pagi',
                'dosen_id' => 11,
                'user_id' => 33,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            16 => 
            array (
                'id' => 17,
                'nim' => '220',
                'nama_mahasiswa' => 'TAYLOR',
                'angkatan' => '2017',
                'jurusan' => 'Manajemen Informatika',
                'kelas_program' => 'Pagi',
                'dosen_id' => 2,
                'user_id' => 35,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            17 => 
            array (
                'id' => 18,
                'nim' => '75313',
                'nama_mahasiswa' => 'DAVID',
                'angkatan' => '2017',
                'jurusan' => 'Sistem Informasi',
                'kelas_program' => 'Pagi',
                'dosen_id' => 7,
                'user_id' => 37,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            18 => 
            array (
                'id' => 19,
                'nim' => '7224',
                'nama_mahasiswa' => 'RIKO RUDIANTO',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 7,
                'user_id' => 39,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-10 08:30:09',
            ),
            19 => 
            array (
                'id' => 20,
                'nim' => '90999',
                'nama_mahasiswa' => 'SLAMET SAPTOTO',
                'angkatan' => '2015',
                'jurusan' => 'Teknik Informatika',
                'kelas_program' => 'Sore',
                'dosen_id' => 15,
                'user_id' => 41,
                'deleted_at' => NULL,
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-10 08:30:09',
            ),
        ));
        
        
    }
}
