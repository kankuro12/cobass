@extends('admin.layout.app')

@section('s-title')
    <li class="breadcrumb-item active">
        Notices
    </li>
@endsection

@section('page-option')
    <a href="{{ route('admin.notice.create') }}" class="btn btn-primary">Add New Notice</a>
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Details</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notices as $notice)
                <tr>
                    <td>{{ $notice->title }}</td>
                    <td>{{ $notice->date }}</td>
                    <td>{{ Str::limit($notice->details, 50) }}</td>
                    <td>
                        @if ($notice->link && file_exists(public_path($notice->link)))
                            <img src="{{ asset($notice->link) }}" alt="Notice Image" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.notice.edit', $notice->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.notice.destroy', $notice->id) }}" method="POST"
                            style="display:inline;" onsubmit="return confirmDelete();">
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

@section('script')
    <script>
        $(function() {
            $('.photo').dropify();
            $('#long_des').summernote();
        });

        function confirmDelete() {
            return confirm("Are you sure you want to delete this notice?");
        }
    </script>
@endsection
