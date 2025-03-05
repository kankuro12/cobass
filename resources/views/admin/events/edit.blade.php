@extends('admin.layout.app')

@section('content')
    <h1>Edit Event</h1>

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $event->title) }}" required>
        </div>

        <div class="form-group">
            <label for="venue">Venue</label>
            <input type="text" name="venue" id="venue" class="form-control" value="{{ old('venue', $event->venue) }}" required>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $event->start_date) }}" required>
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $event->end_date) }}" required>
        </div>

        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="time" name="start_time" id="start_time" class="form-control" value="{{ old('start_time', $event->start_time) }}" required>
        </div>

        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="time" name="end_time" id="end_time" class="form-control" value="{{ old('end_time', $event->end_time) }}" required>
        </div>

        <div class="form-group">
            <label for="short_description">Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control" rows="4" required>{{ old('short_description', $event->short_description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" class="form-control" rows="4" required>{{ old('long_description', $event->long_description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="feature_image">Feature Image</label>
            <input type="file" name="feature_image" id="feature_image" class="form-control">
            @if ($event->feature_image)
                <div>
                    <strong>Current Image:</strong>
                    <img src="{{ asset($event->feature_image) }}" alt="Feature Image" width="150">
                </div>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Event</button>
    </form>
@endsection
