@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('container')
    <div class="container-dashboard py-5 px-3">
        <div class="hero-container">
            <img src="{{ asset('./img/dashboard.svg') }}" alt="hero">
        </div>

        <div class="wrapper px-2 mt-3 pt-4 pb-5" style="background-color: white; width: 80%; margin: 0px auto; border-radius: 15px;">
            <h5 style="font-size: 14px; padding: 6px 15px; border-radius: 20px; color: rgb(18, 33, 160); background-color: rgb(233, 231, 255); border: 1px solid rgb(218, 218, 218); width: max-content; margin-bottom: 25px;">Informasi Data Karyawan</h5>

            <div style="display: flex; flex-wrap: wrap; gap: 13px; background-color: white; width: 100%; margin: 0px auto; border-radius: 15px;">
                <div class="karyawan-organik py-2" style="width: 24%;">
                    <div class="w-75 mb-2" style="margin: 0px auto; border-bottom: 2px solid rgb(236, 235, 235);">
                        <h5 class="text-center mt-1" style="font-size: 15px;">Karyawan Organik</h5>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-center gap-2 mt-3 mb-2">
                            <div class="">
                                <img src="{{ asset('./img/employees.svg') }}" alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <h5 style="font-size: 14px;">Total Employee</h5>
                                <p class="text-center" style="font-size: 30px; font-weight: bold;">100</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <div class="d-flex gap-2 mt-3">
                                <div class="">
                                    <img src="{{ asset('./img/male.svg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 14px;">Male</h5>
                                    <p class="text-center" style="font-size: 20px; font-weight: bold;">100</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <div class="">
                                    <img src="{{ asset('./img/female.svg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 14px;">Female</h5>
                                    <p class="text-center" style="font-size: 20px; font-weight: bold;">100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="turnover-organik py-2" style="width: 24%;">
                    <div class="w-75 mb-2" style="margin: 0px auto; border-bottom: 2px solid rgb(236, 235, 235);">
                        <h5 class="text-center mt-1" style="font-size: 15px;">TurnOver Organik</h5>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-center gap-2 mt-3 mb-2">
                            <div class="">
                                <img src="{{ asset('./img/employees.svg') }}" alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <h5 style="font-size: 14px;">Total Employee</h5>
                                <p class="text-center" style="font-size: 30px; font-weight: bold;">100</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <div class="d-flex gap-2 mt-3">
                                <div class="">
                                    <img src="{{ asset('./img/male.svg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 14px;">Male</h5>
                                    <p class="text-center" style="font-size: 20px; font-weight: bold;">100</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <div class="">
                                    <img src="{{ asset('./img/female.svg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 14px;">Female</h5>
                                    <p class="text-center" style="font-size: 20px; font-weight: bold;">100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="turnover-tpp py-2" style="width: 24%;">
                    <div class="w-75 mb-2" style="margin: 0px auto; border-bottom: 2px solid rgb(236, 235, 235);">
                        <h5 class="text-center mt-1" style="font-size: 15px;">TurnOver TPP</h5>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-center gap-2 mt-3 mb-2">
                            <div class="">
                                <img src="{{ asset('./img/employees.svg') }}" alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <h5 style="font-size: 14px;">Total Employee</h5>
                                <p class="text-center" style="font-size: 30px; font-weight: bold;">100</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <div class="d-flex gap-2 mt-3">
                                <div class="">
                                    <img src="{{ asset('./img/male.svg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 14px;">Male</h5>
                                    <p class="text-center" style="font-size: 20px; font-weight: bold;">100</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <div class="">
                                    <img src="{{ asset('./img/female.svg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 14px;">Female</h5>
                                    <p class="text-center" style="font-size: 20px; font-weight: bold;">100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="data-plt py-2" style="width: 24%;">
                    <div class="w-75 mb-2" style="margin: 0px auto; border-bottom: 2px solid rgb(236, 235, 235);">
                        <h5 class="text-center mt-1" style="font-size: 15px;">Data PLT</h5>
                    </div>
                    <div class="d-flex flex-column">
                        <div class="d-flex justify-content-center gap-2 mt-3 mb-2">
                            <div class="">
                                <img src="{{ asset('./img/employees.svg') }}" alt="">
                            </div>
                            <div class="d-flex flex-column">
                                <h5 style="font-size: 14px;">Total Employee</h5>
                                <p class="text-center" style="font-size: 30px; font-weight: bold;">100</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-3">
                            <div class="d-flex gap-2 mt-3">
                                <div class="">
                                    <img src="{{ asset('./img/male.svg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 14px;">Male</h5>
                                    <p class="text-center" style="font-size: 20px; font-weight: bold;">100</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 mt-3">
                                <div class="">
                                    <img src="{{ asset('./img/female.svg') }}" alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="font-size: 14px;">Female</h5>
                                    <p class="text-center" style="font-size: 20px; font-weight: bold;">100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection