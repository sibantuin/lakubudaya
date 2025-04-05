@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Statistik Data</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Statistik</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-12">
                    <div class="row">

                        <div class="col-xxl-4 col-md-4 col-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Tiket Terbeli</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>1923</h6>
                                            <span class="text-muted small pt-2 ps-1">Tiket Pertunjukan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4 col-12">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Uang Masuk</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Rp 98.500.000</h6>
                                            <span class="text-muted small pt-2 ps-1">Untuk 1923 Tiket Terbeli</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4 col-12">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Rerata Tiket Terbeli</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-bag-plus-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>104</h6>
                                            <span class="text-muted small pt-2 ps-1">Tiket Dalam Sehari</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4 col-12">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Pertunjukan</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-stars"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>934</h6>
                                            <span class="text-muted small pt-2 ps-1">Telah dibuat</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4 col-12">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Sanggar</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-check-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>340</h6>
                                            <span class="text-muted small pt-2 ps-1">Telah Mendaftar</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-md-4 col-12">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Jumlah Pengguna</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-hearts"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>967</h6>
                                            <span class="text-muted small pt-2 ps-1">Pengguna Aktif</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                              <div class="card-body">

                                <h5 class="card-title">Transaksi <span>| Hari Ini</span></h5>

                                <div id="reportsChart"></div>

                              </div>

                            </div>
                          </div>


                    </div>
                </div>

            </div>
        </section>

    </main>
@endsection

@section('javascript')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            new ApexCharts(document.querySelector("#reportsChart"), {
            series: [{
                name: 'Tiket Terbeli',
                data: [31, 40, 28, 51, 42, 82, 56],
            }, {
                name: 'Event Dibuat',
                data: [11, 32, 45, 32, 34, 52, 41]
            }, {
                name: 'Pengguna Baru',
                data: [15, 11, 32, 18, 9, 24, 11]
            }],
            chart: {
                height: 350,
                type: 'area',
                toolbar: {
                show: false
                },
            },
            markers: {
                size: 4
            },
            colors: ['#4154f1', '#2eca6a', '#ff771d'],
            fill: {
                type: "gradient",
                gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.3,
                opacityTo: 0.4,
                stops: [0, 90, 100]
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            xaxis: {
                type: 'datetime',
                categories: ["2023-10-19T00:00:00.000Z", "2023-10-19T01:30:00.000Z", "2023-10-19T02:30:00.000Z", "2023-10-19T03:30:00.000Z", "2023-10-19T04:30:00.000Z", "2023-10-19T05:30:00.000Z", "2023-10-19T06:30:00.000Z"]
            },
            tooltip: {
                x: {
                format: 'dd/MM/yy HH:mm'
                },
            }
            }).render();
        });
    </script>
@endsection
