<?php

namespace App\Http\Controllers\Organik;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\TurnOverOrganik;
use App\Http\Controllers\Controller;

class TurnOverOrganikController extends Controller
{
    public $karyawans;

    public function index(): View
    {
        $this->karyawans = TurnOverOrganik::query()->orderBy('name')->paginate(10);
        return view("organik.turnover-organik.index", [
            'karyawans' => $this->karyawans,
        ]);
    }
}
