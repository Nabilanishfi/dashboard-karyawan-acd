<?php

namespace App\Http\Controllers\Organik;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPLTController extends Controller
{
    public function index(): View
    {
        return view("organik.data-plt.index");
    }
}
