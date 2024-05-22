@extends('layouts.create-new')

@section('title', 'Create | Karyawan Organik')

@section('container')
    <div class="container-create-karyawanorganik">
        <div class="mt-3" style="border-bottom: 2px solid rgb(214, 212, 212);">
            <h5 style="font-size: 14px;">Create new Karyawan Organik</h5>
        </div>
        <div class="mt-3 py-4 px-4 rounded" style="background-color: rgb(255, 255, 255);">
            <h4 class="mb-2">Karyawan Organik</h4>
            <div class="d-flex justify-content-between gap-2">
                <div class="d-flex flex-column gap-1" style="width: 45%">
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="pers_no" style="font-size: 13px;">Personal Number</label>
                        <input type="text" name="pers_no" id="pers_no" class="px-3 py-2" placeholder="masukkan personal number..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="name" style="font-size: 13px;">Nama Karyawan</label>
                        <input type="text" name="name" id="name" class="px-3 py-2" placeholder="masukkan nama karyawan..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="emp_group" style="font-size: 13px;">Grup Karyawan</label>
                        <input type="text" name="emp_group" id="emp_group" class="px-3 py-2" placeholder="masukkan grup karyawan..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="emp_subgroup" style="font-size: 13px;">Subgroup Karyawan</label>
                        <input type="text" name="emp_subgroup" id="emp_subgroup" class="px-3 py-2" placeholder="masukkan subgroup karyawan..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="org_unit" style="font-size: 13px;">Unit Organisasional</label>
                        <input type="text" name="org_unit" id="org_unit" class="px-3 py-2" placeholder="masukkan unit organisasional..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="position" style="font-size: 13px;">Posisi</label>
                        <input type="text" name="position" id="position" class="px-3 py-2" placeholder="masukkan posisi..">
                    </div>
                </div>
                <div class="d-flex flex-column gap-1" style="width: 48%">
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="ps_group" style="font-size: 13px;">Grup PS</label>
                        <input type="text" name="ps_group" id="ps_group" class="px-3 py-2" placeholder="masukkan Grup PS..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="birth_place" style="font-size: 13px;">Tempat Lahir</label>
                        <input type="text" name="birth_place" id="birth_place" class="px-3 py-2" placeholder="masukkan tempat lahir..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="birth_date" style="font-size: 13px;">Tanggal Lahir</label>
                        <input type="text" name="birth_date" id="birth_date" class="px-3 py-2" placeholder="masukkan tanggal lahir..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="gender" style="font-size: 13px;">Jenis Kelamin</label>
                        <input type="text" name="gender" id="gender" class="px-3 py-2" placeholder="masukkan jenis kelamin..">
                    </div>
                    <div class="input mt-3 d-flex flex-column gap-1">
                        <label for="tingkat_pendidikan" style="font-size: 13px;">Tingkat Pendidikan</label>
                        <input type="text" name="tingkat_pendidikan" id="tingkat_pendidikan" class="px-3 py-2" placeholder="masukkan tingkat pendidikan..">
                    </div>
                    <button type="submit" class="mt-3 py-2 btn-tambah">Tambah Karyawan</button>
                </div>
            </div>
        </div>
    </div>
@endsection