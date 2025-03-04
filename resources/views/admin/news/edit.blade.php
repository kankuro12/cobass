@extends('admin.layout.app')

@section('content')
    <h1>Edit News</h1>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $news->title) }}" required>
        </div>

        <div class="form-group">
            <label for="feature_image">Feature Image</label>
            <input type="file" name="feature_image" id="feature_image" class="form-control">
            @if ($news->feature_image)
                <img src="{{ asset($news->feature_image) }}" width="100" alt="Current Image">
            @endif
        </div>

        <div class="form-group">
            <label for="short_content">Short Content</label>
            <textarea name="short_content" id="short_content" class="form-control" rows="4" required>{{ old('short_content', $news->short_content) }}</textarea>
        </div>

        <div class="form-group">
            <label for="extra_content">Extra Content</label>
            <textarea name="extra_content" id="extra_content" class="form-control" rows="4" required>{{ old('extra_content', $news->extra_content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update News</button>
    </form>
@endsection
