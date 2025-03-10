@extends('admin.layout.app')
@section('s-title')
    <li class="breadcrumb-item active">
        Notices
    </li>
@endsection

@section('content')
    <div class="container">
        <h1>Edit Notice</h1>

        <form action="{{ route('admin.notice.update', $notice->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $notice->title }}" required>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" id="date" value="{{ $notice->date }}" required>
            </div>

            <div class="form-group">
                <label for="details">Details</label>
                <textarea name="details" class="form-control" id="details" rows="5" required>{{ $notice->details }}</textarea>
            </div>

            <div class="form-group">
                <label for="link">Link (Optional)</label>
                <input type="file" name="link" class="form-control" id="link" value="{{ $notice->link }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropify/0.2.2/js/dropify.min.js"></script>
    <script>
          $(function() {
            $('.link').dropify();
            $('#long_des').summernote();
        });
@endpush

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropify/0.2.2/css/dropify.min.css">
@endpush
