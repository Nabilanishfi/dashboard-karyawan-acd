<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnOverOrganik extends Model
{
    use HasFactory;

    protected $table = 'turn_over_organiks';
    protected $primaryKey = 'nip';
    
    protected $fillable = ['nip', 'name', 'area', 'fungsi', 'unit_kerja', 'rotasi_antar_unit', 'masuk', 'keluar', 'keterangan'];

}
