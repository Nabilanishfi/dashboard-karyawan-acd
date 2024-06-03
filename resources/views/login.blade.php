@extends('layouts.guest')

@section('title', 'Login Dashboard Karyawan ACD')

@section('container')
    <div class="container mt-3 py-4 d-flex-justify-content-center">
        <div class="wrapper-card p-5" style="width: 40%; margin: 20px auto; background-color: white; border-radius: 25px;">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex justify-content-center gap-1">
                        <img src="{{ asset('./img/angkasapura.svg') }}" width="150px" alt="">
                        <img src="{{ asset('./img/acd.svg') }}" width="150px" alt="">
                    </div>
                    <div class="text-center mt-4">
                        <h6 class="fw-bold">Selamat datang kembali!</h6>
                        <p style="font-size: 14px; color: rgb(90, 90, 90);">Silahkan masukkan informasi <span class="fst-italic fw-bold">Akun Dashboard ACD</span> anda.</p>

                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mb-3 mt-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" style="font-size: 14px;" autofocus>
                  @error('email')
                      <div class="text-danger mt-1">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" style="font-size: 14px;">
                  @error('password')
                      <div class="text-danger mt-1">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                @if ($errors->any())
                    <div class="text-danger text-center">
                        <div class="flex flex-column gap-2 p-0">
                            @foreach ($errors->all() as $error)
                                <span>{{ $error }}</p>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-3 form-check text-black d-flex align-items-center gap-1">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1" style="font-size: 14px;">Tetap masuk</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Masuk</button>
            </form>
        </div>
    </div>
@endsection