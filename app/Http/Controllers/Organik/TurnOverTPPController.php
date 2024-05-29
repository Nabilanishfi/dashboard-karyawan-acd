<?php

namespace App\Http\Controllers\Organik;

use Illuminate\View\View;
use App\Models\TurnOverTPP;
use Illuminate\Http\Request;
use App\Models\Placement\Area;
use App\Models\Placement\Fungsi;
use App\Models\Placement\UnitKerja;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\TurnOverTPPRequest;

class TurnOverTPPController extends Controller
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
        $this->karyawans = TurnOverTPP::query()->orderBy('name')->paginate(10);

        return view("organik.turnover-tpp.index", [
            'karyawans' => $this->karyawans,
        ]);
    }

    public function create(): View
    {
        return view('organik.turnover-tpp.create', [
            'areas' => $this->areas,
            'fungsis' => $this->fungsis,
            'unit_kerjas' => $this->unit_kerjas,
        ]);
    }

    public function store(TurnOverTPPRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        TurnOverTPP::create($validated);
        
        return redirect()->route('data.turnovertpp.karyawan.index')->with('message', 'Sukses! Berhasil menambahkan data karyawan turnover tpp.');
    }

    public function edit(TurnOverTPP $karyawan): View
    {
        return view('organik.turnover-tpp.edit', [
            'karyawan' => $karyawan,
            'areas' => $this->areas,
            'fungsis' => $this->fungsis,
            'unit_kerjas' => $this->unit_kerjas,
        ]);
    }

    public function update(Request $request, TurnOverTPP $karyawan): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'area_id' => 'required',
            'fungsi_id' => 'required',
            'unit_kerja_id' => 'required',
            'pendidikan' => 'required',
            'masuk' => 'nullable',
            'keluar' => 'nullable',
            'keterangan' => 'nullable',
        ]);

        $karyawan->update($validated);

        return redirect()->route('data.turnovertpp.karyawan.index')->with('message', 'Sukses! Berhasil mengubah data karyawan turnover tpp.');
    }

    public function destroy(TurnOverTPP $karyawan): RedirectResponse
    {
        $karyawan->delete();

        return redirect()->route('data.turnovertpp.karyawan.index')->with('message', 'Sukses! Berhasil menghapus data karyawan turn over tpp.');
    }
}
