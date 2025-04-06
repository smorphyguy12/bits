<!-- Navigation Bar -->
<!-- Navigation Bar with logo, links, and responsive design -->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky-dark" id="sticky">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="#">
            <img src="images/logo-light.png" alt="" class="logo-light" height="55" />
            <img src="images/logo-dark.png" alt="" class="logo-dark" height="70" width="200" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ $title == 'Home' ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link {{ $title == 'About' ? 'active' : '' }}">About</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gallery') }}" class="nav-link {{ $title == 'Gallery' ? 'active' : '' }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('faculty-staff') }}" class="nav-link {{ $title == 'Faculty & Staff' ? 'active' : '' }}">Faculty/Staff</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('officers') }}" class="nav-link {{ $title == 'Officers' ? 'active' : '' }}">Officers</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services') }}" class="nav-link {{ $title == 'Services' ? 'active' : '' }}">Services</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('news') }}" class="nav-link {{ $title == 'News' ? 'active' : '' }}">News</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link {{ $title == 'Contact' ? 'active' : '' }}">Contact</a>
                </li>
            </ul>
            <a class="logo text-uppercase" href="#">
                <img src="images/bits-logo.jpg" alt="BITS Logo" class="logo-light rounded-circle" height="63" />
                <img src="images/bits-logo.jpg" alt="BITS Logo" class="logo-dark rounded-circle" height="63" />
            </a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
