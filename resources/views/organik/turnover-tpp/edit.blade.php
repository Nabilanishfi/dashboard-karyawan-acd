@extends('layouts.create-new')

@section('title', 'Edit | TurnOver TPP')

@section('container')
    <div class="container-create-turnover-tpp">
        <div class="mt-3">
            <a href="{{ route('data.turnovertpp.karyawan.index') }}" class="btn-back px-3 py-1 text-decoration-none text-black" style="font-size: 13px; border-radius: 20px; box-shadow: 0px 2px 3px rgba(0,0,0,.2);">
                <svg class="mr-2" width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M7.793 2.232a.75.75 0 0 1-.025 1.06L3.622 7.25h10.003a5.375 5.375 0 0 1 0 10.75H10.75a.75.75 0 0 1 0-1.5h2.875a3.875 3.875 0 0 0 0-7.75H3.622l4.146 3.957a.75.75 0 0 1-1.036 1.085l-5.5-5.25a.75.75 0 0 1 0-1.085l5.5-5.25a.75.75 0 0 1 1.06.025Z" clip-rule="evenodd" />
                    </svg>
                <span>kembali</span>
            </a>
        </div>
        <div class="mt-4" style="border-bottom: 2px solid rgb(214, 212, 212);">
            <h5 style="font-size: 14px;">Ubah Turn Over TPP</h5>
        </div>
        <div class="mt-3 py-4 px-4 rounded" style="background-color: rgb(255, 255, 255);">
            <h4 class="mb-2">Turn Over TPP</h4>
            <form action="{{ route('data.turnovertpp.karyawan.update', $karyawan) }}" method="post">
                @method('PUT')
                @csrf
                <div class="d-flex justify-content-between gap-2">
                    <div class="d-flex flex-column gap-1" style="width: 45%">
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="nip" style="font-size: 13px;">NIP</label>
                            <input disabled type="text" name="nip" id="nip" class="px-3 py-2 @error('nip') is-invalid @enderror" placeholder="masukkan nip.." value="{{ $karyawan->nip }}">
                            @error('nip')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="name" style="font-size: 13px;">Nama Karyawan</label>
                            <input type="text" name="name" id="name" class="px-3 py-2 @error('name') is-invalid @enderror" placeholder="masukkan nama karyawan.." value="{{ $karyawan->name }}">
                            @error('name')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="area_id" style="font-size: 13px;">Placement Area</label>
                            <select class="form-select form-select-md @error('area_id') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="area_id" id="area_id">
                                <option value="" hidden>-- pilih area --</option>
                                @if ($karyawan->area)
                                    <option selected hidden value="{{ $karyawan->area_id }}">{{ $karyawan->namaarea }}</option>
                                @endif
                                @foreach ($areas as $area)
                                <option value="{{ $area->id }}">{{ $area->name }}</option>
                                @endforeach
                            </select>   
                            @error('area_id')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror                       
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="fungsi_id" style="font-size: 13px;">Placement Fungsi</label>
                            <select class="form-select form-select-md @error('fungsi_id') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="fungsi_id" id="fungsi_id">
                                <option value="" hidden>-- pilih placement fungsi --</option>
                                @if ($karyawan->fungsi)
                                    <option selected hidden value="{{ $karyawan->fungsi_id }}">{{ $karyawan->namafungsi }}</option>
                                @endif
                                @foreach ($fungsis as $fungsi)
                                <option value="{{ $fungsi->id }}">{{ $fungsi->name }}</option>
                                @endforeach
                            </select>  
                            @error('fungsi_id')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror 
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="unit_kerja_id" style="font-size: 13px;">Unit Kerja</label>
                            <select class="form-select form-select-md @error('unit_kerja_id') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="unit_kerja_id" id="unit_kerja_id">
                                <option value="" hidden>-- pilih unit kerja --</option>
                                @if ($karyawan->unit_kerja)
                                    <option selected hidden value="{{ $karyawan->unit_kerja_id }}">{{ $karyawan->namaunitkerja }}</option>
                                @endif
                                @foreach ($unit_kerjas as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                            @error('unit_kerja_id')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror 
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1" style="width: 48%">
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="pendidikan" style="font-size: 13px;">Pendidikan</label>
                            <select class="form-select form-select-md @error('pendidikan') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="pendidikan" id="pendidikan">
                                <option value="" hidden>-- pilih tingkat pendidikan --</option>
                                @if($karyawan->pendidikan)
                                    <option selected hidden value="{{ $karyawan->pendidikan }}">{{ $karyawan->pendidikan }}</option>
                                @endif
                                <option value="S1 - Strata 1">S1 - Strata 1</option>
                                <option value="DIII - Diploma III">DIII - Diploma III</option>
                                <option value="SLTA">SLTA</option>
                            </select>
                            @error('pendidikan')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="masuk" style="font-size: 13px;">Masuk</label>
                            <input type="date" name="masuk" id="masuk" class="px-3 py-2 @error('masuk') is-invalid @enderror" style="color:rgb(138, 138, 138)" value="{{ $karyawan->masuk }}">
                            @error('masuk')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="keluar" style="font-size: 13px;">Keluar</label>
                            <input type="date" name="keluar" id="keluar" class="px-3 py-2 @error('keluar') is-invalid @enderror" style="color:rgb(138, 138, 138)" value="{{ $karyawan->keluar }}">
                            @error('keluar')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="keterangan" style="font-size: 13px;">Keterangan</label>
                            <input type="text" name="keterangan" id="keterangan" class="px-3 py-2 @error('keterangan') is-invalid @enderror" style="color:rgb(138, 138, 138)" placeholder="masukkan keterangan.." value="{{ $karyawan->keterangan }}">
                            @error('keterangan')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <button type="submit" class="mt-3 py-2 btn-tambah">Ubah Karyawan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection