@extends('layouts.auth')

@section('title', 'Create User')

@section('container')

<form action="{{ route('admin.store') }}" method="POST">
  @csrf
  <div class="my-3 p-3 bg-body rounded shadow-sm">
    <li class="list-group-item bg-primary-subtle p-2 mb-4 text-center">
      <h5>Input Karyawan</h5>
    </li>
    <div class="input-group mt-3">
      <label class="input-group-text" for="unit" style="width:115px; ">Unit</label>
      <select class="form-select @error('unit_id') is-invalid @enderror" id="unit" name="unit_id">
        <option hidden>Pilih Unit...</option>
        @foreach ($units as $unit)
            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mt-1 d-block">
      @error('unit_id')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-group mt-3">
      <label class="input-group-text" name="posisi" for="posisi" style="width:115px;">Posisi</label>
      <select class="form-select @error('posisi_id') is-invalid @enderror" id="posisi" name="posisi_id">
        <option hidden>Pilih Posisi...</option>
        @foreach ($posisis as $posisi)
            <option value="{{ $posisi->id }}">{{ $posisi->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mt-1 d-block">
      @error('posisi_id')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-group mt-3">
      <label class="input-group-text" for="subgroup" style="width:115px;">Subgroup</label>
      <select class="form-select @error('subgroup_id') is-invalid @enderror" name="subgroup_id" id="subgroup_id">
        <option hidden>Pilih Subgroup...</option>
        @foreach ($subgroups as $subgroup)
            <option value="{{ $subgroup->id }}">{{ $subgroup->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mt-1">
      @error('subgroup_id')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-group mt-3">
      <span class="input-group-text" for="nik" style="width:115px; ">NIK</span>
      <input type="text" id="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}" name="nik">
    </div>
    <div class="mt-1">
      @error('nik')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-group mt-3">
      <span class="input-group-text" id="nama" for="nama" style="width:115px; ">Nama</span>
      <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" name="nama">
    </div>
    <div class="mt-1">
      @error('nama')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <div class="input-group mt-3">
      <span class="input-group-text" id="tanggal" for="tanggal" style="width:115px; ">Tanggal Lahir</span>
      <input type="date" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal_lahir">
    </div>
    <div class="mt-1">
      @error('tanggal')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    
    <div class="input-group mt-3">
      <label class="input-group-text" id="gender" for="gender" style="width:115px; ">Gender</label>
      <select class="form-select @error('gender') is-invalid @enderror" name="gender" id="gender">
        <option hidden>Pilih Gender...</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
    <div class="mt-1">
      @error('gender')
        <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>

    <div class="wrapper-btn d-flex justify-content-end mt-3">
      <button type="submit" class="btn btn-primary px-4">Tambah</button>
    </div>
  </div>
</form>

@endsection
