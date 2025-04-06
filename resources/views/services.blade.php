@extends('layouts.app')

@section('content')
    <!-- Services Section -->
    <!-- Technology services and solutions offered by BITS -->
    <section class="section bg-gradient" id="services">
        <div class="bg-shape">
            <img src="images/bg-shape.png" alt="" class="img-fluid mx-auto d-block">
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4 mt-4">
                        <h3 class="mb-3 text-light">Services</h3>
                        <p class="text-muted">We provide innovative technological solutions and services to enhance
                            the
                            academic experience of our SLSU Bontoc Campus community.</p>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card features-box ">
                        <a href="https://sis.southernleytestateu.edu.ph/" target="_blank">
                            <div class="features-img mb-4">
                                <img src="{{ asset('images/icons/antenna.png') }}" alt="">
                            </div>
                            <h4 class="mb-2">Student Information System</h4>
                            <p class="text-muted">A comprehensive platform for managing student records,
                                enrollment,
                                grades
                                and academic information efficiently and securely.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card features-box ">
                        <a href="#services">
                            <div class="features-img mb-4">
                                <img src="images/icons/layers.png" alt="">
                            </div>
                            <h4 class="mb-2">QR Code Attendance</h4>
                            <p class="text-muted">Modern attendance tracking system using QR codes to accurately
                                monitor
                                and record student presence in classes and events.</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card features-box ">
                        <a href="#services">
                            <div class="features-img mb-4">
                                <img src="{{ asset('images/icons/browsercode.png') }}" alt="">
                            </div>
                            <h4 class="mb-2">Web Development</h4>
                            <p class="text-muted">Custom web solutions and applications development for campus
                                needs.
                            </p>
                        </a>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- end container-fluid -->
    </section>
    <!-- features end -->

    @include('partials.contact')
@endsection
