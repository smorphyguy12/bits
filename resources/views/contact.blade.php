@extends('layouts.app')

@section('content')
    <!-- Contact Section -->
    <!-- Contact form and organization contact details -->
    <section class="section bg-gradient" id="contact">
        <div class="bg-shape">
            <img src="images/bg-shape-light.png" alt="" class="img-fluid mx-auto d-block">
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center mt-4 mb-4">
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
@endsection
