<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataPLTRequest extends FormRequest
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
            'nik' => 'required|unique:data_plts|min:3',
            'name' => 'required',
            'jabatan_existing' => 'required',
            'jabatan_usulan_plt' => 'nullable',
            'jabatan_usulan_plh' => 'nullable',
            'awal_plh' => 'nullable|date',
            'akhir_plh' => 'nullable|date',
            'awal_plt' => 'nullable|date',
            'akhir_plt' => 'nullable|date',
            'nodin_spr' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'nik.required' => 'NIK harus diisi.',
            'nik.unique' => 'NIK sudah tersedia. Silahkan gunakan NIK yang lain.',
            'name.required' => 'Nama harus diisi.',
            'jabatan_existing.required' => 'Jabatan Eksisting harus diisi.',
            // 'jabatan_usulan_plt.required' => 'Jabatan Usulan PLT harus diisi.',
            // 'jabatan_usulan_plh.required' => 'Jabatan Usulan PLH harus diisi.',
        ];
    }
}
