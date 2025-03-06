@extends('front.newPage.app')
@section('b-items')
    <li class="breadcrumb-item active" aria-current="page">
        Gallery
    </li>
@endsection
@section('meta')
@endsection
@section('pagecss')
    <style>
        .singlegallery {
            background: #f0f1fc;
            border-radius: 10px;
            overflow: hidden;
            position: relative;
            transition: transform 0.3s ease-in-out;
        }

        .singlegallery:hover {
            transform: scale(1.05);
        }

        .singlegallery .overlay {
            position: absolute;
            top: 0px;
            bottom: 0px;
            left: 0px;
            right: 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.2);
            color: white;
            font-weight: 600;
            font-size: 20px;
            display: none;
        }

        .singlegallery:hover .overlay {
            display: flex;
        }

        .singlegallery {
            position: relative;
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0;
            overflow: hidden;
        }

        .singlegallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease-in-out;
        }

        .singlegallery:hover img {
            transform: scale(1.1);
        }

        .singlegallery .overlay {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            text-align: center;
            padding: 5px 0;
        }
    </style>
@endsection
@section('title')
    - Gallery
@endsection
@section('b-title')
    Gallery
@endsection
@section('pagecontent')
    <div class="row">
        @foreach ($galleryTypes as $galleryType)
            <a class="col-md-3 col-6" href="{{ route('gallery.show', $galleryType->id) }}">
                <div class="singlegallery">
                    <img src="{{ asset($galleryType->icon ?? 'default.jpg') }}" alt="">
                    <div class="overlay">
                        {{ $galleryType->name }}
                    </div>
                </div>
                <h5>
                    <p class="mt-2 mb-0">{{ $galleryType->name }}</p>
                </h5>
            </a>
        @endforeach
    </div>
@endsection
