<?php

namespace App\Models;

use App\Models\Placement\Area;
use App\Models\Placement\Fungsi;
use App\Models\Placement\UnitKerja;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TurnOverOrganik extends Model
{
    use HasFactory;

    protected $table = 'turn_over_organiks';
    protected $primaryKey = 'nip';
    
    protected $fillable = ['nip', 'name', 'area_id', 'fungsi_id', 'unit_kerja_id', 'rotasi_antar_unit', 'masuk', 'keluar', 'keterangan'];

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class, 'area_id', 'id');
    }

    public function fungsi(): BelongsTo
    {
        return $this->belongsTo(Fungsi::class, 'fungsi_id', 'id');
    }

    public function unit_kerja(): BelongsTo
    {
        return $this->belongsTo(UnitKerja::class, 'unit_kerja_id', 'id');
    }

    public function getNamaAreaAttribute()
    {
        if ($this->area) {
            return $this->area->name;
        }

        return '-';
    }

    public function getNamaFungsiAttribute()
    {
        if ($this->fungsi) {
            return $this->fungsi->name;
        }

        return '-';
    }

    public function getNamaUnitKerjaAttribute()
    {
        if ($this->unit_kerja) {
            return $this->unit_kerja->name;
        }

        return '-';
    }

}
