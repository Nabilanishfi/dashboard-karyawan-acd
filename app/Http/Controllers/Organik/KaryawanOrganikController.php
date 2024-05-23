<?php

namespace App\Http\Controllers\Organik;

use Carbon\Carbon;
use App\Models\Unit;
use App\Models\Group;
use App\Models\Posisi;
use App\Models\Subgroup;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\KaryawanOrganik;
use App\Http\Controllers\Controller;
use App\Http\Requests\KaryawanOrganikRequest;

class KaryawanOrganikController extends Controller
{
    public $karyawans;
    public $groups;
    public $subgroups;
    public $posisis;
    public $units;

    public function __construct()
    {
        $this->groups = Group::all();
        $this->subgroups = Subgroup::all();
        $this->posisis = Posisi::all();
        $this->units = Unit::all();
    }

    public function index(): View
    {
        $this->karyawans = KaryawanOrganik::query()->orderBy('name')->paginate(10);
    
        return view("organik.karyawan-organik.index", [
            'karyawans' => $this->karyawans,
        ]);
    }

    public function create(): View
    {

        return view('organik.karyawan-organik.create', [
            'groups' => $this->groups,
            'subgroups' => $this->subgroups,
            'posisis' => $this->posisis,
            'units' => $this->units,
        ]);
    }
    
    public function store(KaryawanOrganikRequest $request)
    {

        $validated = $request->validated();

        $dateOfBirth = Carbon::parse($validated['birth_date']);
        $usia = $dateOfBirth->age;

        // store to database
        KaryawanOrganik::create([
            'pers_no' => $validated['pers_no'],
            'name' => $validated['name'],
            'emp_group' => $validated['emp_group'],
            'emp_subgroup' => $validated['emp_subgroup'],
            'org_unit' => $validated['org_unit'],
            'position' => $validated['position'],
            'ps_group' => $validated['ps_group'],
            'birth_date' => $validated['birth_date'],
            'age' => $usia,
            'gender' => $validated['gender'],
            'tingkat_pendidikan' => $validated['tingkat_pendidikan'],
            'birth_place' => $validated['birth_place'],
        ]);

        return redirect()->route('data.karyawanorganik.karyawan.index')->with(['success' => 'Sukses! Berhasil menambah karyawan organik.']);

    }

    public function edit(KaryawanOrganik $karyawan): View
    {
        return view("organik.karyawan-organik.edit", [
            'karyawan' => $karyawan,
            'groups' => $this->groups,
            'subgroups' => $this->subgroups,
            'posisis' => $this->posisis,
            'units' => $this->units,
        ]);
    }
    
    public function update(Request $request, KaryawanOrganik $karyawan)
    {
        $validated = $request->validate([
            'name' => 'required',
            'emp_group' => 'required',
            'emp_subgroup' => 'required',
            'org_unit' => 'required',
            'position' => 'required',
            'ps_group' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'tingkat_pendidikan' => 'required',
            'birth_place' => 'required',
        ]);

        $dateOfBirth = Carbon::parse($validated['birth_date']);
        $usia = $dateOfBirth->age;

        // update row
        $karyawan->update([
            'name' => $validated['name'],
            'emp_group' => $validated['emp_group'],
            'emp_subgroup' => $validated['emp_subgroup'],
            'org_unit' => $validated['org_unit'],
            'position' => $validated['position'],
            'ps_group' => $validated['ps_group'],
            'birth_date' => $validated['birth_date'],
            'age' => $usia,
            'gender' => $validated['gender'],
            'tingkat_pendidikan' => $validated['tingkat_pendidikan'],
            'birth_place' => $validated['birth_place'],
        ]);

        return redirect()->route('data.karyawanorganik.karyawan.index')->with(['success' => 'Sukses! Berhasil mengubah data karyawan organik.']);
    }
    
    public function destroy(KaryawanOrganik $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('data.karyawanorganik.karyawan.index')->with(['success' => 'Sukses!, Berhasil menghapus data karyawan organik.']);
    }
}
