@extends('admin.layout.app')

@section('content')
    <div class="container">
        <h1>Notices</h1>
        <a href="{{ route('admin.notice.create') }}" class="btn btn-primary">Add New Notice</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Details</th>
                    <th>Link</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notices as $notice)
                    <tr>
                        <td>{{ $notice->title }}</td>
                        <td>{{ $notice->date }}</td>
                        <td>{{ Str::limit($notice->details, 50) }}</td>
                        <td><a href="{{ $notice->link }}" target="_blank">{{ $notice->link }}</a></td>
                        <td>
                            <a href="{{ route('admin.notice.edit', $notice->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.notice.destroy', $notice->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
