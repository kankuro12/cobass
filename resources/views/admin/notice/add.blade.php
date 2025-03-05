@extends('admin.layout.app')

@section('content')
    <div class="container">
        <h1>Add New Notice</h1>

        <form action="{{ route('admin.notice.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" class="form-control" id="date" required>
            </div>

            <div class="form-group">
                <label for="details">Details</label>
                <textarea name="details" class="form-control" id="details" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="link">Link (Optional)</label>
                <input type="url" name="link" class="form-control" id="link">
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
