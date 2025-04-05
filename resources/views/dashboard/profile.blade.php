@extends('dashboard.layouts.utama')

@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profil</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Profil</li>
                </ol>
            </nav>
        </div>

        <section class="section profile">
            <div class="row">

                <div class="col-xl-9">
                    <div class="row">

                        <div class="col-12 mb-3">
                            <img src="{{ asset('assets/img/dashboard/profile-background.png') }}" alt="background-profile" style="max-width: 100%;">
                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body pt-3">

                                    <ul class="nav nav-tabs nav-tabs-bordered">
                                        <li class="nav-item">
                                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#data-diri">Data Diri</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#ubah-profil">Ubah Data Diri</button>
                                        </li>
                                        <li class="nav-item">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#kategori-produk">Kategori Produk</button>
                                        </li>
                                    </ul>

                                    <div class="tab-content pt-2">

                                        <div class="tab-pane fade show active data-diri" id="data-diri">
                                            <h5 class="card-title py-2 mb-0">Alamat</h5>
                                            <p class="small fst-italic mb-0">Jl. Ring Road Utara, Kaliwaru, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>

                                            <h5 class="card-title py-3 mb-0">Data Diri</h5>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label label-primary">NIK</div>
                                                <div class="col-lg-9 col-md-8">102932843781289</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label label-primary">Nama</div>
                                                <div class="col-lg-9 col-md-8">Fahrur Rozi</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label label-primary">Kontak</div>
                                                <div class="col-lg-9 col-md-8">08123456789</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label label-primary">Email</div>
                                                <div class="col-lg-9 col-md-8">email@mail.com</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 label label-primary">Website</div>
                                                <div class="col-lg-9 col-md-8">sanggarjogja.com</div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade ubah-profil pt-3" id="ubah-profil">
                                            <form>
                                                <div class="row mb-3">
                                                    <label for="profileImage" class="col-md-4 col-lg-3 col-form-label label-primary">Profile Image</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <img src="{{ asset('assets/img/dashboard/anggota-1.png') }}" alt="Profile">
                                                    </div>
                                                </div>

                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-lg-3 col-form-label label-primary">NIK</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="nik" type="text" class="form-control" id="nik" value="102932843781289">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-lg-3 col-form-label label-primary">Nama</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="nama-lengkap" type="text" class="form-control" id="nama-lengkap" value="Fahrur Rozi">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="about" class="col-md-4 col-lg-3 col-form-label label-primary">Alamat</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <textarea name="alamat" class="form-control" id="alamat" style="height: 100px">Jl. Ring Road Utara, Kaliwaru, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</textarea>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-lg-3 col-form-label label-primary">Kontak</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="kontak" type="text" class="form-control" id="kontak" value="08123456789">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-lg-3 col-form-label label-primary">Email</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="email" type="text" class="form-control" id="email" value="email@mail.com">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-4 col-lg-3 col-form-label label-primary">Website</label>
                                                    <div class="col-md-8 col-lg-9">
                                                        <input name="website" type="text" class="form-control" id="website" value="sanggarjogja.com">
                                                    </div>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                </div>
                                            </form>

                                        </div>

                                        <div class="tab-pane fade pt-3" id="kategori-produk">

                                            <div class="row">
                                                @for ($i = 0; $i < 3; $i++)
                                                    <div class="col-4">
                                                        <div class="card card-inside">
                                                            <div class="p-2">
                                                                <img src="{{ asset('assets/img/dashboard/card-image-1.png') }}" class="card-img-top" alt="...">
                                                            </div>
                                                            <div class="card-body px-2 pb-2">
                                                                <h6 class="card-title py-2 mb-0">Tari Kecak</h6>
                                                                <p class="card-text pt-0 pb-2 text-description mb-2">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <h6 class="mb-0">Rp 150.000</h6>
                                                                    <a href="{{ route('cart') }}" class="btn btn-primary py-0">Pesan</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endfor
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                            <img src="{{ asset('assets/img/dashboard/anggota-1.png') }}" alt="profile-picture" class="rounded-circle">
                            <h2>Fahrur Rozi</h2>
                            <div class="social-links mt-2">
                                <a href="javascript:void(0)">08123456789 | <i class="bi bi-whatsapp"></i></a>
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
