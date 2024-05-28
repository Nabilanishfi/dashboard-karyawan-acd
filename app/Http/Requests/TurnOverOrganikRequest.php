<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TurnOverOrganikRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nip' => 'required|unique:turn_over_organiks|min:7',
            'name' => 'required',
            'area_id' => 'required',
            'fungsi_id' => 'required',
            'unit_kerja_id' => 'required',
            'rotasi_antar_unit' => 'nullable',
            'masuk' => 'nullable',
            'keluar' => 'nullable',
            'keterangan' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'nip.required' => 'NIP harus diisi.',
            'nip.unique' => 'NIP sudah tersedia, silahkan gunakan yang lain.',
            'name.required' => 'Nama harus diisi.',
            'area_id.required' => 'Placement Area harus diisi.',
            'fungsi_id.required' => 'Placement Fungsi harus diisi.',
            'unit_kerja_id.required' => 'Unit Kerja harus diisi.',
        ];
    }
}
