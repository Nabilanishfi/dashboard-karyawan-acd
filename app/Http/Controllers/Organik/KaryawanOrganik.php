<?php

namespace App\Http\Controllers\Organik;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KaryawanOrganik extends Controller
{
    public function index(): View
    {
        return view("organik.karyawan-organik.index");
    }

    public function show(Request $request, KaryawanOrganik $organik): View
    {
        return view("organik.karyawan-organik.show");
    }

    public function create(Request $request): View
    {
        return view("organik.karyawan-organik.create");
    }

    public function store(Request $request)
    {
        return null;
    }

    public function edit(Request $request, KaryawanOrganik $organik): View
    {
        return view("organik.karyawan-organik.edit");
    }
    
    public function update(Request $request)
    {
        return null;
    }
    
    public function delete(Request $request, KaryawanOrganik $organik)
    {
        return null;
    }
}
