<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jabatan\UsulanPLH;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsulanPLHSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UsulanPLH::create([
            'name' => 'Manager of Project Management',
        ]);
        UsulanPLH::create([
            'name' => 'SM of Financial Project & General Affairs',
        ]);
    }
}
