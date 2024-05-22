<?php

namespace App\Models;

use App\Models\Unit;
use App\Models\Group;
use App\Models\Posisi;
use App\Models\Subgroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KaryawanOrganik extends Model
{
    use HasFactory;

    protected $table = 'karyawan_organiks';
    protected $primaryKey = 'pers_no';
    
    protected $fillable = ['pers_no', 'name', 'emp_group', 'emp_subgroup', 'org_unit', 'position', 'ps_group', 'birth_date', 'age', 'gender', 'tingkat_pendidikan', 'birth_place'];

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'emp_group', 'id');
    }

    public function subgroup(): BelongsTo
    {
        return $this->belongsTo(Subgroup::class, 'emp_subgroup', 'id');
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class, 'org_unit', 'id');
    }

    public function posisi(): BelongsTo
    {
        return $this->belongsTo(Posisi::class, 'position', 'id');
    }

    public function getNamaGroupAttribute() {
        if ($this->group) {
            return $this->group->name;
        }
        return '-';
    }

    public function getNamaSubgroupAttribute() {
        if ($this->subgroup) {
            return $this->subgroup->name;
        }
        return '-';
    }

    public function getNamaUnitAttribute() {
        if ($this->unit) {
            return $this->unit->name;
        }
        return '-';
    }

    public function getNamaPosisiAttribute() {
        if ($this->posisi) {
            return $this->posisi->name;
        }
        return '-';
    }
}
