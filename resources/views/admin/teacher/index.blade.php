
@extends('admin.layout.app')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
@endsection
@section('page-option')
    <div class="text-right">
       <a href="{{ route('admin.teacher.add') }}" class="btn btn-primary">Teacher Add </a>
    </div>
@endsection

@section('content')
    <div class="bg-white">
        <div class="row">
            @foreach ($teachers as $teacher)
            <div class="col-md-4">
                <img src="{{ asset($teacher->image) }}" alt="" class="w-100">


            </div>
            <div class="col-md-4">
                {{ $teacher->name }}


            </div>
            <div class="col-md-4">
                {{ $teacher->deg }}


            </div>

            <div class="col-md-4">
                {{ $teacher->short_des }}


           </div>
           {{-- <a href="{{ route('admin.course.edit',['course' => $course->name])}}"
            class="btn btn-primary">Edit</a>
        <a href="{{ route('admin.course.del',['course'=> $course->name])}}"
            class="btn btn-danger">Delete</a> --}}
            @endforeach

        </div>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
    <script>
        $(function() {
            $('.photo').dropify();
        });
    </script>
@endsection
