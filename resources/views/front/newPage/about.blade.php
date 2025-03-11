@extends('front.layout.app')
@section('content')
@php
    $about = getSetting('about') ?? (object)[
        'img' => '',
    ]
@endphp
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
        style="background-image:url('');">
        <div class="container">
            <h2>Home / About Us </h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                    <span>
                        <i class="fa fa-angle-double-right"></i> About Us
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="choose-area bg-img pt-40" style="background-image:url('');">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="about-chose-us pt-40">
                    <div class="row">
                        @foreach ($facility as $facilities)
                        <div class="col-lg-6 col-md-6">
                            <div class="single-about-chose-us mb-95">
                                <div class="about-choose-img">
                                    <img src="{{asset($facilities->icon)}}" alt="" style="width: 50px; height: 50px;">
                                </div>
                                <div class="about-choose-content text-light-blue">
                                      <h3>{{ $facilities->title }}</h3>
                            <p>{{ $facilities->description }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-40">
                <div class="about-img">
                    <img src="{{ asset($about->img) }}" alt="About Us">
                </div>
            </div>
        {{-- </div>\
        div class="video-area bg-img pt-270 pb-270" style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/banner/video.jpg');">
    <div class="video-btn-2">
        <a class="video-popup" href="https://www.youtube.com/watch?v=AeFjWZjz6Bg">
            <img class="animated" src="https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/viddeo-btn.png" alt="">
        </a>
    </div> --}}
</div>
</div>
@include('front.newPage.add.teachersview')
@include('front.newPage.add.achview')
@endsection

