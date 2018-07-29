<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DataSeed::class);
        $this->call('PasswordResetsTableSeeder');
        $this->call('TblBobotTableSeeder');
        $this->call('TblDosenTableSeeder');
        $this->call('TblJadwalTableSeeder');
        $this->call('TblKrsTableSeeder');
        $this->call('TblKrsDetilTableSeeder');
        $this->call('TblMahasiswaTableSeeder');
        $this->call('TblMkTableSeeder');
        $this->call('TblNilaiTableSeeder');
        $this->call('TblRuangTableSeeder');
        $this->call('TblThnajaranTableSeeder');
        $this->call('UsersTableSeeder');
    }
}
