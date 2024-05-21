<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $UserData = [
            [
                'name'=>'Admin ACD',
                'email'=>'adminacd@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Manager ACD',
                'email'=>'manageracd@gmail.com',
                'role'=>'manager',
                'password'=>bcrypt('123456')
            ],
            ];

            foreach($UserData as $key => $val){
                User::create($val);
            }
    }
}
