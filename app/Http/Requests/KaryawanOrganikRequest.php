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
}
