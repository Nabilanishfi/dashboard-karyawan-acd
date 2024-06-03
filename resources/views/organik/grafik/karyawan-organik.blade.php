@extends('layouts.auth')

@section('title', 'Grafik Karyawan Organik')

@section('container')
    <div class="grafik">
        <div class="px-2 pt-3 pb-4" style="border-radius: 10px; background-color: white;">
            <h5 class="" style="color: rgb(59, 59, 59); font-size: 17px;">Grafik Karyawan Organik</h5>
            <hr class="mb-4" style="color: rgb(160, 160, 160);">
            <div class="wrapper">
                <div class="bar-chart">
                    <canvas id="bar-chart" style="width: 60%; height: 300px;">

                    </canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let chart;
    
        function getData() {
            $.ajax({
                url: 'http://127.0.0.1:8000/api/grafik/karyawan-organik',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    const {totalAge} = response;
                    const ctx = document.querySelector('#bar-chart').getContext('2d');

                    if (chart) {
                        chart.destroy();
                    }

                    chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: ['20+', '30+', '40+', '50+'],
                            datasets: [{
                                label: 'Jumlah Karyawan Berdasarkan Usia',
                                data: [
                                    totalAge['20+'],
                                    totalAge['30+'],
                                    totalAge['40+'],
                                    totalAge['50+']
                                ],
                                backgroundColor: ['#E1AFD1', '#874CCC', '#7469B6', '#5755FE'],
                                borderWidth: 1,
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 1,
                                        callback: function(val) {
                                            return `${val} orang`;
                                        }
                                    }
                                },
                            }
                        }
                    })
                    console.log(ctx)
                },
                error: function(xhr, status, error) {
                    console.log(status, error);
                }
            })
        }
        getData();
    </script>
@endsection