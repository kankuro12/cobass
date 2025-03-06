@extends('admin.layout.app')
@section('s-title')
    <li class="breadcrumb-item active">
        <a href="{{route('admin.downloads.index')}}">Download</a>
    </li>
    <li class="breadcrumb-item active">
        Add
    </li>
@endsection
@section('content')
    <form action="{{ route('admin.downloads.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Description (optional)</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Upload File</label>
            <input type="file" name="file" class="form-control photo" required>
        </div>
        <button type="submit" class="btn btn-success">Upload</button>
    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('.photo').dropify();
        });
    </script>
@endsection
