@extends('admin.layout.app')

@section('content')
    <h1>Add News</h1>
    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Feature Image</label>
            <input type="file" name="feature_image" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Short Content</label>
            <textarea name="short_content" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label>Extra Content</label>
            <textarea name="extra_content" class="form-control" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
