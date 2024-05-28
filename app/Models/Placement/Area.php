<?php

namespace App\Models\Placement;

use App\Models\TurnOverOrganik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $fillable = ['name'];

    public function turn_over_organiks(): HasMany {
        return $this->hasMany(TurnOverOrganik::class, 'area_id', 'id');
    }
}
