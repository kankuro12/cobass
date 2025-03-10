@php
    $data =
        getSetting('contact') ??
        (object) [
            'map' => '',
            'email' => '',
            'phone' => '',
            'addr' => '',
            'others' => [],
        ];
@endphp
<footer class="footer-area">
    <div class="footer-top bg-img default-overlay pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>ABOUT US</h4>
                        </div>
                        <div class="footer-about">
                            <p>

                                We are committed to providing a transformative education that fosters academic
                                excellence and personal growth. Our inclusive community encourages creativity, critical
                                thinking, and lifelong learning, preparing students for success in an ever-changing
                                world.

                            </p>
                            <div class="f-contact-info">
                                <div class="single-f-contact-info">
                                    <i class="fa fa-home"></i>
                                    <span>{{ $data->addr }}</span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-envelope"></i>
                                    <span><a href="#">{{ $data->email }}</a></span>
                                </div>
                                <div class="single-f-contact-info">
                                    <i class="fa fa-phone"></i>
                                    <span> {{ $data->phone }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>QUICK LINK</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                <li><a href="{{ route('news.list') }}">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer-widget negative-mrg-30 mb-40">
                        <div class="footer-title">
                            <h4>COURSES</h4>
                        </div>
                        <div class="footer-list">
                            <ul>
                                <li><a href="#">Under Graduate Programmes </a></li>
                                <li><a href="#">Graduate Programmes </a></li>
                                <li><a href="#">Diploma Courses</a></li>
                                <li><a href="#">Others Programmes</a></li>
                                <li><a href="#">Short Courses</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer-widget mb-40">
                        <div class="footer-title">
                            <h4>Our Location</h4>
                        </div>
                        <div class="maps">
                            <div class="position-relative rounded overflow-hidden h-100">
                                <iframe
                                    src="https://maps.google.com/maps?q={{ $data->map }}&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" height="300px" width="100%" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom pt-15 pb-15">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="copyright">
                        <p>
                            Copyright ©
                            <a href="#">Need Technosoft PvtLtd</a>
                            . All Right Reserved.
                        </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-menu-social">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Privecy & Policy</a></li>
                                <li><a href="#">Terms & Conditions of Use</a></li>
                            </ul>
                        </div>
                        <div class="footer-social">
                            <ul>
                                <li><a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a class="youtube" href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a class="twitter" href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a class="google-plus" href="#"><i class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
