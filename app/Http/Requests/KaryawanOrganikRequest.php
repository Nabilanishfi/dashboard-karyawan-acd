<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanOrganikRequest extends FormRequest
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
            'pers_no' => 'required|unique:karyawan_organiks',
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
        ];
    }

    public function messages()
    {
        return [
            'pers_no.required' => 'Personal Number harus diisi.',
            'pers_no.unique' => 'Personal Number sudah tersedia, silahkan gunakan yang lain.',
            'name.required' => 'Nama harus diisi.',
            'emp_group.required' => 'Grup Karyawan harus diisi.',
            'emp_subgroup.required' => 'Subgrup Karyawan harus diisi.',
            'org_unit.required' => 'Unit Organisasional harus diisi.',
            'position.required' => 'Posisi harus diisi.',
            'ps_group.required' => 'Grup PS harus diisi.',
            'birth_date.required' => 'Tanggal Lahir harus diisi.',
            'gender.required' => 'Jenis Kelamin harus diisi.',
            'tingkat_pendidikan.required' => 'Tingkat Pendidikan harus diisi.',
            'birth_place.required' => 'Tempat Lahir harus diisi.',
        ];
    }
}
