<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'name' => 'AIRPORT CONSTRUCTION DIVISION',
        ]);
        Unit::create([
            'name' => 'PROJECT IMPLEMENTATION',
        ]);
        Unit::create([
            'name' => 'PROJECT - CGK',
        ]);
        Unit::create([
            'name' => 'PROJECT - NON CGK',
        ]);
        Unit::create([
            'name' => 'PIU - HOTEL CGK',
        ]);
        Unit::create([
            'name' => 'PIU - INTEGRATED BUILDING CGK',
        ]);
        Unit::create([
            'name' => 'PIU - AKSESIBILITAS CGK',
        ]);
        Unit::create([
            'name' => 'PIU - REVITALISASI CGK',
        ]);
        Unit::create([
            'name' => 'PIU - PDG',
        ]);
        Unit::create([
            'name' => 'PIU - PGK',
        ]);
        Unit::create([
            'name' => 'PIU - PNK',
        ]);
        Unit::create([
            'name' => 'PIU - PKU',
        ]);
        Unit::create([
            'name' => 'PROJECT EVALUATION - CGK',
        ]);
        Unit::create([
            'name' => 'PROJECT EVALUATION - NON CGK',
        ]);
        Unit::create([
            'name' => 'PROJECT MANAGEMENT',
        ]);
        Unit::create([
            'name' => 'PROJECT FINANCIAL & GA',
        ]);
        Unit::create([
            'name' => 'BUDGETING & ACCOUNTING',
        ]);
        Unit::create([
            'name' => 'TREASURY',
        ]);
        Unit::create([
            'name' => 'GENERAL AFFAIRS & ADMINISTRATION',
        ]);
        Unit::create([
            'name' => 'PROJECT PROCUREMENT & LEGAL CONTRACT',
        ]);
        Unit::create([
            'name' => 'PROJECT PROCUREMENT',
        ]);
        Unit::create([
            'name' => 'LEGAL CONTRACT',
        ]);
    }
}
