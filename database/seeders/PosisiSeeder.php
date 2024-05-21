<?php

namespace Database\Seeders;

use App\Models\Posisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PosisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posisi::create([
            'name' => 'EGM of Airport Construction Division',
        ]);
        Posisi::create([
            'name' => 'Airport Construction Officer',
        ]);
        Posisi::create([
            'name' => 'Deputy EGM of Project Implementation',
        ]);
        Posisi::create([
            'name' => 'Manager of Project - CGK',
        ]);
        Posisi::create([
            'name' => 'Project - CGK Senior Officer',
        ]);
        Posisi::create([
            'name' => 'Project - CGK Officer',
        ]);
        Posisi::create([
            'name' => 'Manager of Project - Non CGK',
        ]);
        Posisi::create([
            'name' => 'Project - Non CGK Senior Officer',
        ]);
        Posisi::create([
            'name' => 'Manager of PIU Accessibility',
        ]);
        Posisi::create([
            'name' => 'Project JO - PIU Accessibility',
        ]);
        Posisi::create([
            'name' => 'Manager of PIU - Integrated Building',
        ]);
        Posisi::create([
            'name' => 'Project Spv. PIU - Integrated Building',
        ]);
        Posisi::create([
            'name' => 'Manager of PIU - Hotel',
        ]);
        Posisi::create([
            'name' => 'Project Spv. - PIU Hotel',
        ]);
        Posisi::create([
            'name' => 'Staff of Manager of PIU Hotel',
        ]);
        Posisi::create([
            'name' => 'Project Spv. - PIU Revitalisasi T-1',
        ]);
        Posisi::create([
            'name' => 'Project JO - PIU Revitalisasi T-1',
        ]);
        Posisi::create([
            'name' => 'Project Spv. - PIU Revitalisasi T-2',
        ]);
        Posisi::create([
            'name' => 'Project JO - PIU Revitalisasi T-2',
        ]);
        Posisi::create([
            'name' => 'Manager of PIU - PDG',
        ]);
        Posisi::create([
            'name' => 'Project Spv. - PIU PDG',
        ]);
        Posisi::create([
            'name' => 'Project JO - PIU PDG',
        ]);
        Posisi::create([
            'name' => 'Manager of PIU PGK',
        ]);
        Posisi::create([
            'name' => 'Project Supervisor PIU - PGK',
        ]);
    }
}
