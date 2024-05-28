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
            'name' => 'PIU DJB',
        ]);
        UnitKerja::create([
            'name' => 'PIU IB',
        ]);
    }
}
