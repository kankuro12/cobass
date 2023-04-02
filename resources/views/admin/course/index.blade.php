{{-- @extends('admin.layout.app')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
@endsection
@section('page-option')
    <div class="text-right">
        <a href="{{ route('admin.course.list') }}" class="btn btn-primary"> Add </a>
    </div>
@endsection

@section('content')
    <div class="bg-white">
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-4">
                    <img src="{{ asset($course->image) }}" alt="" class="w-100">


                </div>
                <div class="col-md-4">
                    {{ $course->name }}


                </div>
                <div class="col-md-4">
                    {{ $course->faculty }}


                </div>
                <div class="col-md-4">
                    {{ $course->long_des }}


                </div>
                <div class="col-md-4">
                    {{ $course->short_des }}


                </div>
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
@endsection --}}



@extends('admin.layout.app')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
@endsection

@section('s-title')
@endsection
@section('page-option')
    <div class="text-right">
       <a href="{{ route('admin.course.add') }}" class="btn btn-primary">Course Add </a>
    </div>
@endsection

@section('content')
    <div class="bg-white">
        <div class="row">
            @foreach ($courses as $course)
            <div class="col-md-4">
                <img src="{{ asset($course->image) }}" alt="" class="w-100">


            </div>
            <div class="col-md-4">
                {{ $course->name }}


            </div>
            <div class="col-md-4">
                {{ $course->faculty }}


            </div>
            <div class="col-md-4">
                {{ $course->long_des }}


            </div>
            <div class="col-md-4">
                {{ $course->short_des }}


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
