@extends('admin.layout.app')

@section('content')
    <h1>News</h1>
    <a href="{{ route('admin.news.create') }}" class="btn btn-primary">Add News</a>
    <table class="table">
        <thead>
            <tr>
                <th>Feature Image</th>
                <th>Title</th>
                <th>Short Content</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($news as $item)
                <tr>
                    <td><img src="{{ asset($item->feature_image) }}" width="100"></td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->short_content }}</td>
                    <td>
                        <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Delete this news?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
