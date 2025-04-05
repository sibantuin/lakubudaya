<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="{{ route('dashboard') }}" class="logo d-flex justify-content-center align-items-center">
            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="" style="max-height: 30px !important">
            {{-- <span class="d-none d-lg-block"></span> --}}
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item dropdown">

                <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">2</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                    <li class="dropdown-header">
                        Ada 2 pemberitahuan baru
                        <a href="javascript:void(0)">
                            <span class="badge rounded-pill bg-primary p-2 ms-2">Lihat semua</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-exclamation-circle text-warning"></i>
                        <div>
                            <h4>Undangan Pertunjukan</h4>
                            <p>Anda mendapatkan undangan untuk tampil di Bali</p>
                            <p>30 menit lalu</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="notification-item">
                        <i class="bi bi-check-circle text-success"></i>
                        <div>
                            <h4>Pembelian Berhasil</h4>
                            <p>Anda berhasil membeli tiket tari kecak</p>
                            <p>2 jam lalu</p>
                        </div>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li class="dropdown-footer">
                        <a href="javascript:void(0)">Lihat semua pemberitahuan</a>
                    </li>

                </ul>

            </li>

            <li class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/landingpages/anggota-1.png') }}" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Fahrur Rozi</span>
                </a>

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile pt-0">

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('profile') }}">
                            <i class="bi bi-person"></i>
                            <span>Profil</span>
                        </a>
                    </li>

                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('home') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Keluar</span>
                        </a>
                    </li>


                </ul>

            </li>

        </ul>
    </nav>

</header>
