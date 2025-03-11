@php
    $logo = getSetting('top_logo', true);
@endphp
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

@php
    $courses = \App\Models\Course::all();
@endphp
<header class="header-area">
    <div class="header-top bg-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-7 col-12 col-sm-8 d-flex justify-content-end">
                    <div class="header-contact">
                        <ul>
                            <li><i class="fa fa-phone"></i>
                                <span style="margin-left: 5px">
                                    {{ $data->phone }}
                                </span>
                            </li>
                            <li><i class="fa fa-envelope"></i>
                                <span style="margin-left: 5px">
                                    {{ $data->email }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="row" style="border-bottom: 1px solid #29AE6A">
            <div class="col-md-2 d-none d-md-block"></div>
            <div class="col-lg-4 col-md-6 col-8">
                <a href="{{ route('index') }}">
                    <div class="logo p-2" style="max-height: 100px">
                        <img alt="" src="{{ asset($logo) }}" style="height:100%; width: 100%">
                    </div>
                </a>
            </div>
            <div class="col-2 d-md-none"></div>
        </div>
    </div>
    <div class="header-bottom sticky-bar clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-6 col-8">
                    <div class="menu-cart-wrap">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('index') }}"> HOME </a>

                                    </li>
                                    <li><a href="{{ route('events.list') }}">Events</a></li>
                                    <li><a href="{{ route('news.list') }}"> News </a></li>
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
            <div class="mobile-menu-area mt-3">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active" style="background-color: #29AE6A">
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
