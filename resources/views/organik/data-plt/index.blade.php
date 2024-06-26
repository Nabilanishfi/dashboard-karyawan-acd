@extends('layouts.auth')

@section('title', 'Index | Data PLT')

@section('container')
    <div class="container-index-dataplt py-3 px-2" style="background-color: #fafafa; box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);">
        <div class="wrapper-link d-flex py-2 justify-content-between align-items-center">
            <div class="link d-flex gap-2">
                <a href="{{ route('data.dataplt.karyawan.create') }}" class="hover-import py-2 px-2 d-flex gap-1 justify-content-center align-items-center text-decoration-none text-black">
                    <svg width="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-11.25a.75.75 0 0 0-1.5 0v2.5h-2.5a.75.75 0 0 0 0 1.5h2.5v2.5a.75.75 0 0 0 1.5 0v-2.5h2.5a.75.75 0 0 0 0-1.5h-2.5v-2.5Z" clip-rule="evenodd" />
                    </svg>
                    <span style="font-size: 13px;">Tambah Data Baru</span>  
                </a>
                {{-- <a href="#" class="hover-import py-2 px-2 d-flex gap-1 justify-content-center align-items-center text-decoration-none text-black">
                    <img src="{{ asset('./img/excel.svg') }}" width="20" alt="">
                    <span style="font-size: 13px;">Import Excel</span>  
                </a> --}}
                <a href="{{ route('grafik.dataplt') }}" class="hover-import py-2 px-2 d-flex gap-1 justify-content-center align-items-center text-decoration-none text-black">
                    <img src="{{ asset('./img/grafik.svg') }}" width="20" alt="">
                    <span style="font-size: 13px;">Dashboard Grafik</span>  
                </a>
                <!-- Button trigger modal -->
                <button type="button" class="btn notification-button" style="position: relative" data-bs-toggle="modal" data-bs-target="#staticBackdrop">

                    @if ($warnings)
                        <div class="circle-notif"></div>
                    @endif

                    <img src="{{ asset('./img/message.svg') }}" width="20" alt="message">
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                        <p class="modal-title fw-bold" id="staticBackdropLabel">Pesan Peringatan</p>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @forelse ($warnings as $warning)
                                <div class="alert {{ $warning['terlewat'] ? 'alert-danger' : 'alert-warning' }}" role="alert">
                                        {{ $warning['pesan'] }}
                                </div>
                            @empty
                                <div class="alert alert-info">
                                    Belum ada peringatan tersedia.
                                </div>
                            @endforelse
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Oke</button>
                        </div>
                    </div>
                    </div>
                </div>
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

        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span>{{ session('message') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif

        <main class="wrapper-table mt-2">
            <div class="container-table table-responsive" style="overflow-x: auto; width: 100%">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Aksi</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Jabatan Eksisting</th>
                        <th scope="col">Jabatan Usulan PLT</th>
                        <th scope="col">Jabatan Usulan PLH</th>
                        <th scope="col">Periode Awal PLT</th>
                        <th scope="col">Periode Akhir PLT</th>
                        <th scope="col">Periode Awal PLH</th>
                        <th scope="col">Periode Akhir PLH</th>
                        <th scope="col">No. NODIN/SPR</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($karyawans as $key => $karyawan)
                            <tr>
                                <tr>
                                    <td scope="row" class="d-flex justify-content-center">{{ $karyawans->firstItem() + $key }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-1">
                                            <a href="{{ route('data.dataplt.karyawan.edit', $karyawan) }}" class="text-decoration-none text-success">
                                                <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                    <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                                    <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('data.dataplt.karyawan.destroy', $karyawan) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" href="{{ route('data.dataplt.karyawan.destroy', $karyawan) }}" class="text-danger" style="border: none; outline: none; background-color: transparent; padding: 0; margin: 0" >
                                                    <svg width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                                        <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                                    </svg>                                      
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                    <td>{{ $karyawan->name }}</td>
                                    <td>{{ $karyawan->nik }}</td>
                                    <td>{{ $karyawan->namaexisting }}</td>
                                    <td>{{ $karyawan->namaplt }}</td>
                                    <td>{{ $karyawan->namaplh }}</td>
                                    <td class="text-center">{{ $karyawan->awal_plt ?? '-' }}</td>
                                    <td class="text-center">{{ $karyawan->akhir_plt ?? '-' }}</td>
                                    <td class="text-center">{{ $karyawan->awal_plh ?? '-' }}</td>
                                    <td class="text-center">{{ $karyawan->akhir_plh ?? '-' }}</td>
                                    <td>{{ $karyawan->keterangan ?? '-' }}</td>
                                </tr>
                            </tr>
                        @empty
                            <p class="text-center">Data PLT tidak tersedia.</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </main>
    </div>
@endsection