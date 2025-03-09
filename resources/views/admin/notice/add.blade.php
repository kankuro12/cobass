@extends('admin.layout.app')
@section('s-title')
    <li class="breadcrumb-item active">
        Notices
    </li>
@endsection

@section('content')
    <div class="container">
        <h1>Add New Notice</h1>

        <form action="{{ route('admin.notice.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="details">Details</label>
                <textarea name="details" id="details" class="form-control" required></textarea>
            </div>

            <!-- Dropify Image Upload -->
            <div class="form-group">
                <label for="link">Upload Image</label>
                <input type="file" name="link" id="link" class="form-control dropify" data-height="150" required />
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
    <script>
        $(function() {
            $('.photo').dropify();
            $('#long_des').summernote();
        });
    </script>
@endsection
