<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use App\Models\Posisi;
use App\Models\Subgroup;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class AdminController extends Controller
{
    function admin()
    {
        $karyawans = karyawan::latest()->get();
        return view('admin', compact('karyawans'));
    }

    public function create()
    {
        $units = Unit::all();
        $posisis = Posisi::all();
        $subgroups = Subgroup::all();
        
        return view('create', compact('units', 'posisis', 'subgroups'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'unit_id' => 'required',
            'posisi_id' => 'required',
            'subgroup_id' => 'required',
            'nik' => 'required|string|min:8|unique:karyawans,nik',
            'nama' => 'required|string|min:3',
            'tanggal_lahir' => 'required|string',
            'gender' => 'required|string',
        ]);

        $dateOfBirth = Carbon::parse($validated['tanggal_lahir']);
        $usia = $dateOfBirth->age;


        karyawan::create([
            'unit_id' => $validated['unit_id'],
            'posisi_id' => $validated['posisi_id'],
            'subgroup_id' => $validated['subgroup_id'],
            'nik' => $validated['nik'],
            'nama' => $validated['nama'],
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'usia' => $usia,
            'gender' => $validated['gender'],
        ]);

        return redirect()->route('admin.admin')->with('message', 'Karyawan berhasil didaftarkan.');
    }

    public function edit(karyawan $karyawan)
    {
        return view('edit', compact('karyawan'));
    }

    public function update(Request $request, $karyawan)
    {
        dd($request);
    }

    public function delete($karyawan)
    {
        dd($karyawan);
    }

    function manager()
    {
        return view('manager');
    }
}
