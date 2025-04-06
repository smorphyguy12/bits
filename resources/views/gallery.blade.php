@extends('layouts.app')

@section('content')
    <!-- Gallery Section -->
    <!-- Filterable gallery showcasing facilities, events and alumni -->
    <section class="section bg-gradient " id="gallery">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4 mt-4">
                        <h3 class="text-white">Gallery</h3>
                        <p class="text-muted">Capturing memorable moments and milestones of the BITS community.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 justify-content-center">
                    <div class="text-center filter-menu mb-4">
                        <a href="javascript: void(0);" class="filter-menu-item active" data-rel="all">
                            <i class="mdi mdi-image-multiple me-1"></i>All
                        </a>
                        <a href="javascript: void(0);" class="filter-menu-item" data-rel="compLab">
                            <i class="mdi mdi-desktop-classic me-1"></i>Computer Laboratory
                        </a>
                        <a href="javascript: void(0);" class="filter-menu-item" data-rel="alumni">
                            <i class="mdi mdi-account-group me-1"></i>Alumni
                        </a>
                    </div>
                </div>
            </div>

            <div class="row filterable-content g-4">
                <div class="col-sm-6 col-xl-3 filter-item all compLab">
                    <div class="card gallery-card">
                        <div class="card-body p-0">
                            <a href="images/comp-lab/IMG_20240422_172805.jpg" class="image-popup">
                                <div class="gallery-img-wrapper">
                                    <img src="images/comp-lab/IMG_20240422_172805.jpg" class="img-fluid"
                                        alt="Computer Laboratory">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-content">
                                            <h5 class="text-white mb-0">Computer Laboratory 2</h5>
                                            <span class="badge bg-primary mt-2">Computer Lab</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 filter-item all compLab">
                    <div class="card gallery-card">
                        <div class="card-body p-0">
                            <a href="{{ asset('images/comp-lab/IMG_20240422_173414.jpg') }}" class="image-popup">
                                <div class="gallery-img-wrapper">
                                    <img src="{{ asset('images/comp-lab/IMG_20240422_173414.jpg') }}" class="img-fluid"
                                        alt="Computer Laboratory">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-content">
                                            <h5 class="text-white mb-0">Computer Laboratory 2</h5>
                                            <span class="badge bg-primary mt-2">Computer Lab</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 filter-item all alumni">
                    <div class="card gallery-card">
                        <div class="card-body p-0">
                            <a href="{{ asset('images/alumni/Chico, Cyrelle T.jpg') }}" class="image-popup">
                                <div class="gallery-img-wrapper">
                                    <img src="{{ asset('images/alumni/Chico, Cyrelle T.jpg') }}" class="img-fluid"
                                        alt="Chico, Cyrelle T.">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-content">
                                            <h5 class="text-white mb-0">Chico, Cyrelle T.</h5>
                                            <span class="badge bg-primary mt-2">Alumni</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 filter-item all alumni">
                    <div class="card gallery-card">
                        <div class="card-body p-0">
                            <a href="{{ asset('images/alumni/Meode, Hazel Jay.jpeg') }}" class="image-popup">
                                <div class="gallery-img-wrapper">
                                    <img src="{{ asset('images/alumni/Meode, Hazel Jay.jpeg') }}" class="img-fluid"
                                        alt="Meode, Hazel Jay">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-content">
                                            <h5 class="text-white mb-0">Meode, Hazel Jay</h5>
                                            <span class="badge bg-primary mt-2">Alumni</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 filter-item all alumni">
                    <div class="card gallery-card">
                        <div class="card-body p-0">
                            <a href="{{ asset('images/alumni/Nuñez, Edison S.jpg') }}" class="image-popup">
                                <div class="gallery-img-wrapper">
                                    <img src="{{ asset('images/alumni/Nuñez, Edison S.jpg') }}" class="img-fluid"
                                        alt="Nuñez, Edison S.">
                                    <div class="gallery-overlay">
                                        <div class="gallery-overlay-content">
                                            <h5 class="text-white mb-0">Nuñez, Edison S.</h5>
                                            <span class="badge bg-primary mt-2">Alumni</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- gallery end -->

    @include('partials.contact')
@endsection

@push('scripts')

<script>
    $(document).ready(function() {
        $(".image-popup").magnificPopup({
                type: "image",
                closeOnContentClick: !1,
                closeBtnInside: !1,
                mainClass: "mfp-with-zoom mfp-img-mobile",
                image: {
                    verticalFit: !0,
                    titleSrc: function(e) {
                        return e.el.attr("title");
                    },
                },
                gallery: {
                    enabled: !0
                },
                zoom: {
                    enabled: !0,
                    duration: 300,
                    opener: function(e) {
                        return e.find("img");
                    },
                },
            }),
            $(".filter-menu .filter-menu-item").click(function() {
                $(".filter-menu .filter-menu-item").removeClass("active"),
                    $(this).addClass("active");
            }),
            $(function() {
                var e;
                $(".filter-menu-item").click(function() {
                    (e = $(this).attr("data-rel")),
                    $(".filterable-content").fadeTo(100, 0),
                        $(".filterable-content .filter-item")
                        .not("." + e)
                        .fadeOut()
                        .removeClass(""),
                        setTimeout(function() {
                            $("." + e)
                                .fadeIn()
                                .addClass(""),
                                $(".filterable-content").fadeTo(300, 1);
                        }, 300);
                });
            });
    });
</script>
@endpush
