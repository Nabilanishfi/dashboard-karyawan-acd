<?php

namespace App\Http\Controllers\Organik;

use App\Models\DataPLT;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Jabatan\Existing;
use App\Models\Jabatan\UsulanPLH;
use App\Models\Jabatan\UsulanPLT;
use App\Http\Controllers\Controller;
use App\Http\Requests\DataPLTRequest;
use Illuminate\Http\RedirectResponse;

class DataPLTController extends Controller
{
    public $karyawans;
    public $existings;
    public $usulan_plts;
    public $usulan_plhs;

    public function __construct()
    {
        $this->existings = Existing::query()->orderBy('name')->get();
        $this->usulan_plts = UsulanPLT::query()->orderBy('name')->get();
        $this->usulan_plhs = UsulanPLH::query()->orderBy('name')->get();
    }

    public function index(): View
    {
        $this->karyawans = DataPLT::query()->orderBy('name')->paginate(10);

        return view("organik.data-plt.index", [
            'karyawans' => $this->karyawans,
        ]);
    }

    public function create(): View
    {
        return view("organik.data-plt.create", [
            'existings' => $this->existings,
            'usulan_plts' => $this->usulan_plts,
            'usulan_plhs' => $this->usulan_plhs,
        ]);
    }

    public function store(DataPLTRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        DataPLT::create($validated);

        return redirect()->route('data.dataplt.karyawan.index')->with('message', 'Sukses! Berhasil menambahkan Data PLT');
    }
}
