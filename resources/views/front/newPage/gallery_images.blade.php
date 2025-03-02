@extends('front.layout.app')

@section('content')
<div class="container py-5">
    <h2 class="text-center">{{ $galleryType->name }}</h2>
    <div class="row">
        @foreach ($galleryType->galleries as $gallery)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset($gallery->file) }}" class="card-img-top" alt="Gallery Image">
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
