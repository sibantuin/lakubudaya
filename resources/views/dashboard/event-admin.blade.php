@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Event</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Event</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row align-items-top">

                @for ($i = 0; $i < 6; $i++)
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="p-2">
                                <img src="{{ asset('assets/img/dashboard/card-image-1.png') }}" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body px-2 pb-2">
                                <h6 class="card-title py-2 mb-0">Tari Kecak</h6>
                                <p class="card-text pt-0 pb-2 text-description mb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h6 class="mb-0">Rp 150.000</h6>
                                    <button class="btn btn-primary py-0">Pesan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </section>

    </main>
@endsection

@section('javascript')
    <script>

    </script>
@endsection
