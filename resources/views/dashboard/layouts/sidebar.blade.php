<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-heading">Menu User Umum</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'dashboard' ? 'nav-link-active' : '' }}" href="{{ route('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Beranda</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-stars"></i><span>Pertunjukkan</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content {{ Request::segment(1) == 'event' || Request::segment(1) == 'invite' ? '' : 'collapse' }}" data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('event') }}" class="{{ Request::segment(1) == 'event' ? 'nav-link-active' : '' }}">
                        <i class="bi bi-circle"></i><span>Event</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('invite') }}" class="{{ Request::segment(1) == 'invite' ? 'nav-link-active' : '' }}">
                    <i class="bi bi-circle"></i><span>Undang</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'course' ? 'nav-link-active' : '' }}" href="{{ route('course') }}">
                <i class="bi bi-person-up"></i>
                <span>Kursus</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'cart' ? 'nav-link-active' : '' }}" href="{{ route('cart') }}">
                <i class="bi bi-cart4"></i>
                <span>Keranjang</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'faq' ? 'nav-link-active' : '' }}" href="{{ route('faq') }}">
                <i class="bi bi-patch-question-fill"></i>
                <span>Bantuan</span>
            </a>
        </li>

        <li class="nav-heading">Menu Administrator</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'statistic' ? 'nav-link-active' : '' }}" href="{{ route('statistic') }}">
                <i class="bi bi-pie-chart-fill"></i>
                <span>Statistic</span>
            </a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'event-admin' ? 'nav-link-active' : '' }}" href="{{ route('event-admin') }}">
                <i class="bi bi-stars"></i>
                <span>Event</span>
            </a>
        </li> --}}

        <li class="nav-heading">Menu Sanggar</li>

        <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'invitation' ? 'nav-link-active' : '' }}" href="{{ route('invitation') }}">
                <i class="bi bi-envelope-paper-heart-fill"></i>
                <span>Undangan</span>
            </a>
        </li>

        {{-- <li class="nav-item">
            <a class="nav-link {{ Request::segment(1) == 'event-talent' ? 'nav-link-active' : '' }}" href="{{ route('event-talent') }}">
                <i class="bi bi-stars"></i>
                <span>Event</span>
            </a>
        </li> --}}

    </ul>

</aside>
