<?php

namespace App\Http\Controllers\Organik;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Placement\Area;
use App\Models\TurnOverOrganik;
use App\Models\Placement\Fungsi;
use App\Models\Placement\UnitKerja;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TurnOverOrganikRequest;

class TurnOverOrganikController extends Controller
{
    public $karyawans;
    public $areas;
    public $fungsis;
    public $unit_kerjas;

    public function __construct()
    {
        $this->areas = Area::query()->orderBy('name')->get();
        $this->fungsis = Fungsi::query()->orderBy('name')->get();
        $this->unit_kerjas = UnitKerja::query()->orderBy('name')->get();
    }

    public function index(): View
    {
        $this->karyawans = TurnOverOrganik::query()->orderBy('name')->paginate(10);

        return view("organik.turnover-organik.index", [
            'karyawans' => $this->karyawans,
        ]);
    }

    public function create(): View
    {
        return view('organik.turnover-organik.create', [
            'areas' => $this->areas,
            'fungsis' => $this->fungsis,
            'unit_kerjas' => $this->unit_kerjas,
        ]);
    }

    public function store(TurnOverOrganikRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        TurnOverOrganik::create($validated);
        
        return redirect()->route('data.turnoverorganik.karyawan.index')->with('message', 'Sukses! Berhasil menambahkan data karyawan turnover organik.');
    }

    public function edit(TurnOverOrganik $karyawan): View
    {
        return view('organik.turnover-organik.edit', [
            'karyawan' => $karyawan,
            'areas' => $this->areas,
            'fungsis' => $this->fungsis,
            'unit_kerjas' => $this->unit_kerjas,
        ]);
    }

    public function update(Request $request, TurnOverOrganik $karyawan): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'area_id' => 'required',
            'fungsi_id' => 'required',
            'unit_kerja_id' => 'required',
            'rotasi_antar_unit' => 'nullable',
            'masuk' => 'nullable',
            'keluar' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        $karyawan->update($validated);

        return redirect()->route('data.turnoverorganik.karyawan.index')->with('message', 'Sukses! Berhasil mengubah data karyawan turnover organik.');
    }

    public function destroy(TurnOverOrganik $karyawan): RedirectResponse
    {
        $karyawan->delete();

        return redirect()->route('data.turnoverorganik.karyawan.index')->with('message', 'Sukses! Berhasil menghapus data karyawan turn over organik.');
    }
}