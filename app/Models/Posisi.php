<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Posisi extends Model
{
    use HasFactory;

    protected $table = 'posisis';
    protected $guarded = ['id'];

    public function karyawans(): HasMany
    {
        return $this->hasMany(karyawan::class, 'posisi_id', 'id');
    }
}
