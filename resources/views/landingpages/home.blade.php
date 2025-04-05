@extends('landingpages.layouts.utama')

@section('content')
<main>

    {{-- Banner --}}
    <section class="slider-area" id="spa-beranda">
        <div class="slider-active">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-12">

                            <div class="hero__caption d-none d-sm-block" style="margin-top: 200px !important;">
                                <p data-animation="fadeInLeft" data-delay="0.4s">Bersama Lakubudaya, kita rayakan budaya Indonesia!</p>
                                <h4 data-animation="fadeInLeft" data-delay="0.2s" style="font-size: 50px; margin-bottom: 0px">
                                    Mau lihat <b>pentas seni apa hari ini?</b>
                                </h4>
                            </div>

                            <div class="hero__caption d-block d-sm-none" style="margin-top: 200px !important;">
                                <p data-animation="fadeInLeft" data-delay="0.4s" style="font-size: 18px;">Bersama Lakubudaya, kita rayakan budaya Indonesia!</p>
                                <h2 data-animation="fadeInLeft" data-delay="0.2s" style="font-size: 30px; margin-bottom: 0px">
                                    Mau lihat <b>pentas seni apa hari ini?</b>
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Find Event --}}
    <div class="services-area" style="margin-top: -70px !important">
        <div class="container">
            <div class="row justify-content-sm-center">

                <div class="col-12">
                    <div class="single-services form-row">

                        <div class="form-group col-12 col-md-4">
                            <label for="inputCity" style="color: #fff">Cari Event</label>
                            <input type="text" name="event" class="single-input single-input-custom-banner" placeholder="Tari Kecak">
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="inputZip" style="color: #fff">Tempat</label>
                            <input type="text" name="place" class="single-input single-input-custom-banner" placeholder="Indonesia">
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="inputState" style="color: #fff">Bulan</label>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select" "="">
                                    <select style="display: none;">
                                        <option value="1">Januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Trending --}}
    <div class="courses-area section-padding40 fix" id="spa-tiket">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-tittle text-left mb-55">
                        <h2>Trending Saat Ini</h2>
                    </div>
                </div>
            </div>

            <div class="courses-actives">

                @foreach ($eventData as $data)
                    <div class="properties pb-20">
                        <div class="properties__card shadow-lg p-2 mb-5 bg-white">
                            <div class="properties__img overlay1-custom pt-3 pl-3 pr-3">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/img/dashboard/'.$data['photo']) }}" alt="" style="max-height: 329px !important"></a>
                            </div>
                            <div class="properties__caption pt-4">

                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <p class="mb-2" style="font-size: 14px !important">
                                            <span>
                                                <i class="fa fa-star" aria-hidden="true" style="font-size: 18px !important; color: #DEC907 !important"></i>
                                            </span>
                                            {{ $data['rate'] }}
                                        </p>
                                    </div>
                                    <div class="restaurant-name">
                                        <p class="mb-2" style="font-size: 14px !important">
                                            <span>
                                                <i class="fa fa-clock" aria-hidden="true" style="font-size: 16px !important; color: black !important"></i>
                                            </span>
                                            {{ $data['duration'] }}
                                        </p>
                                    </div>
                                    <div class="price">
                                        <p class="mb-2" style="font-size: 14px !important">
                                            <span>
                                                <i class="fa fa-users" aria-hidden="true" style="font-size: 18px !important; color: black !important"></i>
                                            </span>
                                            90+ Diundang
                                        </p>
                                    </div>

                                </div>

                                <h3>{{ mb_strimwidth(html_entity_decode($data['name']), 0, 25, "...") }}</h3>

                                <p style="font-size: 14px !important; color: black !important">
                                    Jangan lewatkan event ini!
                                </p>

                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="price">
                                        <span style="font-size: 14px !important; color: black !important">HTM</span>
                                    </div>
                                    <div class="price">
                                        <span style="font-size: 14px !important; color: black !important">Rp {{ $data['htm'] }}</span>
                                    </div>
                                </div>

                                <a href="javascript:void(0)" class="border-btn border-btn2 mt-4">Lihat Selengkapnya</a>

                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    {{-- Coba Fitur Undang Pertunjukan --}}
    <section class="about-area3 fix mb-5" style="background-color: #F0EBCE !important" id="spa-undang">
        <div class="support-wrapper align-items-center">
            <div class="right-content3">
                <div class="right-img">
                    <img src="{{ asset('assets/img/landingpages/undang-pertunjukan.png') }}" alt="">
                </div>
            </div>
            <div class="left-content3">

                <div class="section-tittle section-tittle2 mb-0 mb-md-20">
                    <div class="front-text">
                        <h2 class="">Ingin undang pertunjukan kerumahmu?</h2>
                    </div>
                </div>

                <div class="single-features">
                    <div class="features-icon">
                        <img src="{{ asset('assets/img/icon/right-icon.svg') }}" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Coba fitur "Undang pertunjukan" di Lakubudaya</p>
                    </div>
                </div>

                <div class="single-features mb-25 mb-md-15">
                    <div class="features-caption pl-0">
                        <a href="javascript:void(0)" class="btn btn3 ml-0">Undang Pertunjukan</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Hot Offers --}}
    <div class="topic-area section-padding40 pb-0">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-tittle text-left mb-55">
                        <h2>Penawaran Terbaik</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="{{ asset('assets/img/landingpages/hot-offer-1.png') }}" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a class="offer" href="javascript:void(0)" style="color: rgba(255, 255, 255, 0.1)">Ambil penawaran</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-topic text-center mb-30">
                        <div class="topic-img">
                            <img src="{{ asset('assets/img/landingpages/hot-offer-2.png') }}" alt="">
                            <div class="topic-content-box">
                                <div class="topic-content">
                                    <h3><a class="offer" href="javascript:void(0)" style="color: rgba(255, 255, 255, 0.1)">Ambil penawaran</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Rekomendasi Event --}}
    <div class="courses-area section-padding40 fix">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-tittle text-left mb-55">
                        <h2>Rekomendasi Event</h2>
                    </div>
                </div>
            </div>

            <div class="courses-actives">

                @foreach ($recomendationEventData as $data)
                    <div class="properties pb-20">
                        <div class="properties__card shadow-lg p-2 mb-5 bg-white">
                            <div class="properties__img overlay1-custom pt-3 pl-3 pr-3">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/img/dashboard/'.$data['photo']) }}" alt="" style="max-height: 329px !important"></a>
                            </div>
                            <div class="properties__caption pt-4">

                                <ul class="blog-info-link mb-3">
                                    <li><i class="fa fa-calendar"></i> {{ $data['date'] }}</li>
                                </ul>

                                <h3>{{ mb_strimwidth(html_entity_decode($data['name']), 0, 25, "...") }}</h3>

                                <p style="font-size: 14px !important; color: black !important">
                                    Jangan lewatkan event ini!
                                </p>

                                <a href="javascript:void(0)" class="border-btn border-btn2 mt-0">Lihat Selengkapnya</a>

                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    {{-- Ingin Belajar Tarian Budaya --}}
    <section class="about-area3 fix mb-5 pb-0" style="background-color: #F0EBCE !important" id="spa-kursus">
        <div class="support-wrapper align-items-center">
            <div class="left-content3">
                <div class="section-tittle section-tittle2 mb-0 mb-md-20">
                    <div class="front-text">
                        <h2 class="">Ingin belajar tarian budaya?</h2>
                    </div>
                </div>

                <div class="single-features">
                    <div class="features-icon">
                        <img src="{{ asset('assets/img/icon/right-icon.svg') }}" alt="">
                    </div>
                    <div class="features-caption">
                        <p>Coba fitur "Cari Kursus" di Lakubudaya</p>
                    </div>
                </div>

                <div class="single-features">
                    <div class="features-caption pl-0">
                        <a href="javascript:void(0)" class="btn btn3 ml-0">Cari Kursus</a>
                    </div>
                </div>

            </div>
            <div class="right-content3 mb-25 mb-md-15">
                <div class="right-img">
                    <img src="{{ asset('assets/img/landingpages/course-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    {{-- Blog --}}
    <div class="courses-area section-padding40 fix pt-5 pb-0" id="spa-blog">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-tittle text-left mb-55">
                        <h2>Artikel</h2>
                    </div>
                </div>
            </div>

            <div class="courses-actives">

                @foreach ($articleData as $data)
                    <div class="properties pb-20">
                        <div class="properties__card shadow-lg p-2 mb-5 bg-white">
                            <div class="properties__img overlay1-custom pt-3 pl-3 pr-3">
                                <a href="javascript:void(0)"><img src="{{ asset('assets/img/dashboard/'.$data['photo']) }}" alt=""></a>
                            </div>
                            <div class="properties__caption pt-4">

                                <ul class="blog-info-link mb-3">
                                    <li><a href="javascript:void(0)"><i class="fa fa-hashtag"></i> Kesenian, Melestarikan, Budaya</a></li>
                                </ul>

                                <h2>{{ mb_strimwidth(html_entity_decode($data['name']), 0, 30, "...") }}</h2>

                                <p style="font-size: 14px !important; color: black !important">
                                    {{ mb_strimwidth(html_entity_decode($data['description']), 0, 300, "...") }}
                                </p>

                                <a href="javascript:void(0)" class="border-btn border-btn2 mt-0">Baca Selengkapnya</a>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>

    {{-- Team --}}
    <section class="team-area section-padding40 fix pt-5" id="spa-tentang">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-tittle text-center mb-55">
                        <h2>Anggota Tim</h2>
                    </div>
                </div>
            </div>

            <div class="team-active">
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('assets/img/landingpages/anggota-1.png') }}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="javascript:void(0)">Fahrur Rozi</a></h5>
                        <p>Manager</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('assets/img/landingpages/anggota-2.png') }}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="javascript:void(0)">Raihan Rifaldi</a></h5>
                        <p>Developer</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('assets/img/landingpages/anggota-3.png') }}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="javascript:void(0)">Jalaluddin Rizqi</a></h5>
                        <p>Designer</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('assets/img/landingpages/anggota-4.png') }}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="javascript:void(0)">Nayla Ilma</a></h5>
                        <p>Marketer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Mengapa Lakubudaya --}}
    <section class="team-area section-padding40 fix pt-5" style="background-color: #F0EBCE !important">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-tittle text-center mb-55">
                        <h2>Mengapa Lakubudaya?</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <div class="section-tittle text-center mb-55">
                        <p>Lakubudaya merupakan aplikasi solutif yang menghubungkan antara pelaku budaya dengan kita sebagai masyarakat Indonesia. Dengan aplikasi ini, kita tidak perlu lagi untuk susah-susah mencari event kebudayaan.</p>
                    </div>
                </div>
            </div>

            <div class="team-active">
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('assets/img/landingpages/tokoh-1.png') }}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="javascript:void(0)">Sri Sultan Hamengkubuwono X</a></h5>
                        <p>Gubernur DI Yogyakarta</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('assets/img/landingpages/tokoh-2.png') }}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="javascript:void(0)">Caknun</a></h5>
                        <p>Budayawan</p>
                    </div>
                </div>
                <div class="single-cat text-center">
                    <div class="cat-icon">
                        <img src="{{ asset('assets/img/landingpages/tokoh-3.png') }}" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5><a href="javascript:void(0)">Nadiem Makarim</a></h5>
                        <p>Menteri Pendidikan dan Kebudayaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

@section('javascript')
<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $(document).ready(function(){
        $("#button-spa-beranda").click(function(){
            $('html, body').animate({
                scrollTop: eval($('#spa-beranda').offset().top - 250)
            }, 1000);
        });
        $("#button-spa-tiket").click(function(){
            $('html, body').animate({
                scrollTop: eval($('#spa-tiket').offset().top - 125)
            }, 1000);
        });
        $("#button-spa-undang").click(function(){
            $('html, body').animate({
                scrollTop: eval($('#spa-undang').offset().top - 100)
            }, 1000);
        });
        $("#button-spa-kursus").click(function(){
            $('html, body').animate({
                scrollTop: eval($('#spa-kursus').offset().top - 100)
            }, 1000);
        });
        $("#button-spa-blog").click(function(){
            $('html, body').animate({
                scrollTop: eval($('#spa-blog').offset().top - 100)
            }, 1000);
        });
        $("#button-spa-tentang").click(function(){
            $('html, body').animate({
                scrollTop: eval($('#spa-tentang').offset().top - 100)
            }, 1000);
        });
    });
</script>
@endsection
