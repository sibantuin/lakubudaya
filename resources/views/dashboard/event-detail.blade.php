@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Event</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('event') }}">Event</a></li>
                    <li class="breadcrumb-item active">Detail</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card mb-2">
                        <div class="card-body p-3">

                            <div class="card mb-0">

                                <div class="row g-0">
                                    <div class="col-md-4 mb-3">
                                        <img src="{{ asset('assets/img/dashboard/'.$photo) }}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body px-0 px-md-3 pb-0">
                                            <h5 class="card-title py-2 mb-0">{{ $name }}</h5>
                                            <p class="card-text mb-3">Jangan lewatkan event menarik ini!</p>

                                            <hr>

                                            <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                                <h6>
                                                    <i class="bi bi-star-fill" style="color: #634730 !important;"></i>
                                                    <span class="pl-2">{{ $rate }}</span>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                                <h6>
                                                    <i class="bi bi-house-check-fill" style="color: #634730 !important;"></i>
                                                    <span class="pl-2">Sanggar Ngajogjakarta</span>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                                <h6>
                                                    <i class="bi bi-calendar" style="color: #634730 !important;"></i>
                                                    <span class="pl-2">{{ $date }}</span>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                                <h6>
                                                    <i class="bi bi-clock-fill" style="color: #634730 !important;"></i>
                                                    <span class="pl-2">{{ $duration }}</span>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                                <h6>
                                                    <i class="bi bi-geo-alt-fill" style="color: #634730 !important;"></i>
                                                    <span class="pl-2">{{ $location }}</span>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                                <h6>
                                                    <i class="bi bi-people-fill" style="color: #634730 !important;"></i>
                                                    <span class="pl-2">99+ Diundang</span>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                                <h6>
                                                    <i class="bi bi-cash-coin" style="color: #634730 !important;"></i>
                                                    <span class="pl-2">Rp {{ $htm }}</span>
                                                </h6>
                                            </div>

                                            <hr>

                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('event-detail-view', 1) }}" class="btn btn-primary">
                                                    <i class="bi bi-binoculars-fill" style="color: #fff !important;"></i>
                                                    <span class="pl-2">Lihat 360 View</span>
                                                </a>
                                                <a href="{{ route('cart') }}" class="btn btn-primary">
                                                    <i class="bi bi-basket2-fill" style="color: #fff !important;"></i>
                                                    <span class="pl-2">Pesan</span>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
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

    </script>
@endsection
