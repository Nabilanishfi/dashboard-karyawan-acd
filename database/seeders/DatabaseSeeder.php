<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\AreaSeeder;
use Database\Seeders\UnitSeeder;
use Database\Seeders\GroupSeeder;
use Database\Seeders\FungsiSeeder;
use Database\Seeders\PosisiSeeder;
use Database\Seeders\SubgroupSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\TurnOverOrganikSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin ACD',
            'email' => 'adminacd@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Umar Hadi',
            'email' => 'umar@acd.test',
            'password' => Hash::make('12344321'),
            'role' => 'manager',
            'remember_token' => Str::random(10),
        ]);

        // relasi nya karyawan organik
        $this->call([
            GroupSeeder::class,
            SubgroupSeeder::class,
            UnitSeeder::class,
            PosisiSeeder::class
        ]);

        // relasi nya turnover organik
        $this->call([
            AreaSeeder::class,
            FungsiSeeder::class,
            UnitKerjaSeeder::class
        ]);

        $this->call([
            KaryawanOrganikSeeder::class,
            TurnOverOrganikSeeder::class
        ]);
        
    }
}
