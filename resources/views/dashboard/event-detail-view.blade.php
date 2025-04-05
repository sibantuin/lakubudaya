@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Event</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('event') }}">Event</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('event-detail', 'event-1') }}">Detail</a></li>
                    <li class="breadcrumb-item active">View 360</li>
                </ol>
            </nav>
        </div>

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card mb-2">
                        <div class="card-body p-3 text-center">
                            <h5 class="card-title">Preview 360 Pertunjukan</h5>

                            <img src="{{ asset('assets/img/dashboard/card-invite-1.png') }}" class="card-img-top" alt="...">
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
