@extends('layouts.create-new')

@section('title', 'Create | Karyawan Organik')

@section('container')
    <div class="container-create-karyawanorganik">
        <div class="mt-3">
            <a href="{{ route('data.karyawanorganik.karyawan.index') }}" class="btn-back px-3 py-1 text-decoration-none text-black" style="font-size: 13px; border-radius: 20px; box-shadow: 0px 2px 3px rgba(0,0,0,.2);">
                <svg class="mr-2" width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M7.793 2.232a.75.75 0 0 1-.025 1.06L3.622 7.25h10.003a5.375 5.375 0 0 1 0 10.75H10.75a.75.75 0 0 1 0-1.5h2.875a3.875 3.875 0 0 0 0-7.75H3.622l4.146 3.957a.75.75 0 0 1-1.036 1.085l-5.5-5.25a.75.75 0 0 1 0-1.085l5.5-5.25a.75.75 0 0 1 1.06.025Z" clip-rule="evenodd" />
                    </svg>
                <span>kembali</span>
            </a>
        </div>
        <div class="mt-4" style="border-bottom: 2px solid rgb(214, 212, 212);">
            <h5 style="font-size: 14px;">Tambah Karyawan Organik</h5>
        </div>
        <div class="mt-3 py-4 px-4 rounded" style="background-color: rgb(255, 255, 255);">
            <h4 class="mb-2">Karyawan Organik</h4>
            <form action="{{ route('data.karyawanorganik.karyawan.store') }}" method="post">
                @csrf
                <div class="d-flex justify-content-between gap-2">
                    <div class="d-flex flex-column gap-1" style="width: 45%">
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="pers_no" style="font-size: 13px;">Personal Number</label>
                            <input type="text" name="pers_no" id="pers_no" class="px-3 py-2 @error('pers_no') is-invalid @enderror" placeholder="masukkan personal number.." value="{{ old('pers_no') }}">
                            @error('pers_no')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="name" style="font-size: 13px;">Nama Karyawan</label>
                            <input type="text" name="name" id="name" class="px-3 py-2 @error('name') is-invalid @enderror" placeholder="masukkan nama karyawan.." value="{{ old('name') }}">
                            @error('name')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="emp_group" style="font-size: 13px;">Grup Karyawan</label>
                            <select class="form-select form-select-md @error('emp_group') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="emp_group" id="emp_group">
                                <option value="" hidden>-- pilih grup --</option>
                                @foreach ($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>   
                            @error('emp_group')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror                       
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="emp_subgroup" style="font-size: 13px;">Subgroup Karyawan</label>
                            <select class="form-select form-select-md @error('emp_subgroup') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="emp_subgroup" id="emp_subgroup">
                                <option value="" hidden>-- pilih subgrup --</option>
                                @foreach ($subgroups as $subgroup)
                                <option value="{{ $subgroup->id }}">{{ $subgroup->name }}</option>
                                @endforeach
                            </select>  
                            @error('emp_subgroup')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror 
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="org_unit" style="font-size: 13px;">Unit Organisasional</label>
                            <select class="form-select form-select-md @error('org_unit') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="org_unit" id="org_unit">
                                <option value="" hidden>-- pilih unit organisasional --</option>
                                @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                            @error('org_unit')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror 
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="position" style="font-size: 13px;">Posisi</label>
                            <select class="form-select form-select-md @error('position') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="position" id="position">
                                <option value="" hidden>-- pilih posisi --</option>
                                @foreach ($posisis as $posisi)
                                <option value="{{ $posisi->id }}">{{ $posisi->name }}</option>
                                @endforeach
                            </select>
                            @error('position')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1" style="width: 48%">
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="ps_group" style="font-size: 13px;">Grup PS</label>
                            <input type="text" name="ps_group" id="ps_group" class="px-3 py-2 @error('ps_group') is-invalid @enderror" placeholder="masukkan Grup PS.." value="{{ old('ps_group') }}">
                            @error('ps_group')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="birth_place" style="font-size: 13px;">Tempat Lahir</label>
                            <input type="text" name="birth_place" id="birth_place" class="px-3 py-2 @error('birth_place') is-invalid @enderror" placeholder="masukkan tempat lahir.." value="{{ old('birth_place') }}">
                            @error('birth_place')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="birth_date" style="font-size: 13px;">Tanggal Lahir</label>
                            <input type="date" name="birth_date" id="birth_date" class="px-3 py-2 @error('birth_date') is-invalid @enderror" style="color:rgb(138, 138, 138)">
                            @error('birth_date')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="gender" style="font-size: 13px;">Jenis Kelamin</label>
                            <select class="form-select form-select-md @error('gender') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="gender" id="gender">
                                <option value="" hidden>-- pilih jenis kelamin --</option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>

                            @error('gender')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="tingkat_pendidikan" style="font-size: 13px;">Tingkat Pendidikan</label>
                            <select class="form-select form-select-md @error('tingkat_pendidikan') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="tingkat_pendidikan" id="tingkat_pendidikan">
                                <option value="" hidden>-- pilih tingkat pendidikan --</option>
                                <option value="S1 - Strata 1">S1 - Strata 1</option>
                                <option value="DIII - Diploma III">DIII - Diploma III</option>
                                <option value="SLTA">SLTA</option>
                            </select>
                            @error('tingkat_pendidikan')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="mt-3 py-2 btn-tambah">Tambah Karyawan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection