<?php

namespace App\Models;

use App\Models\KaryawanOrganik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subgroup extends Model
{
    use HasFactory;

    protected $table = 'subgroups';
    protected $guarded = ['id'];

    public function karyawan_ograniks(): HasMany
    {
        return $this->hasMany(KaryawanOrganik::class, 'emp_subgroup', 'id');
    }
}
