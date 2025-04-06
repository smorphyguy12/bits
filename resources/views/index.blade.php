@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <!-- Main landing section with organization title, description and call-to-action -->
    <section class="bg-home bg-gradient" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="home-title mo-mb-20">
                                <h1 class="mb-4 text-white">Bontoc Information Technology Society</h1>
                                <p class="text-white-50 home-desc mb-5">Comprehensive Systems Applications for
                                    Mighty
                                    Kingfishers</p>
                                <div class="mt-4">
                                    <a href="#contact" class="btn btn-blue mb-2">Join BITS Today</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                            @include('partials.bg-logo')
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
        </div>
    </section>
    <!-- home end -->

    <!-- Video Section -->
    <!-- Promotional video showcasing BSIT program at Bontoc campus -->
    <section id="discover" class="video-section section">
        <div class="container">
            <div class="section-header">
                <h3>Discover BSIT Bontoc</h3>
                <p class="text-muted">Experience excellence in IT education</p>
            </div>
            <div class="video-container">
                <video controls poster="{{ asset('video/thumbnail/poster.png') }}" class="video-player">
                    <source src="{{ asset('video/BSIT Bontoc Promotional.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
    <!-- video section end -->

    @include('partials.contact')
@endsection
