<?php

namespace Database\Seeders;

use App\Models\KaryawanOrganik;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KaryawanOrganikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KaryawanOrganik::create([
            'pers_no' => 20002570,
            'name' => 'DODDY DEWAYANTO',
            'emp_group' => 'KP',
            'emp_subgroup' => 'Senior Leader',
            'org_unit' => 'AIRPORT CONSTRUCTION DIVISION',
            'position' => 'EGM of Airport Construction Division',
            'ps_group' => 21,
            'birth_date' => '1969-12-12',
            'age' => '55',
            'gender' => 'MALE',
            'tingkat_pendidikan' => 'S1 - Strata 1',
            'birth_place' => 'MALANG',
        ]);
        KaryawanOrganik::create([
            'pers_no' => 20002906,
            'name' => 'TAUFAN PRIHANTORO',
            'emp_group' => 'KP',
            'emp_subgroup' => 'Officer',
            'org_unit' => 'AIRPORT CONSTRUCTION DIVISION',
            'position' => 'Airport Construction Officer',
            'ps_group' => 12,
            'birth_date' => '1978-6-9',
            'age' => '45',
            'gender' => 'MALE',
            'tingkat_pendidikan' => 'S1 - Strata 1',
            'birth_place' => 'JAKARTA',
        ]);
        KaryawanOrganik::create([
            'pers_no' => 20002553,
            'name' => 'DHIMAS LAZUHARDY PUTRO',
            'emp_group' => 'KP',
            'emp_subgroup' => 'Senior Leader',
            'org_unit' => 'AIRPORT CONSTRUCTION DIVISION',
            'position' => 'EGM of Airport Construction Division',
            'ps_group' => 21,
            'birth_date' => '1969-12-12',
            'age' => '55',
            'gender' => 'MALE',
            'tingkat_pendidikan' => 'S1 - Strata 1',
            'birth_place' => 'MALANG',
        ]);
        KaryawanOrganik::create([
            'pers_no' => 20002574,
            'name' => 'ARIEF KURNIA KERRY',
            'emp_group' => 'KP',
            'emp_subgroup' => 'Senior Leader',
            'org_unit' => 'AIRPORT CONSTRUCTION DIVISION',
            'position' => 'EGM of Airport Construction Division',
            'ps_group' => 21,
            'birth_date' => '1969-12-12',
            'age' => '55',
            'gender' => 'MALE',
            'tingkat_pendidikan' => 'S1 - Strata 1',
            'birth_place' => 'MALANG',
        ]);
    }
}
