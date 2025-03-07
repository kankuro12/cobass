    {{-- @php
    $logo = getSetting('top_logo' , true );
    @endphp --}}
    @php
        $courses = \App\Models\Course::all();
    @endphp
    <header class="header-area">
        <div class="header-top bg-img"
            style="background-image:url('https://clipart-library.com/new_gallery/504773_straight-white-line-png.png');">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 col-12 col-sm-8">
                        <div class="header-contact">
                            <ul>
                                <li><i class="fa fa-phone"></i> +98 558 547 589</li>
                                <li><i class="fa fa-envelope"></i><a href="#">arniko@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5 col-12 col-sm-4">
                        <div class="login-register">
                            <ul>
                                <li><a href="login-register.html">Login</a></li>
                                <li><a href="login-register.html">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom sticky-bar clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-4">
                        <div class="logo">
                            <a href="index.html">
                                {{-- <img alt="" src="{{asset($logo)}}"> --}}
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-8">
                        <div class="menu-cart-wrap">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="{{ route('index') }}"> HOME </a>

                                        </li>
                                        <li><a href="{{ route('event') }}"> News & Events </a></li>
                                        <li><a href="{{ route('achievements') }}"> Achievements </a></li>
                                        <li><a href="{{ route('notice') }}"> Notice </a></li>

                                        <li><a href="#"> COURSES </a>
                                            <ul class="submenu">
                                                @if (isset($courses))
                                                    @foreach ($courses as $course)
                                                        <li><a
                                                                href="{{ route('course.show', ['id' => $course->id]) }}">{{ $course->name }}</a>
                                                        </li>
                                                    @endforeach
                                                @endif

                                            </ul>
                                        </li>

                                        <li><a href="{{ route('downloads') }}"> download</a></li>
                                        <li><a href="{{ route('gallery') }}"> Gallery</a></li>

                                        <li><a href="{{ route('about') }}"> About us </a>
                                        </li>
                                        <li><a href="{{ route('contact') }}"> CONTACT </a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{ route('index') }}"> HOME </a>

                                </li>
                                <li><a href="{{ route('event') }}"> News & Events </a></li>
                                <li><a href="{{ route('notice') }}"> Notice </a></li>

                                <li><a href="#"> COURSES </a>
                                    <ul class="submenu">

                                        <li><a href="{{ route('course') }}">B.Tech</a></li>
                                        <li><a href="{{ route('course') }}">BSC CSIT</a></li>
                                        <li><a href="{{ route('course') }}">BE</a></li>
                                    </ul>
                                </li>
                                <li><a href="course.html"> download</a></li>
                                <li><a href="{{ route('gallery') }}"> Gallery</a></li>

                                <li><a href="{{ route('about') }}"> About us </a>

                                </li>
                                <li><a href="{{ route('contact') }}"> CONTACT </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
