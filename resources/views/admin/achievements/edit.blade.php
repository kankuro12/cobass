@extends('admin.layout.app')

@section('content')
<div class="container">
    <h2>Edit Achievement</h2>
    <form action="{{ route('admin.achievements.update', $achievement->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $achievement->title }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required>{{ $achievement->description }}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            <img src="{{ asset('storage/' . $achievement->image) }}" width="100">
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
