@extends('layouts.auth')

@section('title', 'Index | Karyawan Organik')

@section('container')
    <div class="container-index-karyawanorganik py-3 px-2" style="background-color: #fafafa; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);">
        <div class="wrapper-link d-flex py-2 justify-content-between align-items-center">
            <div class="link d-flex gap-2">
                <a href="{{ route('data.karyawanorganik.create') }}" class="hover-import py-2 px-2 d-flex gap-1 justify-content-center align-items-center text-decoration-none text-black">
                    <svg width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd" />
                    </svg>
                    <span style="font-size: 13px;">Tambah Data Baru</span>  
                </a>
                <a href="#" class="hover-import py-2 px-2 d-flex gap-1 justify-content-center align-items-center text-decoration-none text-black">
                    <img src="{{ asset('./img/excel.svg') }}" width="20" alt="">
                    <span style="font-size: 13px;">Import Excel</span>  
                </a>
                <a href="{{ route('admin.dashboard') }}" class="hover-import py-2 px-2 d-flex gap-1 justify-content-center align-items-center text-decoration-none text-black">
                    <img src="{{ asset('./img/grafik.svg') }}" width="20" alt="">
                    <span style="font-size: 13px;">Dashboard Grafik</span>  
                </a>
            </div>
            <div class="search">

                <form action="" method="post">
                    @csrf
                    <div class="wrapper-input" style="position: relative">
                        <input type="text" name="search" class="px-3 py-1" style="width: 230px; border-radius: 30px; outline: 2px solid rgb(204, 204, 204); border:none;" placeholder="cari karyawan...">
                        <div class="" style="position: absolute; top: 2px; left: 198px;">
                            <svg style="color: gray" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
                              </svg>                          
                        </div>
                        <button type="submit" class="btn btn-primary d-none">Cari</button>
                    </div>
                </form>

            </div>
        </div>

        <main class="wrapper-table mt-2">
            <div class="container-table table-responsive" style="overflow-x: auto; width: 100%">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Pers. No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Grup</th>
                        <th scope="col">SubgGrup</th>
                        <th scope="col">Unit Org.</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Grup PS</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Pendidikan</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($karyawans as $karyawan)
                        <tr>
                            <th scope="row" class="d-flex justify-content-center">{{ $i++ }}</th>
                            <td>{{ $karyawan->pers_no }}</td>
                            <td>{{ $karyawan->name }}</td>
                            <td>{{ $karyawan->namagroup }}</td>
                            <td>{{ $karyawan->namasubgroup }}</td>
                            <td>{{ $karyawan->namaunit }}</td>
                            <td>{{ $karyawan->namaposisi }}</td>
                            <td>{{ $karyawan->ps_group }}</td>
                            <td>{{ $karyawan->birth_place }}</td>
                            <td>{{ $karyawan->birth_date }}</td>
                            <td>{{ $karyawan->age }}</td>
                            <td>{{ $karyawan->gender }}</td>
                            <td>{{ $karyawan->tingkat_pendidikan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection