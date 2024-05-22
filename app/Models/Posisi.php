<?php

namespace App\Models;

use App\Models\KaryawanOrganik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Posisi extends Model
{
    use HasFactory;

    protected $table = 'posisis';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function karyawan_organiks(): HasMany
    {
        return $this->hasMany(KaryawanOrganik::class, 'position', 'id');
    }
}
