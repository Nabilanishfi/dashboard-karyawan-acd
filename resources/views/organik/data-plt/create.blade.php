@extends('layouts.create-new')

@section('title', 'Create Data PLT')

@section('container')
    <div class="container-create-dataplt">
        <div class="mt-3">
            <a href="{{ route('data.dataplt.karyawan.index') }}" class="btn-back px-3 py-1 text-decoration-none text-black" style="font-size: 13px; border-radius: 20px; box-shadow: 0px 2px 3px rgba(0,0,0,.2);">
                <svg class="mr-2" width="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M7.793 2.232a.75.75 0 0 1-.025 1.06L3.622 7.25h10.003a5.375 5.375 0 0 1 0 10.75H10.75a.75.75 0 0 1 0-1.5h2.875a3.875 3.875 0 0 0 0-7.75H3.622l4.146 3.957a.75.75 0 0 1-1.036 1.085l-5.5-5.25a.75.75 0 0 1 0-1.085l5.5-5.25a.75.75 0 0 1 1.06.025Z" clip-rule="evenodd" />
                    </svg>
                <span>kembali</span>
            </a>
        </div>
        <div class="mt-4" style="border-bottom: 2px solid rgb(214, 212, 212);">
            <h5 style="font-size: 14px;">Tambah Data PLT</h5>
        </div>
        <div class="mt-3 py-4 px-4 rounded" style="background-color: rgb(255, 255, 255);">
            <h4 class="mb-2">Data PLT</h4>
            <form action="{{ route('data.dataplt.karyawan.store') }}" method="post">
                @csrf
                <div class="d-flex justify-content-between gap-2">
                    <div class="d-flex flex-column gap-1" style="width: 45%">
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="nik" style="font-size: 13px;">NIK</label>
                            <input type="text" name="nik" id="nik" class="px-3 py-2 @error('nik') is-invalid @enderror" placeholder="masukkan nik.." value="{{ old('nik') }}">
                            @error('nik')
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
                            <label for="jabatan_existing" style="font-size: 13px;">Jabatan Eksisting</label>
                            <select class="form-select form-select-md @error('jabatan_existing') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="jabatan_existing" id="jabatan_existing">
                                <option value="" hidden>-- pilih jabatan eksisting --</option>
                                @foreach ($existings as $existing)
                                <option value="{{ $existing->id }}">{{ $existing->name }}</option>
                                @endforeach
                            </select>   
                            @error('jabatan_existing')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror                       
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="jabatan_usulan_plt" style="font-size: 13px;">Jabatan Usulan PLT</label>
                            <select class="form-select form-select-md @error('jabatan_usulan_plt') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="jabatan_usulan_plt" id="jabatan_usulan_plt">
                                <option value="" hidden>-- pilih jabatan usulan plt --</option>
                                @foreach ($usulan_plts as $jabatan)
                                <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
                                @endforeach
                            </select>  
                            @error('jabatan_usulan_plt')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror 
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="jabatan_usulan_plh" style="font-size: 13px;">Jabatan Usulan PLH</label></label>
                            <select class="form-select form-select-md @error('jabatan_usulan_plh') is-invalid @enderror" style="color: rgb(131, 131, 131);" name="jabatan_usulan_plh" id="jabatan_usulan_plh">
                                <option value="" hidden>-- pilih jabatan usulan plh --</option>
                                @foreach ($usulan_plhs as $jabatan)
                                <option value="{{ $jabatan->id }}">{{ $jabatan->name }}</option>
                                @endforeach
                            </select>
                            @error('jabatan_usulan_plh')
                                <div class="" style="font-size: 13px; color: red;">
                                    *{{ $message }}
                                </div>
                            @enderror 
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-1" style="width: 45%">
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="awal_plt" style="font-size: 13px;">Periode PLT</label>
                            <div class="d-flex align-items-center gap-2">
                                <div class="" style="width: 48%;">
                                    <input type="date" name="awal_plt" id="awal_plt" class="px-3 py-2 @error('awal_plt') is-invalid @enderror" style="color:rgb(138, 138, 138); width: 100%">
                                    @error('awal_plt')
                                        <div class="" style="font-size: 13px; color: red;">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <span>-</span>
                                <div class="" style="width: 48%;">
                                    <input type="date" name="akhir_plt" id="akhir_plt" class="px-3 py-2 @error('akhir_plt') is-invalid @enderror" style="color:rgb(138, 138, 138); width: 100%">
                                    @error('akhir_plt')
                                        <div class="" style="font-size: 13px; color: red;">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="awal_plt" style="font-size: 13px;">Periode PLH</label>
                            <div class="d-flex align-items-center gap-2">
                                <div class="" style="width: 48%">
                                    <input type="date" name="awal_plh" id="awal_plh" class="px-3 py-2 @error('awal_plh') is-invalid @enderror" style="color:rgb(138, 138, 138); width: 100%;">
                                    @error('awal_plh')
                                        <div class="" style="font-size: 13px; color: red;">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <span>-</span>
                                <div class="" style="width: 48%;">
                                    <input type="date" name="akhir_plh" id="akhir_plh" class="px-3 py-2 @error('akhir_plh') is-invalid @enderror" style="color:rgb(138, 138, 138); width: 100%;">
                                    @error('akhir_plh')
                                        <div class="" style="font-size: 13px; color: red;">
                                            *{{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="input mt-3 d-flex flex-column gap-1">
                            <label for="nodin_spr" style="font-size: 13px;">No. NODIN/SPR</label>
                            <input type="text" name="nodin_spr" id="nodin_spr" class="px-3 py-2 @error('nodin_spr') is-invalid @enderror" style="color:rgb(138, 138, 138)" placeholder="masukkan no. nodin/spr.." value="{{ old('nodin_spr') }}">
                            @error('nodin_spr')
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