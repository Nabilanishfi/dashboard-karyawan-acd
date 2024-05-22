<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Subgroup;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


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

        $this->call(UnitSeeder::class);
        $this->call(PosisiSeeder::class);
        $this->call(SubgroupSeeder::class);

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
