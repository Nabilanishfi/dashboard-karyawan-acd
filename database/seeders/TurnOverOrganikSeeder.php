<?php

namespace Database\Seeders;

use App\Models\TurnOverOrganik;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TurnOverOrganikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        TurnOverOrganik::create([
            'nip' => 20007635,
            'name' => 'RENI SUSANTI',
            'area_id' => 2,
            'fungsi_id' => 5,
            'unit_kerja_id' => 1,
            'rotasi_antar_unit' => null,
            'masuk' => '2024-10-30',
            'keluar' => '2022-04-01',
            'keterangan' => 'Rotasi ke KC',
        ]);

        TurnOverOrganik::create([
            'nip' => 20003098,
            'name' => 'ADITYA JANU SAPUTRO',
            'area_id' => 3,
            'fungsi_id' => 4,
            'unit_kerja_id' => 3,
            'rotasi_antar_unit' => '2022-10-06',
            'masuk' => null,
            'keluar' => null,
            'keterangan' => 'Rotasi dari Manager of Project Management',
        ]);

    }
}
