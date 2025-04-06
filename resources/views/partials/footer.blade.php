<!-- Footer -->
<!-- Site footer with quick links, social media, location and copyright -->
<footer class="bg-dark footer">
    <div class="container-fluid">
        <div class="row mb-5">
            <!-- Logo & About Column -->
            <div class="col-lg-4">
                <div class="pe-lg-4">
                    <div class="footer-logos d-flex align-items-center mb-4">
                        <img src="images/bits-logo.jpg" alt="BITS Logo" class="rounded-circle me-3" height="70">
                        <img src="images/logo-light.png" alt="SLSU Logo" height="70">
                    </div>
                    <p class="text-white-50 mb-4">
                        Empowering students through technology and innovation at Southern Leyte State University
                        -
                        Bontoc Campus.
                    </p>
                </div>
            </div>

            <!-- Quick Links Column -->
            <div class="col-lg-2 col-md-6">
                <div class="footer-list">
                    <p class="text-white mb-3 footer-list-title fw-bold">Quick Links</p>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('about') }}"><i class="mdi mdi-chevron-right me-2"></i>About Us</a></li>
                        <li><a href="{{ route('services') }}"><i class="mdi mdi-chevron-right me-2"></i>Services</a></li>
                        <li><a href="{{ route('gallery') }}"><i class="mdi mdi-chevron-right me-2"></i>Gallery</a></li>
                        <li><a href="{{ route('contact') }}"><i class="mdi mdi-chevron-right me-2"></i>Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Social Media Column -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-list">
                    <p class="text-white mb-3 footer-list-title fw-bold">Connect With Us</p>
                    <ul class="list-unstyled social-links">
                        <li class="mb-2">
                            <a href="https://www.facebook.com/slsubitsofficial/" target="_blank">
                                <i class="mdi mdi-facebook me-2"></i>BITS Official Page
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="mailto:bits.slsu.bc@gmail.com">
                                <i class="mdi mdi-email me-2"></i>bits.slsu.bc@gmail.com
                            </a>
                        </li>
                        <li>
                            <a href="tel:09989791809">
                                <i class="mdi mdi-phone me-2"></i>0998 979 1809
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Location Column -->
            <div class="col-lg-3 col-md-6">
                <div class="footer-list">
                    <p class="text-white mb-3 footer-list-title fw-bold">Location</p>
                    <div class="text-white-50">
                        <p class="mb-2"><i class="mdi mdi-map-marker me-2"></i>San Ramon, Bontoc</p>
                        <p>Southern Leyte, Philippines</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Row -->
        <div class="row pt-4 border-top border-secondary">
            <div class="col-lg-6 col-md-12">
                <p class="text-white-50 mb-md-2 mb-lg-0">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script> BITS SLSU-BC. All rights reserved.
                </p>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="text-md-end text-white-50">
                    <span>Developed with <i class="mdi mdi-heart text-danger"></i> by Mark Steven B.
                        Peligro</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
