@extends('front.layout.app')
@section('content')
    @php
        $about_img = getSetting('about_img',true)

    @endphp
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url('');">
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
                            @php
                                $visibleFacilities = collect($facility)
                                    ->filter(fn ($facilityItem) => filled(trim($facilityItem->title ?? '')))
                                    ->values();
                            @endphp

                            @foreach ($visibleFacilities as $facilities)
                                <div class="col-lg-6 col-md-6">
                                    <div class="single-about-chose-us mb-95">
                                        <div class="about-choose-img">
                                            @if (!empty($facilities->icon))
                                                <img src="{{ asset($facilities->icon) }}" alt="{{ $facilities->title }}"
                                                    style="width: 50px; height: 50px;">
                                            @endif
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
                        <img src="{{ asset($about_img) }}" alt="About Us">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('front.newPage.add.teachersview')
    @include('front.newPage.add.achview')
@endsection


