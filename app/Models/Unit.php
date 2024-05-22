<?php

namespace App\Models;

use App\Models\KaryawanOrganik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];
    
    public function karyawan_organiks(): HasMany
    {
        return $this->hasMany(KaryawanOrganik::class, 'org_unit', 'id');
    }
}
