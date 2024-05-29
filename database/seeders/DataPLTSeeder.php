<?php

namespace Database\Seeders;

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
            'jabatan_existing' => 2,
            'jabatan_usulan_plt' => 1,
            'jabatan_usulan_plh' => 4,
            'periode_plt' => '01 September 2022- Keputusan lebih lanjut atau paling lama sampai 30 November 2022',
            'periode_plh' => '20 s.d 22 Desember 2023',
            'nodin_spr' => 'ND.2800/RCF/00/12/2023',
        ]);
    }
}
