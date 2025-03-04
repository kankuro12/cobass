@extends('front.layout.app')

@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95"
        style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
        <div class="container">
            <h2>Albums</h2>
        </div>
    </div>
<div class="breadcrumb-bottom">
    <div class="container">
        <ul>
            <li><a href="#">Gallery</a> <span><i class="fa fa-angle-double-right"></i>Albums</span></li>
        </ul>
    </div>
</div>
</div>
<div class="container py-5">
    <h2 class="text-center mb-4">{{ $galleryType->name }}</h2>

    <!-- Fancy Back Arrow -->
    <a href="{{ url()->previous() }}" class="btn btn-link mb-4">
        <i class="fas fa-arrow-left"></i>
    </a>

    <div class="row">
        @foreach ($galleryType->galleries as $gallery)
            <div class="col-md-3 mb-4">
                <div class="card border-0 shadow-sm">
                    <a href="{{ asset($gallery->file) }}" data-lightbox="gallery">
                        {{-- <data-title="{{ $gallery->name ?? 'No Title' }}"> --}}
                        <img src="{{ asset($gallery->file) }}" class="card-img-top rounded" alt="Gallery Image">
                    </a>
                    <div class="card-body text-center">
                        <h5 class="card-title text-truncate" style="max-width: 100%">{{ $gallery->name ?? 'No Title' }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
