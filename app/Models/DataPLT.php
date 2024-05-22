<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPLT extends Model
{
    use HasFactory;

    protected $table = 'data_plts';
    protected $primaryKey = 'nik';

    protected $fillable = ['nik', 'name', 'jabatan_existing', 'jabatan_usulan_plt', 'jabatan_usulan_plh', 'periode_plt', 'periode_plh', 'nodin_spr'];
}
