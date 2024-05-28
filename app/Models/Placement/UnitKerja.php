<?php

namespace App\Models\Placement;

use App\Models\TurnOverTPP;
use App\Models\TurnOverOrganik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UnitKerja extends Model
{
    use HasFactory;

    protected $table = 'unit_kerjas';
    protected $fillable = ['name'];

    public function turn_over_organiks(): HasMany
    {
        return $this->hasMany(TurnOverOrganik::class, 'unit_kerja_id', 'id');
    }

    public function turn_over_tpps(): HasMany
    {
        return $this->hasMany(TurnOverTPP::class, 'unit_kerja_id', 'id');
    }
}