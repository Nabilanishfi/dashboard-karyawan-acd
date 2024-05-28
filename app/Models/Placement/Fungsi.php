<?php

namespace App\Models\Placement;

use App\Models\TurnOverOrganik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fungsi extends Model
{
    use HasFactory;

    protected $table = 'fungsis';
    protected $fillable = ['name'];

    public function turn_over_organiks(): HasMany
    {
        return $this->hasMany(TurnOverOrganik::class, 'fungsi_id', 'id');
    }
}
