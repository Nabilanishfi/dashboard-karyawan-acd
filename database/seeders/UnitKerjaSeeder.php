<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Placement\UnitKerja;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UnitKerja::create([
            'name' => 'ACD',
        ]);
        UnitKerja::create([
            'name' => 'PIU IB',
        ]);

        UnitKerja::create([
            'name' => 'PIU PKU',
        ]);
        UnitKerja::create([
            'name' => 'Budgeting & Accounting',
        ]);
        UnitKerja::create([
            'name' => 'PIU PDG',
        ]);
        UnitKerja::create([
            'name' => 'PIU ALA',
        ]);
        UnitKerja::create([
            'name' => 'PIU BDO/PWL',
        ]);
        UnitKerja::create([
            'name' => 'PIU PNK',
        ]);
        UnitKerja::create([
            'name' => 'FIN & GA',
        ]);
        UnitKerja::create([
            'name' => 'PIU PGK',
        ]);
        UnitKerja::create([
            'name' => 'PROJECT PROCUREMENT & LEGAL CONTRACT',
        ]);
        UnitKerja::create([
            'name' => 'PIU DJB',
        ]);
        UnitKerja::create([
            'name' => 'PIU HOTEL',
        ]);
        UnitKerja::create([
            'name' => 'GA & ADM',
        ]);
    }
}
