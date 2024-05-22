<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\UnitSeeder;
use Database\Seeders\GroupSeeder;
use Database\Seeders\PosisiSeeder;
use Database\Seeders\SubgroupSeeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call(GroupSeeder::class);
        $this->call(SubgroupSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(PosisiSeeder::class);

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

        $this->call(KaryawanOrganikSeeder::class);
        
    }
}
