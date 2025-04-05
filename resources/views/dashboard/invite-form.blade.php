@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Undang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('invite') }}">Undang</a></li>
                    <li class="breadcrumb-item active">Formulir Undangan</li>
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
                                            <p class="card-text mb-3">{{ $description }}</p>

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
                                                    <span class="pl-2">{{ $owner }}</span>
                                                </h6>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                                <h6>
                                                    <i class="bi bi-clock-fill" style="color: #634730 !important;"></i>
                                                    <span class="pl-2">Since 2010</span>
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

                                            <div class="col-12">
                                                <form class="row g-3">
                                                    <div class="col-md-12">
                                                        <label class="form-label">Undangan Untuk Acara</label>
                                                        <input type="text" class="form-control" id="nama-penerima" placeholder="Masukan nama acara Anda">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Alamat Acara</label>
                                                        <textarea class="form-control" style="height: 100px" placeholder="Masukan alamat untuk perform"></textarea>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Estimasi Jumlah Penonton</label>
                                                        <input type="text" class="form-control" id="no-hp" placeholder="Masukan estimasi jumlah penonton">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Nomor HP PIC Acara</label>
                                                        <input type="text" class="form-control" id="no-hp" placeholder="Masukan nomor yang dapat dihubungi">
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label class="form-label">Keterangan Tambahan</label>
                                                        <textarea class="form-control" style="height: 100px" placeholder="Masukan keterangan atau detail lainnya"></textarea>
                                                    </div>
                                                </form>
                                            </div>

                                            <hr>

                                            <div class="text-center">
                                                <a href="{{ route('cart') }}" class="btn btn-primary">
                                                    <i class="bi bi-basket2-fill" style="color: #fff !important;"></i>
                                                    <span class="pl-2">Ajukan Undangan</span>
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
