@extends('front.layout.app')
@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
        style="background-image:url('	https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/breadcrumb-bg-2.jpg');">
        <div class="container">
            <h2>Course Grid</h2>
            <p>Each course is designed with industry-relevant curriculum, experienced faculty, and hands-on learning opportunities to ensure student success.
            </p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Courses</a> <span><i class="fa fa-angle-double-right"></i>{{ $course->name }}</span></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <!-- Left Section: Course Details -->
        <div class="col-md-8 p-3">
            <div class="course-detail shadow">
                <img src="{{ asset( $course->image) }}" alt="{{ $course->name }}" class="img-fluid" style="width: 40%; height: 200px;">
                <div class="info p-3 mt-3">
                    <h2>{{ $course->name }}</h2>
                    <p><strong>Faculty:</strong> {{ $course->faculty }}</p>
                    <div>{!! $course->long_des !!}</div>
                </div>

            </div>
        </div>

        <!-- Right Section: Other Courses -->
        <div class="col-md-4">
            <div class="sidebar">
                <h3>Other Courses</h3>
                <ul class="list-group">
                    @foreach ($otherCourses as $other)
                        <li class="list-group-item">
                            <a href="{{ route('course.show', ['id' => $other->id]) }}">{{ $other->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
