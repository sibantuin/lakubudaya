@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Beranda</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-8">
                    <div class="row">

                        <div class="col-xxl-6 col-md-6 col-12">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title">Pembelian</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-cart"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>154</h6>
                                            <span class="text-muted small pt-2 ps-1">Tiket Pertunjukan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-md-6 col-12">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Biaya</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-currency-dollar"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6>Rp 1.500.000</h6>
                                            <span class="text-muted small pt-2 ps-1">Untuk 154 Pertunjukan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pb-0">
                                    <h5 class="card-title">Berita Terbaru <span>| Hari Ini</span></h5>
                                    <div class="news">

                                        @foreach ($articleData as $data)
                                            <div class="post-item clearfix">
                                                <img src="{{ asset('assets/img/dashboard/'.$data['photo']) }}" alt="" style="max-height: 60px !important">
                                                <h4><a href="javascript:void(0)">{{ mb_strimwidth(html_entity_decode($data['name']), 0, 50, "...") }}</a></h4>
                                                <p>{{ mb_strimwidth(html_entity_decode($data['description']), 0, 150, "...") }}</p>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Kegiatan Terakhir</h5>
                            <div class="activity">

                                <div class="activity-item d-flex">
                                    <div class="activite-label">10 menit</div>
                                    <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                    <div class="activity-content">
                                        Pembelian tiket <b>Tari Kecak</b>
                                    </div>
                                </div>

                                <div class="activity-item d-flex">
                                    <div class="activite-label">2 hari</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        <b>Tari Kecak</b> menerima undangan Anda
                                    </div>
                                </div>

                                <div class="activity-item d-flex">
                                    <div class="activite-label">4 hari</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        Mengundang <b>Tari Kecak</b> untuk tampil di <b>Yogya</b>
                                    </div>
                                </div>

                                <div class="activity-item d-flex">
                                    <div class="activite-label">7 hari</div>
                                    <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
                                    <div class="activity-content">
                                        Mengubah data diri
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
