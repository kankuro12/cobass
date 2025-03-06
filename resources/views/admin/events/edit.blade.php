@extends('admin.layout.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.events.index') }}">Events</a>
    </li>
    <li class="breadcrumb-item active">
        Edit
    </li>
@endsection

@section('content')
<div class="bg-white shadow p-3 mt-3">
    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-12 mb-3">
                    <label class="form-label">Feature Image</label>
                    <input type="file" name="feature_image" class="form-control photo" accept="image/*"
                        data-default-file="{{ asset($event->feature_image) }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12 mb-2">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title', $event->title) }}" required>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="venue">Venue</label>
                    <input type="text" name="venue" class="form-control" value="{{ old('venue', $event->venue) }}" required>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="{{ old('start_date', $event->start_date) }}" required>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" class="form-control" value="{{ old('end_date', $event->end_date) }}" required>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="start_time">Start Time</label>
                    <input type="time" name="start_time" class="form-control" value="{{ old('start_time', $event->start_time) }}" required>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="end_time">End Time</label>
                    <input type="time" name="end_time" class="form-control" value="{{ old('end_time', $event->end_time) }}" required>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="short_description">Short Description</label>
                    <textarea name="short_description" class="form-control" rows="4" required>{{ old('short_description', $event->short_description) }}</textarea>
                </div>
                <div class="col-md-12 mb-2">
                    <label for="long_description">Long Description</label>
                    <textarea name="long_description" class="form-control" rows="4" required>{{ old('long_description', $event->long_description) }}</textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Update Event</button>
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
