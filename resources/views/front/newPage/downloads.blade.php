@extends('front.layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
        style="background-image:url('');">
        <div class="container">
            <h2>Home / Downloads </h2>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a>
                    <span>
                        <i class="fa fa-angle-double-right"></i> Downloads
                    </span>
                </li>
            </ul>
        </div>
    </div>
</div>
    <div class="container">
        <h2 class="my-4 text-center">Download Area</h2>

        <!-- Search form -->
        <div class="mb-4 d-flex justify-content-end">
            <form method="GET" action="{{ route('downloads') }}" class="d-flex">
                <input type="text" name="search" placeholder="Search Downloads" class="form-control me-2"
                    style="max-width: 300px;" />
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>

        <!-- Display Downloads -->
        @if (count($downloads) > 0)
            <ul class="list-group">
            @foreach ($downloads as $download)
                <li class="list-group-item d-flex justify-content-between align-items-center shadow-sm"
                style="border: 1px solid #ddd; margin-bottom: 10px;">
                <div>
                    <h5 class="mb-1 font-weight-bold">{{ $download->title }}</h5>
                    {{-- <p class="mb-1">{{ $download->description }}</p> --}}
                </div>
                <a href="{{ asset('storage/' . $download->file_path) }}" class="btn btn-primary"
                    download>Download</a>
                </li>
            @endforeach
            </ul>
        @else
            <div class="alert alert-info text-center">
                No downloads available.
            </div>
        @endif
    </div>
@endsection
