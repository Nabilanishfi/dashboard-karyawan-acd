<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
    use HasFactory;

    protected $table = 'units';
    protected $guarded = ['id'];
    
    public function karyawans(): HasMany
    {
        return $this->hasMany(karyawan::class, 'unit_id', 'id');
    }
}
