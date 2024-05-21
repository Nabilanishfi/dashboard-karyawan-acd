<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subgroup extends Model
{
    use HasFactory;

    protected $table = 'subgroups';
    protected $guarded = ['id'];

    public function karyawans(): HasMany
    {
        return $this->hasMany(karyawan::class, 'subgroup_id', 'id');
    }
}
