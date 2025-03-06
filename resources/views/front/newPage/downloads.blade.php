@extends('front.layout.app')

@section('content')
<div class="container">
    <h2 class="my-4 text-center">Download Area</h2>

    <!-- Search form -->
    <div class="mb-4 d-flex justify-content-end">
        <form method="GET" action="{{ route('downloads') }}" class="d-flex">
            <input type="text" name="search" placeholder="Search Downloads" class="form-control me-2" style="max-width: 300px;" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>

    <!-- Display Downloads -->
    @if(count($downloads) > 0)
        <div class="row">
            @foreach($downloads as $download)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h4 class="card-title">{{ $download->title }}</h4>
                            <p class="card-text">{{ $download->description }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ asset('storage/' . $download->file_path) }}" class="btn btn-primary w-100" download>Download</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info text-center">
            No downloads available.
        </div>
    @endif
</div>
@endsection
