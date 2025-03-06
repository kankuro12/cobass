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
                    <div class="card custom-card">
                        <img src="{{ asset('storage/' . $achievement->image) }}" class="card-img-top animated-img" alt="Achievement">
                        <div class="card-body">
                            <h5 class="card-title">{{ $achievement->title }}</h5>
                            <p class="card-text">{{ $achievement->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .custom-card {
            height: 400px; /* Adjust the height as needed */
            width: 250px; /* Adjust the width as needed */
            text-align: center;
        }
        .custom-card img {
            height: 200px; /* Adjust the image height as needed */
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }
        .custom-card img:hover {
            transform: scale(1.1);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-top: 10px;
        }
        .card-text {
            font-size: 1rem;
            color: #555;
        }
    </style>
@endsection
