<?php

namespace Database\Seeders;

use App\Models\TurnOverTPP;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'area_id' => 1,
            'fungsi_id' => 1,
            'unit_kerja_id' => 2,
            'pendidikan' => 'S1',
            'masuk' => '2020-09-27',
            'keluar' => '2019-02-01',
            'keterangan' => 'Resign',
        ]);
        TurnOverTPP::create([
            'nip' => 'PYK-PKU 0036',
            'name' => 'BILLY ARDAM',
            'area_id' => 1,
            'fungsi_id' => 2,
            'unit_kerja_id' => 3,
            'pendidikan' => 'S1',
            'masuk' => '2021-09-27',
            'keluar' => '2019-02-01',
            'keterangan' => 'Resign',
        ]);
        TurnOverTPP::create([
            'nip' => 'PYK-PDG 0022',
            'name' => 'PEBY MUHAMMAD SYARIFUDDIN',
            'area_id' => 2,
            'fungsi_id' => 1,
            'unit_kerja_id' => 3,
            'pendidikan' => 'S1',
            'masuk' => '2020-09-27',
            'keluar' => '2019-02-01',
            'keterangan' => 'Resign',
        ]);
        TurnOverTPP::create([
            'nip' => 'PYK-0230',
            'name' => 'MIRZA HAZRAT',
            'area_id' => 4,
            'fungsi_id' => 2,
            'unit_kerja_id' => 4,
            'pendidikan' => 'S1',
            'masuk' => '2020-09-27',
            'keluar' => '2019-02-01',
            'keterangan' => 'Resign',
        ]);
    }
}
