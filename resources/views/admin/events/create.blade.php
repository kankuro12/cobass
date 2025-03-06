@extends('admin.layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.events.index') }}">Events</a>
    <li class="breadcrumb-item active">
        Create
    </li>
@endsection

@section('content')
<div class="bg-white shadow p-3 mt-3">
    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12 mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="venue">Venue</label>
                    <input type="text" name="venue" id="venue" class="form-control" value="{{ old('venue') }}" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date') }}" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date') }}" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="start_time">Start Time</label>
                    <input type="time" name="start_time" id="start_time" class="form-control" value="{{ old('start_time') }}" required>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="end_time">End Time</label>
                    <input type="time" name="end_time" id="end_time" class="form-control" value="{{ old('end_time') }}" required>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-12 mb-3">
                    <label for="short_description">Short Description</label>
                    <textarea name="short_description" id="short_description" class="form-control" required>{{ old('short_description') }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="long_description">Long Description</label>
                    <textarea name="long_description" id="long_description" class="form-control" required>{{ old('long_description') }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                    <label for="feature_image">Featured Image</label>
                    <input type="file" name="feature_image" id="feature_image" class="form-control-file photo" required>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Create Event</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
    <script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.photo').dropify();
        });
    </script>
@endsection
