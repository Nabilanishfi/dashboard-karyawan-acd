<?php

namespace App\Http\Controllers\Grafik;

use Illuminate\View\View;
use App\Models\KaryawanOrganik;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GrafikController extends Controller
{
    public function getCountKaryawanOrganik()
    {
        $totalAge = KaryawanOrganik::select(
            DB::raw('COUNT(*) FILTER (WHERE age >= 10 AND age < 20) AS "10+"'),
            DB::raw('COUNT(*) FILTER (WHERE age >= 20 AND age < 30) AS "20+"'),
            DB::raw('COUNT(*) FILTER (WHERE age >= 30 AND age < 40) AS "30+"'),
            DB::raw('COUNT(*) FILTER (WHERE age >= 40 AND age < 50) AS "40+"'),
            DB::raw('COUNT(*) FILTER (WHERE age >= 50) AS "50+"')
        )->first();

        return response()->json(['totalAge' => $totalAge]);
    }

    public function karyawanOrganik(): View
    {
        return view('organik.grafik.karyawan-organik');
    }

    public function getCountTurnOverOrganik()
    {
        $countByArea = DB::table('turn_over_organiks AS too')
        ->rightJoin('areas AS a', 'a.id', '=', 'too.area_id')
        ->selectRaw('a.name, COUNT(too.nip) as total_karyawan')
        ->groupBy('a.name')
        ->orderBy('a.name')
        ->get();

        return response()->json(['countArea' => $countByArea]);
    }
    
    public function turnOverOrganik(): View
    {
        return view('organik.grafik.turnover-organik');
    }

    public function getCountTurnOverTPP()
    {
        return null;
    }

    public function turnOverTPP(): View
    {
        return view('organik.grafik.turnover-tpp');
    }

    public function getCountDataPLT()
    {
        return null;
    }

    public function dataPLT(): View
    {
        return view('organik.grafik.data-plt');
    }
}