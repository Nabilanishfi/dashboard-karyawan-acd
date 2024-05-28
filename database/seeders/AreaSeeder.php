<?php

namespace Database\Seeders;

use App\Models\Placement\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'name' => 'CGK'
        ]);
        Area::create([
            'name' => 'NON CGK'
        ]);
        Area::create([
            'name' => 'PIU PWL'
        ]);
        Area::create([
            'name' => 'APS'
        ]);
        Area::create([
            'name' => 'KC'
        ]);
    }
}
