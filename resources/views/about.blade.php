@extends('layouts.app')

@section('content')
    <!-- About Section -->
    <!-- Organization overview including mission, vision, goals and program outcomes -->
    <section class="section bg-gradient">
        <div class="bg-shape">
            <img src="images/bg-shape.png" alt="" class="img-fluid mx-auto d-block">
        </div>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h3 class="text-light mt-4">About BITS</h3>
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
        </div>
    </section>
    <!-- mission vision end -->

    <!-- Goals Section -->
    <section class="section bg-light">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-4">
                        <h3 class="text-dark">Goals and Objectives</h3>
                        <p class="text-muted">Our goals and objectives for the Information Technology program</p>
                    </div>
                </div>
            </div>

            <div class="row">
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


    <!-- Partner Organizations -->
    <!-- Logos of partner institutions and organizations -->
    <section class="bg-light mb-4">
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

    @include('partials.contact')
@endsection
