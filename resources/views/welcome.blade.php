@extends('layouts.app')

@section('content')
    @include('partials.chatbot')

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

    <!-- About Section -->
    <!-- Organization overview including mission, vision, goals and program outcomes -->
    <section class="section bg-light" id="about">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3>About BITS</h3>
                        <p class="text-muted">Empowering students through technology and innovation</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 mb-3">
                    <div class="card about-card h-100">
                        <div class="card-body text-center">
                            <i class="mdi mdi-script-outline display-4 text-primary mb-3"></i>
                            <h4 class="mt-0 mb-4">Mission</h4>
                            <p class="text-muted">To foster a dynamic community of IT enthusiasts dedicated to
                                advancing technological literacy, promoting innovation, and developing
                                industry-ready professionals through collaborative learning, hands-on projects, and
                                community service, while upholding ethical practices in information technology.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                    <div class="card about-card h-100 m">
                        <div class="card-body text-center">
                            <i class="mdi mdi-eye-outline display-4 text-primary mb-3"></i>
                            <h4 class="mt-0 mb-4">Vision</h4>
                            <p class="text-muted">To be the leading student organization in Southern Leyte that
                                empowers future IT professionals, drives technological innovation, and contributes
                                to the digital transformation of our local community while fostering excellence,
                                creativity, and ethical leadership in the field of information technology.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card about-card">
                        <div class="card-body">
                            <div class="mb-4">
                                <h5>Goal</h5>
                                <p class="text-muted">The Information Technology program commits to produce
                                    competitive graduates in the field of Information Technology</p>
                            </div>

                            <div class="mb-4">
                                <h5>Program Objectives</h5>
                                <ol class="text-muted">
                                    <li>To provide students with technical and managerial skills in the field of
                                        Information Technology;</li>
                                    <li>To train students to be well-versed on application development,
                                        installation, operation, maintenance and administration;</li>
                                    <li>To expose students in advance information technology in diverse learning
                                        environments;</li>
                                    <li>To develop students' skills in areas of research, development and extension;
                                        and</li>
                                    <li>To imbibe in the students moral, ethical and social values needed in the
                                        field of information technology.</li>
                                </ol>
                            </div>

                            <div>
                                <h5>Graduate Outcomes</h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Code</th>
                                                <th>Outcome</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>IT01</td>
                                                <td>Apply knowledge of computing, science, and mathematics
                                                    appropriate to the discipline.</td>
                                            </tr>
                                            <tr>
                                                <td>IT02</td>
                                                <td>Understand best practices and standards and their applications.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>IT03</td>
                                                <td>Analyze complex problems, and identify and define the computing
                                                    requirements appropriate to its solution.</td>
                                            </tr>
                                            <tr>
                                                <td>IT04</td>
                                                <td>Identify and analyze user needs and consider them in the
                                                    selection, creation, evaluation and administration of
                                                    computer-based systems.</td>
                                            </tr>
                                            <tr>
                                                <td>IT05</td>
                                                <td>Design, implement, and evaluate computer-based systems,
                                                    processes, components, or programs to meet desired needs and
                                                    requirements under various constraints.</td>
                                            </tr>
                                            <tr>
                                                <td>IT06</td>
                                                <td>Integrate IT-based solutions into the user environment
                                                    effectively.</td>
                                            </tr>
                                            <tr>
                                                <td>IT07</td>
                                                <td>Apply knowledge with current techniques, skills, tools and
                                                    practices necessary for the IT profession.</td>
                                            </tr>
                                            <tr>
                                                <td>IT08</td>
                                                <td>Function effectively as a member or leader of a development team
                                                    recognizing the different roles within a team to accomplish a
                                                    common goal.</td>
                                            </tr>
                                            <tr>
                                                <td>IT09</td>
                                                <td>Assist in the creation of an effective IT project plan.</td>
                                            </tr>
                                            <tr>
                                                <td>IT10</td>
                                                <td>Communicate effectively with the computing community and with
                                                    society at large about complex computing activities through
                                                    logical writing, presentations, and clear instructions.</td>
                                            </tr>
                                            <tr>
                                                <td>IT11</td>
                                                <td>Analyze the local and global impact of computing information
                                                    technology on individuals, organizations, and society.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission vision end -->

    <!-- Partner Organizations -->
    <!-- Logos of partner institutions and organizations -->
    <section>
        <div class="container-fluid">
            <div class="clients p-4 bg-white">
                <div class="row">
                    <div class="col-md-3">
                        <div class="client-images">
                            <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="client-images">
                            <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="client-images">
                            <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="client-images">
                            <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                        </div>
                    </div>
                </div> <!-- end row -->
            </div>
        </div> <!-- end container-fluid -->
    </section>
    <!-- clients end -->

    <!-- Gallery Section -->
    <!-- Filterable gallery showcasing facilities, events and alumni -->
    <section class="section" id="gallery">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3>Gallery</h3>
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

    <!-- Faculty and Staff Section -->
    <!-- Profile cards of teaching and administrative staff -->
    {{-- <section class="section p-0 bg-gradient" id="faculty-staff">
        <div class="bg-shape">
            <img src="images/bg-shape.png" alt="" class="img-fluid mx-auto d-block">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title text-center mb-4 mt-5">
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
    </section> --}}

    <!-- Student Officers Section -->
    <!-- Current BITS organization officers and representatives -->
    {{-- <section class="section bg-light" id="officers">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="title text-center mb-4">
                        <h3>Student Officers</h3>
                        <p class="text-muted">Our student leaders who drive initiatives and represent the BITS
                            organization.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card officer-card">
                        <div class="card-body text-center">
                            <div class="officer-avatar mb-3">
                                <img src="images/officers/Lasala,Mark Angelo-President.png" class="rounded-circle"
                                    alt="profile-image">
                            </div>
                            <h4>Mark Angelo Lasala</h4>
                            <p class="designation mb-3">President</p>
                            <div class="social-links">
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-facebook"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card officer-card">
                        <div class="card-body text-center">
                            <div class="officer-avatar mb-3">
                                <img src="images/officers/Flores,Jessica- Secretary.png" class="rounded-circle"
                                    alt="profile-image">
                            </div>
                            <h4>Jessica Flores</h4>
                            <p class="designation mb-3">Secretary</p>
                            <div class="social-links">
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-facebook"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card officer-card">
                        <div class="card-body text-center">
                            <div class="officer-avatar mb-3">
                                <img src="images/officers/Bermiso,Marievel-Treasurer.png" class="rounded-circle"
                                    alt="profile-image">
                            </div>
                            <h4>Marievel Bermiso</h4>
                            <p class="designation mb-3">Treasurer</p>
                            <div class="social-links">
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-facebook"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card officer-card">
                        <div class="card-body text-center">
                            <div class="officer-avatar mb-3">
                                <img src="images/officers/Cabahug,Danica Marie-2A Representative.png"
                                    class="rounded-circle" alt="profile-image">
                            </div>
                            <h4>Danica Marie Cabahug</h4>
                            <p class="designation mb-3">Representative</p>
                            <div class="social-links">
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-facebook"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card officer-card">
                        <div class="card-body text-center">
                            <div class="officer-avatar mb-3">
                                <img src="images/officers/Camarista,John Brunz-1A Representative.png"
                                    class="rounded-circle" alt="profile-image">
                            </div>
                            <h4>John Brunz Camarista</h4>
                            <p class="designation mb-3">Representative</p>
                            <div class="social-links">
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-facebook"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card officer-card">
                        <div class="card-body text-center">
                            <div class="officer-avatar mb-3">
                                <img src="images/officers/Daniel,Rufa Mae-3B Representative.png" class="rounded-circle"
                                    alt="profile-image">
                            </div>
                            <h4>Rufa Mae Daniel</h4>
                            <p class="designation mb-3">Representative</p>
                            <div class="social-links">
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-facebook"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card officer-card">
                        <div class="card-body text-center">
                            <div class="officer-avatar mb-3">
                                <img src="images/officers/Oclarit,Annalou-2B Representative.png" class="rounded-circle"
                                    alt="profile-image">
                            </div>
                            <h4>Annalou Oclarit</h4>
                            <p class="designation mb-3">Representative</p>
                            <div class="social-links">
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-facebook"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card officer-card">
                        <div class="card-body text-center">
                            <div class="officer-avatar mb-3">
                                <img src="images/officers/Valenzuela,Klaire-1B Representative.png" class="rounded-circle"
                                    alt="profile-image">
                            </div>
                            <h4>Klaire Valenzuela</h4>
                            <p class="designation mb-3">Representative</p>
                            <div class="social-links">
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-facebook"></i></a>
                                <a href="#" class="btn btn-light btn-sm rounded-circle text-reset"><i
                                        class="mdi mdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Services Section -->
    <!-- Technology services and solutions offered by BITS -->
    <section class="section-sm p-0 bg-gradient" id="services">
        <div class="container-fluid">
            <div class="bg-shape">
                <img src="images/bg-shape.png" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4 pb-1 mt-5">
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

    <!-- News and Events Section -->
    <!-- Latest updates, announcements and upcoming activities -->
    <section class="section bg-light" id="news">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3>Latest News & Events</h3>
                        <p class="text-muted">Stay updated with BITS activities and announcements</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ asset('images/news/slsu_hour.jpg') }}" class="card-img-top" alt="Event 1">
                        <div class="card-body">
                            <h5 class="card-title">𝐒𝐋𝐒𝐔 𝐇𝐎𝐔𝐑</h5>
                            <p class="card-text text-muted">Mighty Kingfishers, get ready to engage in a meaningful
                                discussion</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">𝐌𝐚𝐫𝐜𝐡 𝟏𝟗, 𝟐𝟎𝟐𝟓, 𝐚𝐭 𝟏:𝟎𝟎 𝐏𝐌!</small>
                                <a href="#news" class="btn btn-sm btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more news/event cards -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <!-- Contact form and organization contact details -->
    <section class="section pb-0 bg-gradient" id="contact">
        <div class="bg-shape">
            <img src="images/bg-shape-light.png" alt="" class="img-fluid mx-auto d-block">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center mb-4">
                        <h3 class="text-white">Have any Questions ?</h3>
                        <p class="text-white-50">Please fill out the following form and we will get back to you
                            shortly
                        </p>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="contact-content text-center mt-4">
                        <div class="contact-icon mb-2">
                            <i class="mdi mdi-email-outline text-info h2"></i>
                        </div>
                        <div class="contact-details text-white">
                            <h6 class="text-white">E-mail</h6>
                            <p class="text-white-50">bits.slsu.bc@gmail.com</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="contact-content text-center mt-4">
                        <div class="contact-icon mb-2">
                            <i class="mdi mdi-cellphone-iphone text-info h2"></i>
                        </div>
                        <div class="contact-details">
                            <h6 class="text-white">Phone</h6>
                            <p class="text-white-50">09989791809</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-md-4">
                    <div class="contact-content text-center mt-4">
                        <div class="contact-icon mb-2">
                            <i class="mdi mdi-map-marker text-info h2"></i>
                        </div>
                        <div class="contact-details">
                            <h6 class="text-white">Address</h6>
                            <p class="text-white-50">San Ramon, Bontoc, Southern Leyte</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="custom-form p-5 bg-white">
                        <span id="error-msg"></span>
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Enter your name...">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                            placeholder="Enter your email...">
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="subject" class="form-label">Subject</label>
                                        <input name="subject" id="subject" type="text" class="form-control"
                                            placeholder="Enter Subject...">
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="comments" class="form-label">Message</label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Enter your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-lg-12 text-end">
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-blue"
                                        value="Send Message">
                                </div>
                            </div>
                            <!-- end row -->
                        </form>
                    </div>
                    <!-- end custom-form -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </section>
    <!-- contact end -->

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
