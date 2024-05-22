<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanOrganik extends Model
{
    use HasFactory;

    protected $table = 'karyawan_organiks';
    protected $primaryKey = 'pers_no';
    
    protected $fillable = ['pers_no', 'name', 'emp_group', 'emp_subgroup', 'org_unit', 'position', 'ps_group', 'birth_date', 'age', 'gender', 'tingkat_pendidikan', 'birth_place'];

}
