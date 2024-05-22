<?php

namespace Database\Seeders;

use App\Models\KaryawanOrganik;
use Illuminate\Database\Seeder;

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
            'emp_group' => 1,
            'emp_subgroup' => 3,
            'org_unit' => 2,
            'position' => 4,
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
            'emp_group' => 1,
            'emp_subgroup' => 5,
            'org_unit' => 4,
            'position' => 2,
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
            'emp_group' => 1,
            'emp_subgroup' => 3,
            'org_unit' => 4,
            'position' => 2,
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
            'emp_group' => 1,
            'emp_subgroup' => 3,
            'org_unit' => 4,
            'position' => 4,
            'ps_group' => 21,
            'birth_date' => '1969-12-12',
            'age' => '55',
            'gender' => 'MALE',
            'tingkat_pendidikan' => 'S1 - Strata 1',
            'birth_place' => 'MALANG',
        ]);
        KaryawanOrganik::create([
            'pers_no' => 20002555,
            'name' => 'IMAM WIBISONO',
            'emp_group' => 1,
            'emp_subgroup' => 3,
            'org_unit' => 4,
            'position' => 4,
            'ps_group' => 21,
            'birth_date' => '1969-12-12',
            'age' => '55',
            'gender' => 'MALE',
            'tingkat_pendidikan' => 'S1 - Strata 1',
            'birth_place' => 'MALANG',
        ]);
        KaryawanOrganik::create([
            'pers_no' => 20002592,
            'name' => 'SURYO PRAYUGO',
            'emp_group' => 1,
            'emp_subgroup' => 3,
            'org_unit' => 4,
            'position' => 4,
            'ps_group' => 21,
            'birth_date' => '1969-12-12',
            'age' => '55',
            'gender' => 'MALE',
            'tingkat_pendidikan' => 'S1 - Strata 1',
            'birth_place' => 'LAMPUNG',
        ]);
    }
}
