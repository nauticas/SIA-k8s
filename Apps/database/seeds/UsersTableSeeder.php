<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'username' => 'admin',
                'password' => '$2y$10$ZMc6Zx3sQNbRcLRLX.IaZ.IVUkGbWRcJuCYpEJhn4bEsi5OxkRlEq',
                'role' => 'admin',
                'remember_token' => '6HCBwGm1MkFOXSCt06nKSPmPrNLPQQS23sN5yyIyUC8RRxTQ2KxNH9VVwdWg',
                'created_at' => '2018-01-10 08:30:01',
                'updated_at' => '2018-01-18 12:02:47',
            ),
            1 => 
            array (
                'id' => 2,
                'username' => 'D226',
                'password' => '$2y$10$OZ1hDY84.0efGIXw1Rh9jev9AKeKydzuFiGqwk6iH.C0DIbt77DqS',
                'role' => 'dosen',
                'remember_token' => 'bno6Ru9OPn8z3DSVOLWkkP1O7fKzovO48Q66uujtE9FHKXRmzyZsczY5ZcTe',
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-18 12:39:09',
            ),
            2 => 
            array (
                'id' => 3,
                'username' => '62495',
                'password' => '$2y$10$FlN8XXQchBSv69C2uicNzOUYqNPgHDTo1ma9TnrNDEssvIdAXWqy2',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            3 => 
            array (
                'id' => 4,
                'username' => 'D64',
                'password' => '$2y$10$kp5PfzjlrImm8DA/ZZ/G1eiZyh/eJHGTjPAtJRyS3fVrA4l6rfIL6',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            4 => 
            array (
                'id' => 5,
                'username' => '52181',
                'password' => '$2y$10$C1P5mIRjNKdS0fPD0iQjue6888KxCLUdvSaDWFx4Ld6w61asGN/ey',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            5 => 
            array (
                'id' => 6,
                'username' => 'D552',
                'password' => '$2y$10$weIBC6T8ZRYoxVOjSuV79OVGZKVy64p3hoViHJvqQznkj/FkKoscu',
                'role' => 'dosen',
                'remember_token' => 'B5qnrBDPKbkSaNnfLPqHyd0Dwj3PdtdyI0YFAdTAfOrMoB8zqc99CZnCdzvn',
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-11 04:28:38',
            ),
            6 => 
            array (
                'id' => 7,
                'username' => '58080',
                'password' => '$2y$10$ELR3KevVLrcohx6m8HSIP.sYEvFM/CdJ6PmHxs8LpVHourKYxEqFK',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:02',
                'updated_at' => '2018-01-10 08:30:02',
            ),
            7 => 
            array (
                'id' => 8,
                'username' => 'D831',
                'password' => '$2y$10$ByPoKXSgJ3D3MBR.H2bfP.vQqwFtj7CZUM5gQcVMTh91OStYBuFGG',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            8 => 
            array (
                'id' => 9,
                'username' => '18886',
                'password' => '$2y$10$IuTxToJceCej3dax.1Z/Y.9MoCpqhEkW.Y6JJJyiZUKdktWm39HPG',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            9 => 
            array (
                'id' => 10,
                'username' => 'D587',
                'password' => '$2y$10$fws7NteqPF42eIZ/uXtxOu2wCq5l3pOHISS/paUECskkW1XB.X2A6',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-10 08:30:03',
            ),
            10 => 
            array (
                'id' => 11,
                'username' => '12267',
                'password' => '$2y$10$vK9nJ/qz6Z8E.sDmiWtwJ.erQw94k.FGtIACJqQiAgVthpUJaWdv6',
                'role' => 'mahasiswa',
                'remember_token' => 'BxewEa6u8bjbRkLqlqyrbvHWK3uHqZXw04Ai8HCGa8ubRjllCXuYJhzrGYct',
                'created_at' => '2018-01-10 08:30:03',
                'updated_at' => '2018-01-11 06:42:27',
            ),
            11 => 
            array (
                'id' => 12,
                'username' => 'D775',
                'password' => '$2y$10$pF2OkJMhMt.8UAIek/cE7uuSPh1DWDWMHp4pDF/bcy2KQmIVHYlyG',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            12 => 
            array (
                'id' => 13,
                'username' => '96764',
                'password' => '$2y$10$u50XGs7SMXe2Ulhg/hbQNu.mkMMo8fexED1nDA9Wlvf.IzNBzJspy',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            13 => 
            array (
                'id' => 14,
                'username' => 'D210',
                'password' => '$2y$10$cex3yXx6ZvE58hcKdy8Rme2buDyYBOMF7PWTB0LjE/VfHlsJB/Ulm',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-18 08:27:21',
            ),
            14 => 
            array (
                'id' => 15,
                'username' => '37496',
                'password' => '$2y$10$.NACjzWvZ8DJFSBql0pjB.Atdav3MdqEDP4TQAW5dB7Hb0izcpfQO',
                'role' => 'mahasiswa',
                'remember_token' => 'qDw3t3arhimMKTXDBe8x5FzICUq5e1SYd15FOZr6kwd25Dd0WpLln36gtoD3',
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-11 06:53:06',
            ),
            15 => 
            array (
                'id' => 16,
                'username' => 'D75',
                'password' => '$2y$10$pn6ORor9PQAVlPiJd58UA.y4XUe354rErR.GuFMx3XoCqLE85zFmy',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-10 08:30:04',
            ),
            16 => 
            array (
                'id' => 17,
                'username' => '82094',
                'password' => '$2y$10$qwukKZgZsT3OsdgA9LWKRet.b02drwNYtusr36NyJnIG6RKar4Oz2',
                'role' => 'mahasiswa',
                'remember_token' => 'Q6Oz8oxW2pMg3KJ7nxJKFhQzA0BZ69LQSYzeDfgsCVUXRR0EnuXxPeXgPVTZ',
                'created_at' => '2018-01-10 08:30:04',
                'updated_at' => '2018-01-18 12:36:22',
            ),
            17 => 
            array (
                'id' => 18,
                'username' => 'D361',
                'password' => '$2y$10$euqoeVaRWdgN8b7B/qciEOVLjHMhfN/ykpfO4eoqWOu5h4CVJlbJ.',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            18 => 
            array (
                'id' => 19,
                'username' => '14622',
                'password' => '$2y$10$TOnIHeUg6KIzFrOUnTz./uHl72YfIDluuwNXBlh5rHfHhDOxH1QYm',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            19 => 
            array (
                'id' => 20,
                'username' => 'D319',
                'password' => '$2y$10$vyzGKYPI1QrQAglf6Z7cuuShqNKel5W4vhH6YdL7AGmLkeZ4jY7RO',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            20 => 
            array (
                'id' => 21,
                'username' => '11880',
                'password' => '$2y$10$8r2ZSJOznhyaMPrNJ2yWsuupC1tzCVczsDd0Dz93u0MxxSW0fAOQy',
                'role' => 'mahasiswa',
                'remember_token' => 'o2xByYetHYUviY5VEkTleTtkgHTNOaeDZakS5GC5jg1IBYd2hFB3XFrHKEqm',
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-11 06:39:26',
            ),
            21 => 
            array (
                'id' => 22,
                'username' => 'D407',
                'password' => '$2y$10$PxtYa6PNeQR/Fe5fcXHNQOqqwUKFn.BiWMpT3jpzyhabDBOjdoZoa',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:05',
                'updated_at' => '2018-01-10 08:30:05',
            ),
            22 => 
            array (
                'id' => 23,
                'username' => '83986',
                'password' => '$2y$10$69.sEcSOmjBqjp/SHaG1RuRVkz7AbOls3J3zuRCBgG9Ol6UkU/iAq',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            23 => 
            array (
                'id' => 24,
                'username' => 'D440',
                'password' => '$2y$10$p5gJ8IvHLjwYfXN/3b.Yq.7vjCUVp.ozO92fDYkYtVm.t1XO.YAju',
                'role' => 'dosen',
                'remember_token' => 'yxTm8yNgRyDyOir8f5b3adENcU4mJ0PGU3q8ny0os7KuFh00WItMwuzeJd1s',
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-18 12:44:30',
            ),
            24 => 
            array (
                'id' => 25,
                'username' => '52236',
                'password' => '$2y$10$YawcmWQ/kDcByqe.CdJyPOMVRXomMXGhUGtpyO8u2n3VynlBX27OO',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            25 => 
            array (
                'id' => 26,
                'username' => 'D26',
                'password' => '$2y$10$cIL/SBe3Mz4NX27HdFr/YONaTz8.L863b87DftffKVoHPamVkhQUe',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-18 08:28:46',
            ),
            26 => 
            array (
                'id' => 27,
                'username' => '90624',
                'password' => '$2y$10$Crshzx7.BgGzth/SKe70hOrPAvstA7FvhuurgaBDLxW5XdOCHkwjm',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:06',
                'updated_at' => '2018-01-10 08:30:06',
            ),
            27 => 
            array (
                'id' => 28,
                'username' => 'D736',
                'password' => '$2y$10$FmwaKWWWDHScfblzphbAzO07lwcUJyyIkUL9jW2jg83LvtO6Q1sGC',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-18 08:29:46',
            ),
            28 => 
            array (
                'id' => 29,
                'username' => '21109',
                'password' => '$2y$10$HOGigFshxM7Ta8/4jg4C1.fnf29PxlNx2BQK547dVaF2TZyGaGb6K',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            29 => 
            array (
                'id' => 30,
                'username' => 'D630',
                'password' => '$2y$10$udQYy9DIOcDtzU7FwtP07OmSH8d6QGzR0adbJIFrcorrVQIhO2k7K',
                'role' => 'dosen',
                'remember_token' => 'qa0fXoV1g5QKSv96zVKlndrVggDlQN9t1d9kaquMGJwmEeqQaGV6b2JAc5x3',
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-11 04:45:13',
            ),
            30 => 
            array (
                'id' => 31,
                'username' => '17982',
                'password' => '$2y$10$9hsNdMZvbMXErRG91//X5.eVXlye3EkfHpYeNmCpgSIdiTGzJWPP6',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            31 => 
            array (
                'id' => 32,
                'username' => 'D756',
                'password' => '$2y$10$KAUTsRhdXaCXMPjRn9IrDe9jBQIhFytn0eLqG85LomRhNZC30H1ei',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-18 08:42:25',
            ),
            32 => 
            array (
                'id' => 33,
                'username' => '74303',
                'password' => '$2y$10$UnSo2Y3xynHw8MLJ.J3WaOTH8w4Pp34dQMOqP0AhkHDtu3NdDLjkO',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:07',
                'updated_at' => '2018-01-10 08:30:07',
            ),
            33 => 
            array (
                'id' => 34,
                'username' => 'D323',
                'password' => '$2y$10$5oWNrtivlqHPJZGAfSUTVe51Swk.TPn3A8XVQlE84gPCZ4x.WIsXW',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-18 11:22:28',
            ),
            34 => 
            array (
                'id' => 35,
                'username' => '220',
                'password' => '$2y$10$1FJfjWGC/U/ZjZUob9H1m.n6ezOemZJsaFokLncilhZsJ8xVxVO/G',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            35 => 
            array (
                'id' => 36,
                'username' => 'D201',
                'password' => '$2y$10$aQIVOvggWx0t8vXwCTAxSePY7r.YGClGrq/yzaPtHPe6Q03jeLnNG',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            36 => 
            array (
                'id' => 37,
                'username' => '75313',
                'password' => '$2y$10$jujudQRT5ju.ugiliS4uNugMNWT4C2k7DH.KsIDd6UKwAJ2ZaNz9S',
                'role' => 'mahasiswa',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            37 => 
            array (
                'id' => 38,
                'username' => 'D826',
                'password' => '$2y$10$gJRrN5NvK7vJ1sZ4SiB.JeqvSAEfozj3OxWf5zYvSVaaSQkz3p2mG',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:08',
                'updated_at' => '2018-01-10 08:30:08',
            ),
            38 => 
            array (
                'id' => 39,
                'username' => '7224',
                'password' => '$2y$10$ws0qjdv4HFsrZqRElos5OOTZq6D/jG71KuLhN2pXOIoG6iqRlI/U6',
                'role' => 'mahasiswa',
                'remember_token' => 'xuzMdFP6GzdW4PntOumFn05zhXNUOITMi4i5wBXHaMWybJPufxColPfifcsG',
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-11 04:48:35',
            ),
            39 => 
            array (
                'id' => 40,
                'username' => 'D965',
                'password' => '$2y$10$hL0qsjtZIAotfFmNplpsEe0DMRHKUYk2lnYdgSVKVDBc82PuehY5u',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-10 08:30:09',
            ),
            40 => 
            array (
                'id' => 41,
                'username' => '90999',
                'password' => '$2y$10$JMf5oD9Y9wXhiRwHXcYCF.YqxCBQLkfeoD6Z4uSnG3IW4Uz77QmTi',
                'role' => 'mahasiswa',
                'remember_token' => 'vNfRB9ZqWv2NomdHosNZcAtN8gVz3CSioSQ7NyLVAe2mzTbOcTvgmDh6fcba',
                'created_at' => '2018-01-10 08:30:09',
                'updated_at' => '2018-01-11 06:47:46',
            ),
            41 => 
            array (
                'id' => 42,
                'username' => 'D234',
                'password' => '$2y$10$OJ6tie22eiSbVTp7NvuvJO1HUIUZ11rieanckYDeJDog419EGvbXW',
                'role' => 'dosen',
                'remember_token' => NULL,
                'created_at' => '2018-01-11 04:01:42',
                'updated_at' => '2018-01-11 04:01:42',
            ),
        ));
        
        
    }
}
