<?php

namespace App\Models\Jabatan;

use App\Models\DataPLT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UsulanPLT extends Model
{
    use HasFactory;

    protected $table = 'usulan_plts';

    protected $fillable = ['name'];

    public function data_plts(): HasMany
    {
        return $this->hasMany(DataPLT::class, 'jabatan_usulan_plt', 'id');
    }
}
