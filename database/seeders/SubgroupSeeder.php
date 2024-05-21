<?php

namespace Database\Seeders;

use App\Models\Subgroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubgroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subgroup::create([
            'name' => 'Senior Leader',
        ]);
        Subgroup::create([
            'name' => 'First Line Leader',
        ]);
        Subgroup::create([
            'name' => 'Middle Leader',
        ]);
        Subgroup::create([
            'name' => 'Officer',
        ]);
        Subgroup::create([
            'name' => 'Staff',
        ]);
    }
}
