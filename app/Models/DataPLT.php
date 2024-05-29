<?php

namespace App\Models;

use App\Models\Jabatan\Existing;
use App\Models\Jabatan\UsulanPLH;
use App\Models\Jabatan\UsulanPLT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPLT extends Model
{
    use HasFactory;

    protected $table = 'data_plts';
    protected $primaryKey = 'nik';

    protected $fillable = ['nik', 'name', 'jabatan_existing', 'jabatan_usulan_plt', 'jabatan_usulan_plh', 'awal_plt', 'akhir_plt', 'awal_plh', 'akhir_plh', 'nodin_spr'];

    public function existing(): BelongsTo
    {
        return $this->belongsTo(Existing::class, 'jabatan_existing', 'id');
    }
    
    public function usulan_plt(): BelongsTo
    {
        return $this->belongsTo(UsulanPLT::class, 'jabatan_usulan_plt', 'id');
    }
    
    public function usulan_plh(): BelongsTo
    {
        return $this->belongsTo(UsulanPLH::class, 'jabatan_usulan_plh', 'id');
    }

    public function getNamaExistingAttribute()
    {
        if ($this->existing) {
            return $this->existing->name;
        }

        return '-';
    }
    
    public function getNamaPltAttribute()
    {
        if ($this->usulan_plt) {
            return $this->usulan_plt->name;
        }

        return '-';
    }

    public function getNamaPlhAttribute()
    {
        if ($this->usulan_plh) {
            return $this->usulan_plh->name;
        }

        return '-';
    }
}
