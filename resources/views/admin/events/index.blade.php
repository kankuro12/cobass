@extends('admin.layout.app')

@section('content')
    <h1>Events</h1>

    <a href="{{ route('admin.events.create') }}" class="btn btn-primary mb-3">Add Event</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Venue</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Short Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->venue }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->start_date)->format('d-m-Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->end_date)->format('d-m-Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->start_time)->format('H:i') }}</td>
                    <td>{{ \Carbon\Carbon::parse($event->end_time)->format('H:i') }}</td>
                    <td>{{ Str::limit($event->short_description, 50) }}</td>
                    <td><img src="{{ asset($event->feature_image) }}" width="100" alt="Featured Image"></td>

                    <td>
                        <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Corrected form tag -->
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
