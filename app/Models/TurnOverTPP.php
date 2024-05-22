<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnOverTPP extends Model
{
    use HasFactory;

    protected $table = 'turnover_tpps';
    protected $primaryKey = 'nip';
    
    protected $fillable = ['nip', 'name', 'area', 'fungsi', 'unit_kerja', 'pendidikan', 'masuk', 'keluar', 'keterangan'];
}
