@extends('front.layout.app')
@section('content')
    {{-- <div class="slider-area">
        <div class="slider-active owl-carousel">
            <div class="single-slider slider-height-1 bg-img"
                style="background-image:url('https://images.pexels.com/photos/326055/pexels-photo-326055.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1')">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                            <div class="slider-content slider-animated-1 pt-230">
                                <h1 class="animated">Welcome To Arniko</h1>
                                <p class="animated">This is slider Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation </p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                    <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-single-img slider-animated-1">
                        <img class="animated" src="https://htmldemo.net/glaxdu/glaxdu/assets/img/slider/single-slide-1.png"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height-1 bg-img" style="background-image:url(assets/img/slider/slider-1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                            <div class="slider-content slider-animated-1 pt-230">
                                <h1 class="animated">MakeYour Own World</h1>
                                <p class="animated">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation </p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="about-us.html">ABOUT US</a>
                                    <a class="animated default-btn btn-white-color" href="contact.html">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-single-img slider-animated-1">
                        <img class="animated" src="https://htmldemo.net/glaxdu/glaxdu/assets/img/slider/single-slide-1.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@include('front.newPage.slideview')

    <!-- Include jQuery, FontAwesome & Owl Carousel JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>

    <script>
        $(document).ready(function () {
            var owl = $('.slider-active');

            owl.owlCarousel({
                items: 1,
                loop: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                nav: false,
                dots: true, // Added beautiful dots
                smartSpeed: 1200, // Smooth and fast transitions
                animateOut: 'fadeOut', // Smooth fading effect
                animateIn: 'fadeIn', // Smooth fade-in effect
            });

            // Custom Navigation
            $('.slider-prev').click(function () {
                owl.trigger('prev.owl.carousel');
            });

            $('.slider-next').click(function () {
                owl.trigger('next.owl.carousel');
            });
        });
    </script>

    <!-- Custom CSS for Smoother and Beautiful Look -->
    <style>
        /* Overlay for better text visibility */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7));
        }

        /* Slider Area */
        .slider-area {
            position: relative;
            overflow: hidden;
        }

        /* Smooth slider transition */
        .single-slider {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: left;
            background-size: cover;
            background-position: center;
        }

        /* Text Styling */
        .slider-content h1 {
            font-size: 50px;
            color: #fff;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .slider-content p {
            font-size: 18px;
            color: #eee;
            max-width: 600px;
        }

        /* Buttons */
        .slider-btn a {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 50px;
            margin-right: 10px;
            text-transform: uppercase;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-green-color {
            background: #28a745;
            color: #fff;
        }

        .btn-green-color:hover {
            background: #218838;
        }

        .btn-white-color {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            border: 1px solid #fff;
        }

        .btn-white-color:hover {
            background: #fff;
            color: #000;
        }

        /* Navigation Buttons */
        .slider-prev, .slider-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            border: none;
            padding: 12px 18px;
            font-size: 20px;
            cursor: pointer;
            border-radius: 50%;
            transition: 0.3s ease-in-out;
            z-index: 1000;
        }

        .slider-prev { left: 20px; }
        .slider-next { right: 20px; }

        .slider-prev:hover, .slider-next:hover {
            background: rgba(0, 0, 0, 0.9);
        }

        /* Owl Carousel Dots */
        .owl-dots {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
        }

        .owl-dot {
            display: inline-block;
            width: 12px;
            height: 12px;
            margin: 0 5px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            transition: 0.3s;
        }

        .owl-dot.active {
            background: #fff;
            width: 15px;
            height: 15px;
        }
    </style>
    {{-- <div class="choose-us section-padding-1">
        <div class="container-fluid">
            <div class="row no-gutters choose-negative-mrg">
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-light-blue">
                        <div class="choose-img">
                            <img class="animated" src="https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/service-1.png"
                                alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Scholarship Facility</h3>
                            <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-yellow">
                        <div class="choose-img">
                            <img class="animated" src="https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/service-2.png"
                                alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Scholarship Facility</h3>
                            <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-blue">
                        <div class="choose-img">
                            <img class="animated" src="https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/service-1.png"
                                alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Scholarship Facility</h3>
                            <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-green">
                        <div class="choose-img">
                            <img class="animated" src="https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/service-1.png"
                                alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Scholarship Facility</h3>
                            <p>magna aliqua. Ut enim ad minim veniam conse ctetur adipisicing elit, sed do exercitation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>About <span>Us</span></h2>
                            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip </p>
                        </div>
                        <p>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven iam, quis
                            nostrud exer citation ullamco laboris nisi ut perspiciatis unde omnis iste natus error sit
                            voluptate.</p>
                        <div class="about-btn mt-45">
                            <a class="default-btn" href="about-us.html">ABOUT US</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-img default-overlay">
                        <img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/banner/banner-1.jpg" alt="">
                        <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                            <img class="animated" src="assets/img/icon-img/video.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

   @include('front.newPage.courseview')
    <div class="achievement-area pt-130 pb-115">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Achievement</span></h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-one">
                        <div class="count-img">
                            <img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/achieve-1.png"
                                alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">890</h2>
                            <span>STUDENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-two">
                        <div class="count-img">
                            <img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/achieve-2.png"
                                alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">670</h2>
                            <span>GRADUATE</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-three">
                        <div class="count-img">
                            <img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/achieve-3.png"
                                alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">160</h2>
                            <span>AWARD WINNING</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-four">
                        <div class="count-img">
                            <img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/achieve-4.png"
                                alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">200</h2>
                            <span>FACULTIES</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-wrap mt-45">
                <div class="testimonial-text-slider">
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt=""
                                src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay"
                                    style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor
                                        incidi dunt ut labore et dolore magna aliqua. Ut enim fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                    <div class="testi-info">
                                        <h5>AYESHA HOQUE</h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt=""
                                            src="		https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt=""
                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay"
                                    style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor
                                        incidi dunt ut labore et dolore magna aliqua. Ut enim fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum. Sed ut perspiciatis unde omnis</p>
                                    <div class="testi-info">
                                        <h5>Tayeb Rayed</h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt=""
                                            src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/testimonial/testi-b2.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay"
                                    style="background-image:url(assets/img/bg/testi.png);">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor
                                        incidi dunt ut labore et dolore magna aliqua. Ut enim fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui. Sed ut
                                        perspiciatis unde omnis iste natus error sit </p>
                                    <div class="testi-info">
                                        <h5>Robiul siddikee</h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="assets/img/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="assets/img/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay"
                                    style="background-image:url(assets/img/bg/testi.png);">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor
                                        incidi dunt ut labore et dolore magna aliqua. Ut enim fugiat nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                    <div class="testi-info">
                                        <h5>Modhu Dada</h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="assets/img/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-image-slider">
                    <div class="sin-testi-image">
                        <img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="	https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src=	"https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="	https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                    </div>
                </div>
            </div>
            <div class="testimonial-text-img">
                <img alt="" src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/testi-text.png">
            </div>
        </div>
    </div>
    <div class="register-area bg-img pt-130 pb-130"
        style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <div class="container">
            <div class="section-title-2 mb-75 white-text">
                <h2>Register <span>Now</span></h2>
                <p>Winter Admission Is Going On. We are announcing Special discount for winter batch 2019.</p>
            </div>
            <div class="register-wrap">
                <div id="register-3" class="mouse-bg">
                    <div class="winter-banner">
                        <img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/banner/regi-1.png" alt="">
                        <div class="winter-content">
                            <span>WINTER </span>
                            <h3>2019</h3>
                            <span>ADMISSION </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-8">
                        <div class="register-form">
                            <h4>Get A free Registration</h4>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="submit default-btn" type="submit">SUBMIT NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="register-1" class="mouse-bg"></div>
        <div id="register-2" class="mouse-bg"></div>
    </div>
    @include('front.newPage.teachersview')
    <div class="event-area bg-img default-overlay pt-130 pb-130"
        style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <div class="container">
            <div class="section-title mb-75">
                <h2><span>Our</span> Event</h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="event-active owl-carousel nav-style-1">
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">1st</span>
                            <span>Dec</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Aempor incididunt ut labore ejam.</a></h3>
                        <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Mascot Plaza ,Uttara</span>
                            </div>
                            <div class="event-meta">
                                <i class="fa fa-clock"></i>
                                <span>11:00 am</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">10th</span>
                            <span>Dec</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Global Conference on Business.</a></h3>
                        <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Shubastu ,Dadda</span>
                            </div>
                            <div class="event-meta">
                                <i class="fa fa-clock"></i>
                                <span>08:30 am</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">1st</span>
                            <span>Dec</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Academic Conference Maui.</a></h3>
                        <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Banasree ,Rampura</span>
                            </div>
                            <div class="event-meta">
                                <i class="fa fa-clock"></i>
                                <span>10:00 am</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">1st</span>
                            <span>Dec</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Social Sciences & Education.</a></h3>
                        <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Shubastu ,Badda</span>
                            </div>
                            <div class="event-meta">
                                <i class="fa fa-clock"></i>
                                <span>10:30 am</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-area pt-130 pb-100">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Newsfeed</span></h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">Testing is a great thing.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Adrin Azra</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 15</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar"></i> Jun, 24th 2018</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">A variation of the ordinary.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Tayeb Jon</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 12</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar"></i> Feb, 18th 2017</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">In publishing and graphic.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Rifat Al</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 20</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar"></i> Oct, 14th 2018</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">Learn English in ease.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i>Md Tamim</a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar"></i> Jun, 21th 2017</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
