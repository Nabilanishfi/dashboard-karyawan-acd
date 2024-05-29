<?php

namespace Database\Seeders;

use App\Models\DataPLT;
use Illuminate\Database\Seeder;

class DataPLTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataPLT::create([
            'nik' => '20002868',
            'name' => 'Fachrul Juliansyah',
            'jabatan_existing' => 1,
            'jabatan_usulan_plt' => 1,
            'jabatan_usulan_plh' => 1,
            'awal_plt' => '2023-10-20',
            'akhir_plt' => '2023-11-10',
            'awal_plh' => '2021-03-10',
            'akhir_plh' => '2023-02-10',
            'nodin_spr' => 'ND.2800/RCF/00/12/2023',
        ]);

        DataPLT::create([
            'nik' => '20002824',
            'name' => 'Sam Ratulangi',
            'jabatan_existing' => 1,
            'jabatan_usulan_plt' => 1,
            'jabatan_usulan_plh' => 1,
            'awal_plt' => '2023-10-20',
            'akhir_plt' => '2023-11-10',
            'awal_plh' => '2021-03-10',
            'akhir_plh' => '2023-02-10',
            'nodin_spr' => 'ND.2800/RCF/00/12/2023',
        ]);

        DataPLT::create([
            'nik' => '20002241',
            'name' => 'Rendi Kulai',
            'jabatan_existing' => 1,
            'jabatan_usulan_plt' => 1,
            'jabatan_usulan_plh' => 1,
            'awal_plt' => '2023-10-20',
            'akhir_plt' => '2023-11-10',
            'awal_plh' => '2021-03-10',
            'akhir_plh' => '2023-02-10',
            'nodin_spr' => 'ND.2800/RCF/00/12/2023',
        ]);

        DataPLT::create([
            'nik' => '20002868',
            'name' => 'Siti Jenar',
            'jabatan_existing' => 1,
            'jabatan_usulan_plt' => 1,
            'jabatan_usulan_plh' => 1,
            'awal_plt' => '2023-10-20',
            'akhir_plt' => '2023-11-10',
            'awal_plh' => '2021-03-10',
            'akhir_plh' => '2023-02-10',
            'nodin_spr' => 'ND.2800/RCF/00/12/2023',
        ]);
    }
}
