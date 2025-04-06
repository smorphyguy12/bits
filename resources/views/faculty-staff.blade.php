@extends('layouts.app')

@section('content')
    <!-- Faculty and Staff Section -->
    <!-- Profile cards of teaching and administrative staff -->
    <section class="section bg-gradient" id="faculty-staff">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="title text-center mb-4">
                        <h3 class="text-white">Faculty & Staff</h3>
                        <p class="text-white-50">Meet our dedicated educators and staff members who guide and
                            support our students.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card faculty-card">
                        <div class="card-body text-center">
                            <div class="avatar-wrapper mb-3">
                                <img src="images/faculty-staff/SHERWIN G. CADAY - Program Chair.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image">
                            </div>
                            <h4>Sherwin G. Caday</h4>
                            <p class="text-muted mb-3">Program Chair</p>
                            <div class="social-links">
                                <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-linkedin"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-email"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card faculty-card">
                        <div class="card-body text-center">
                            <div class="avatar-wrapper mb-3">
                                <img src="images/faculty-staff/REXAL S. TOLEDO - Instructor.jpg"
                                    class="rounded-circle img-thumbnail" alt="profile-image">
                            </div>
                            <h4>Rexal S. Toledo</h4>
                            <p class="text-muted mb-3">Instructor</p>
                            <div class="social-links">
                                <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-linkedin"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-email"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card faculty-card">
                        <div class="card-body text-center">
                            <div class="avatar-wrapper mb-3">
                                <img src="images/faculty-staff/JUNNIE RYH M. SUMACOT - Instructor.jpeg"
                                    class="rounded-circle img-thumbnail" alt="profile-image">
                            </div>
                            <h4>Junnie Ryh M. Sumacot</h4>
                            <p class="text-muted mb-3">Instructor</p>
                            <div class="social-links">
                                <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-linkedin"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-email"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card faculty-card">
                        <div class="card-body text-center">
                            <div class="avatar-wrapper mb-3">
                                <img src="images/faculty-staff/JULIUS AMFIL E. DUBLADO - Instructor.jpeg"
                                    class="rounded-circle img-thumbnail" alt="profile-image">
                            </div>
                            <h4>Julius Amfil E. Dublado</h4>
                            <p class="text-muted mb-3">Instructor</p>
                            <div class="social-links">
                                <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-linkedin"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-email"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card faculty-card">
                        <div class="card-body text-center">
                            <div class="avatar-wrapper mb-3">
                                <img src="images/faculty-staff/CHRISTINE A. MAKILANG - Visiting Instructor.png"
                                    class="rounded-circle img-thumbnail" alt="profile-image">
                            </div>
                            <h4>Christine A. Makilang</h4>
                            <p class="text-muted mb-3">Instructor</p>
                            <div class="social-links">
                                <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-linkedin"></i></a>
                                <a href="#" class="text-reset"><i class="mdi mdi-email"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.contact')
@endsection
