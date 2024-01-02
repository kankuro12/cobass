@extends('front.layout.app')
@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95"
            style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/breadcrumb-bg-6.jpg');">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .
                </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contact-map mr-70">
                        <div id="map"></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form">
                        <div class="contact-title mb-45">
                            <h2>Stay <span>Connected</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis do eiusmod tempor indunt ut labore et dolore
                                magna aliqua.</p>
                        </div>
                        <form id="contact-form" action="assets/php/mail.php" method="post">
                            <input name="name" placeholder="Name*" type="text">
                            <input name="email" placeholder="Email*" type="email">
                            <input name="subject" placeholder="Subject*" type="text">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-info-area bg-img pt-180 pb-140 default-overlay"
        style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/contact-info.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                        </div>
                        <p>Uttara, Dhaka, Bangladesh <br>Opposite site Of Yellow.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa-solid fa-mobile"></i></span>
                        </div>
                        <div class="contact-info-phn">
                            <div class="info-phn-title">
                                <span>Phone : </span>
                            </div>
                            <div class="info-phn-number">
                                <p>+091111111111</p>
                                <p>+091111111111</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <a href="#">education@email.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pt-130 pb-130">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <a href="#"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function init() {
            var mapOptions = {
                zoom: 11,
                scrollwheel: false,
                center: new google.maps.LatLng(40.709896, -73.995481),
                styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#e9e9e9"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f5f5f5"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#dedede"
                            },
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                                "saturation": 36
                            },
                            {
                                "color": "#333333"
                            },
                            {
                                "lightness": 40
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{
                                "color": "#f2f2f2"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{
                                "color": "#fefefe"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    }
                ]
            };
            var mapElement = document.getElementById('map');
            var map = new google.maps.Map(mapElement, mapOptions);
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.709896, -73.995481),
                map: map,
                icon: 'assets/img/icon-img/2.png',
                animation: google.maps.Animation.BOUNCE,
                title: 'Snazzy!'
            });
        }
        google.maps.event.addDomListener(window, 'load', init);
    </script>
@endsection
