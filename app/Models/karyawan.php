<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawans';
    protected $primaryKey = 'nik';
    protected $fillable = ['unit_id', 'posisi_id', 'subgroup_id', 'nik', 'nama', 'tanggal_lahir', 'usia', 'gender'];
    
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
    public function posisi(): BelongsTo
    {
        return $this->belongsTo(Posisi::class, 'posisi_id', 'id');
    }
    public function subgroup(): BelongsTo
    {
        return $this->belongsTo(Subgroup::class, 'subgroup_id', 'id');
    }
    
}
