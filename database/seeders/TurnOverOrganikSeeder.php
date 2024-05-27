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
            'area' => 'NON CGK',
            'fungsi' => 'STAFF OF MANAGER OF PIU - DJB',
            'unit_kerja' => 'PIU DJB',
            'rotasi_antar_unit' => null,
            'masuk' => '2024-10-30',
            'keluar' => '2022-04-01',
            'keterangan' => 'Rotasi ke KC',
        ]);

        TurnOverOrganik::create([
            'nip' => 20003098,
            'name' => 'ADITYA JANU SAPUTRO',
            'area' => 'CGK',
            'fungsi' => 'MANAGER OF PIU INTEGRATED BUILDING',
            'unit_kerja' => 'ACD',
            'rotasi_antar_unit' => '2022-10-06',
            'masuk' => null,
            'keluar' => null,
            'keterangan' => 'Rotasi dari Manager of Project Management',
        ]);

    }
}
