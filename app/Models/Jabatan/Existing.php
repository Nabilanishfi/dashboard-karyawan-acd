<?php

namespace App\Models\Jabatan;

use App\Models\DataPLT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Existing extends Model
{
    use HasFactory;

    protected $table = 'existings';

    protected $fillable = ['nik', 'name', 'jabatan_existing', 'jabatan_usulan_plt', 'jabatan_usulan_plh', 'periode_plt', 'periode_plh', 'nodin_spr'];

    public function data_plts(): HasMany
    {
        return $this->hasMany(DataPLT::class, 'jabatan_existing', 'id');
    }
}
