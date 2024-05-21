@extends('layouts.auth')

@section('title', 'Admin')

@section('container')
<div class="bg-white container-sm border my-3 rounded px-4 py-3 pb-5">
  <div class="d-flex justify-content-between mb-3">
    <h3 class="mb-2">Selamat datang di halaman admin</h3>
    <p>Halo, {{ auth()->user()->name }}</h1>
  </div>
  <div><a href="/logout" class="btn btn-sm btn-danger">Logout >></a><a href="" class="btn btn-sm btn-secondary mx-2">HR Dashboard >></a></div>
  <div class="card mt-3">
    <ul class="list-group list-group-flush">
      @if (Auth::user()->role == 'admin')
      <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
          <form class="d-flex" action="" method="get">
              <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Cari</button>
          </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
          <a href="{{ route('admin.create') }}" class="btn btn-primary">+ Tambah Data</a>
        </div>
  
        <div class="table-responsive">
          <table class="table table-striped">
              <thead>
                  <tr>
                    <th class="col-md-2">Unit</th>
                    <th class="col-md-2">Posisi</th>
                    <th class="col-md-1">Subgroup</th>
                    <th class="col-md-1">NIK</th>
                    <th class="col-md-2">Nama</th>
                    <th class="col-md-2">Tanggal Lahir</th>
                    <th class="col-md-1">Usia</th>
                    <th class="col-md-1">Gender</th>
                    <th class="col-md-3">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->unit->name }}</td>
                    <td>{{ $karyawan->posisi->name }}</td>
                    <td>{{ $karyawan->subgroup->name }}</td>
                    <td>{{ $karyawan->nik }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->tanggal_lahir }}</td>
                    <td>{{ $karyawan->usia }}</td>
                    <td>{{ $karyawan->gender }}</td>
                    <td>
                      <div class="d-flex gap-1">
                        <a href="{{ route('admin.karyawan.edit', ['karyawan' => $karyawan]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('admin.karyawan.delete', ['karyawan' => $karyawan]) }}" class="btn btn-danger btn-sm">Del</a>
                      </div>
                    </td>
                </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
  </div>
      @endif
      @if (Auth::user()->role == 'manager')
      <li class="list-group-item">Laman Manager</li>
      @endif
    </ul>
  </div>

</div>
@endsection