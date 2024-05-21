<?php

namespace App\Http\Controllers\Organik;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TurnOverOrganik extends Controller
{
    public function index(): View
    {
        return view("organik.turnover-organik.index");
    }
}
