@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Undang</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Undang</li>
                </ol>
            </nav>
        </div>

        <section class="section">

            <div class="row mb-3">
                <div class="col-12 col-md-4">
                    <select class="form-select">
                        <option selected="">Jenis Acara</option>
                        <option value="1">Tarian</option>
                        <option value="2">Kesenian</option>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <select class="form-select">
                        <option selected="">Kategori</option>
                        <option value="1">Tarian</option>
                        <option value="2">Kesenian</option>
                    </select>
                </div>
                <div class="col-12 col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari sanggar... (nama, location, dan lainnya)">
                        <span class="input-group-text btn btn-primary" id="cari-sanggar">
                            <i class="bi bi-search"></i>
                            Cari
                        </span>
                    </div>
                </div>
            </div>

            <div class="row align-items-top">

                @foreach ($listData as $data)
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="p-2">
                                <img src="{{ asset('assets/img/dashboard/'.$data['photo']) }}" class="card-img-top" alt="..." style="max-height: 150px !important">
                            </div>
                            <div class="card-body px-2 pb-2">
                                <div class="d-flex justify-content-between align-items-center" style="font-size: 12px !important">
                                    <span>
                                        <i class="bi bi-star-fill" style="color: #a09105 !important;"></i>
                                        <span class="pl-2">{{ $data['rate'] }}</span>
                                    </span>
                                    <span>
                                        <i class="bi bi-people-fill" style="color: black !important;"></i>
                                        <span class="pl-2">99+ diundang</span>
                                    </span>
                                </div>
                                <h6 class="card-title py-2 mb-0">{{ mb_strimwidth(html_entity_decode($data['name']), 0, 30, "...") }}</h6>
                                <p class="card-text pt-0 pb-2 text-description mb-2">{{ mb_strimwidth(html_entity_decode($data['description']), 0, 200, "...") }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">
                                        <i class="bi bi-cash-coin"></i>
                                    </h6>
                                    <h6 class="mb-0">Rp {{ $data['htm'] }}</h6>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">
                                        <i class="bi bi-geo"></i>
                                    </h6>
                                    <h6 class="mb-0">{{ mb_strimwidth(html_entity_decode($data['location']), 0, 30, "...") }}</h6>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <a href="{{ route('invite-form', $data['id']) }}" class="btn btn-primary">
                                        <i class="bi bi-people-fill" style="color: #fff !important;"></i>
                                        <span class="pl-2">Undang</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

    </main>
@endsection

@section('javascript')
    <script>

    </script>
@endsection
