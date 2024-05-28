<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurnOverTPPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TurnOverTPP::create([
            'nip' => 'PYK-PKU 0032',
            'name' => 'ANTON RISKY',
            'area_id' => 2,
            'fungsi_id' => 7,
            'unit_kerja_id' => 5,
            'pendidikan' => 'S1',
            'masuk' => '2020-09-27',
            'keluar' => null,
            'keterangan' => 'Resign',
        ]);
        TurnOverTPP::create([
            'nip' => 'PYK-PKU 0031',
            'name' => 'BILLY ARDAM',
            'area_id' => 4,
            'fungsi_id' => 3,
            'unit_kerja_id' => 2,
            'pendidikan' => 'S1',
            'masuk' => '2021-09-27',
            'keluar' => null,
            'keterangan' => 'Resign',
        ]);
        TurnOverTPP::create([
            'nip' => 'PYK-PDG 0022',
            'name' => 'PEBY MUHAMMAD SYARIFUDDIN',
            'area_id' => 6,
            'fungsi_id' => 3,
            'unit_kerja_id' => 1,
            'pendidikan' => 'S1',
            'masuk' => '2020-09-27',
            'keluar' => null,
            'keterangan' => 'Resign',
        ]);
        TurnOverTPP::create([
            'nip' => 'PYK-0030',
            'name' => 'MIRZA HAZRAT',
            'area_id' => 4,
            'fungsi_id' => 2,
            'unit_kerja_id' => 4,
            'pendidikan' => 'S1',
            'masuk' => '2020-09-27',
            'keluar' => null,
            'keterangan' => 'Resign',
        ]);
    }
}
