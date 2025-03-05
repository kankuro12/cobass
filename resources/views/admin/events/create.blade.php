@extends('admin.layout.app')

@section('content')
    <h1>Create Event</h1>

    <form action="{{ route('admin.events.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="venue">Venue</label>
            <input type="text" name="venue" id="venue" class="form-control" value="{{ old('venue') }}" required>
        </div>

        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date') }}" required>
        </div>

        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date') }}" required>
        </div>

        <div class="form-group">
            <label for="start_time">Start Time</label>
            <input type="time" name="start_time" id="start_time" class="form-control" value="{{ old('start_time') }}" required>
        </div>

        <div class="form-group">
            <label for="end_time">End Time</label>
            <input type="time" name="end_time" id="end_time" class="form-control" value="{{ old('end_time') }}" required>
        </div>

        <div class="form-group">
            <label for="short_description">Short Description</label>
            <textarea name="short_description" id="short_description" class="form-control" required>{{ old('short_description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" class="form-control" required>{{ old('long_description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="feature_image">Featured Image</label>
            <input type="file" name="feature_image" id="feature_image" class="form-control-file" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Event</button>
    </form>
@endsection
