@extends('front.layout.app')

@section('content')
<div class="container">
    <h2>Download Area</h2>

    <!-- Search form -->
    <div class="mb-4">
        <form method="GET" action="{{ route('downloads') }}">
            <input type="text" name="search" placeholder="Search Downloads" class="form-control" />
        </form>
    </div>

    <!-- Display Downloads -->
    @if(count($downloads) > 0)
        <div class="row">
            @foreach($downloads as $download)
                <div class="col-md-4">
                    <div class="download-item">
                        <h4>{{ $download->title }}</h4>
                        <p>{{ $download->description }}</p>
                        <a href="{{ asset('storage/' . $download->file_path) }}" class="btn btn-primary" download>Download</a>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No downloads available.</p>
    @endif
</div>
@endsection
