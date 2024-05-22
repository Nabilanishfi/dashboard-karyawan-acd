<?php

namespace App\Http\Controllers\Organik;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\KaryawanOrganik;
use App\Http\Controllers\Controller;

class KaryawanOrganikController extends Controller
{
    public $karyawans;

    public function index(): View
    {
        $this->karyawans = KaryawanOrganik::all();
    
        return view("organik.karyawan-organik.index", [
            'karyawans' => $this->karyawans,
        ]);
    }

    public function create(): View
    {
        return view('organik.karyawan-organik.create');
    }
    
    public function store(Request $request)
    {
        return null;
    }

    public function show(Request $request, KaryawanOrganik $organik): View
    {
        return view("organik.karyawan-organik.show");
    }

    public function edit(KaryawanOrganik $karyawan): View
    {
        return view("organik.karyawan-organik.edit");
    }
    
    public function update(Request $request, KaryawanOrganik $karyawan)
    {
        return null;
    }
    
    public function delete(Request $request, KaryawanOrganik $karyawan)
    {
        return null;
    }
}
