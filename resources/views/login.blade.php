@extends('layouts.guest')

@section('title', 'Login Dashboard Karyawan ACD')

@section('container')
    <div class="container mt-3 py-4 d-flex-justify-content-center">
        <div class="wrapper-card p-5" style="width: 40%; margin: 20px auto; background-color: white; border-radius: 25px;">
            <form>
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex justify-content-center gap-1">
                        <img src="{{ asset('./img/angkasapura.svg') }}" width="150px" alt="">
                        <img src="{{ asset('./img/acd.svg') }}" width="150px" alt="">
                    </div>
                    <div class="text-center mt-4">
                        <h6 class="fw-bold">Selamat datang kembali!</h6>
                        <p style="font-size: 14px; color: rgb(90, 90, 90);">Silahkan masukkan informasi <span class="fst-italic fw-bold">Akun Dashboard ACD</span> anda.</p>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                  <input type="text" class="form-control" id="username" placeholder="Username" style="font-size: 14px;" autofocus>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" id="password" placeholder="Password" style="font-size: 14px;">
                </div>
                <div class="mb-3 form-check d-flex align-items-center gap-1">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1" style="font-size: 14px;">Tetap masuk</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Masuk</button>
            </form>
        </div>
    </div>
@endsection