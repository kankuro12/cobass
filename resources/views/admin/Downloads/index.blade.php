@extends('admin.layout.app')
@section('s-title')
    <li class="breadcrumb
    -item active">
        Downloads
    </li>
@endsection
@section('page-option')
    <a href="{{ route('admin.downloads.create') }}" class="btn btn-primary">Add New Download</a>
@endsection
@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($downloads as $download)
                <tr>
                    <td>{{ $download->title }}</td>
                    <td>{{ $download->description }}</td>
                    <td><a href="{{ asset('storage/' . $download->file_path) }}" target="_blank">View</a></td>
                    <td>
                        <form action="{{ route('admin.downloads.destroy', $download->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
