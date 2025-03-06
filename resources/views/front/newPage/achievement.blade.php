@extends('front.layout.app')

@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95"
            style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Achievements</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h2 class="text-center">Achievements</h2>
        <div class="row">
            @foreach ($achievements as $achievement)
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $achievement->image) }}" class="card-img-top" alt="Achievement">
                        <div class="card-body">
                            <h5 class="card-title">{{ $achievement->title }}</h5>
                            <p class="card-text">{{ $achievement->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
