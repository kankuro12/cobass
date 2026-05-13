@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection
@section('s-title')
    <li class="breadcrumb-item active">
     <a href=" {{ route('admin.notice.index') }}">Notice</a>
    </li>
    </li>
    <li class="breadcrumb-item active">
    Update
    </li>
@endsection

@section('content')
    <div class="bg-white p-3">
        <form action="{{ route('admin.notice.update', $notice->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <label for="link">Upload File</label>
                    <input type="file" name="file" id="link" class="form-control dropify"
                        data-default-file="{{ asset($notice->link) }}"
                        accept=".jpg,.jpeg,.png,.gif,.webp,.pdf,.doc,.docx,.xls,.xlsx">
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                value="{{ $notice->title }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control"
                                value="{{ $notice->date }}" required>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="details">Details</label>
                            <input type="text" name="details" id="details" class="form-control"
                                value="{{ $notice->details }}">
                        </div>

                        <div class="col-md-6 mt-2">
                            <label for="external_link_text">External Link Text</label>
                            <input type="text" name="external_link_text" id="external_link_text" class="form-control"
                                value="{{ $notice->external_link_text }}" placeholder="e.g. View Online">
                        </div>

                        <div class="col-md-6 mt-2">
                            <label for="external_link">External Link</label>
                            <input type="url" name="external_link" id="external_link" class="form-control"
                                value="{{ $notice->external_link }}" placeholder="https://example.com">
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
    <script>
        $(function() {
            $('.dropify').dropify();
            $('#long_des').summernote();
        });
    </script>
@endsection
