@extends('front.layout.app')
@section('content')
@include('front.newPage.popup')

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
    <div class="choose-us section-padding-1">
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
                            <p>{{ $data->why }}</p>
                        </div>
                        <div class="about-btn mt-45">
                            <a class="default-btn" href="{{'about' }}">ABOUT US</a>
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
    </div>

    @include('front.newPage.courseview')
    @include('front.newpage.achieveview')
    @include('front.newPage.register')
    @include('front.newPage.teachersview')
    @include('front.newPage.eventview')
    @include('front.newPage.newsview')
@endsection
