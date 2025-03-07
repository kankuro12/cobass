<div class="course-area bg-img pt-130 pb-10" style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center;">

    <div class="container" style="padding: 0;">
    <div class="container">
        <div class="section-title mb-75">
            <h2> <span>Our</span> Courses</h2>
            <p>{{ $data->program }}</p>
        </div>

        <div class="course-slider-active nav-style-1 owl-carousel" data-margin="10">
            @if(isset($courses) && count($courses) > 0)
            @foreach ($courses as $course)
                <div class="single-course" style="margin-bottom: 0; border: 1px solid #ddd; padding: 15px;">
                    <div class="course-img">
                        <a href="#"><img src="{{ asset($course->image) }}" alt="{{ $course->name }}"></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#"> {{ $course->name }}</a></h4>
                        <p> {{ $course->short_des }}</p>
                    </div>
                </div>
            @endforeach
        @else
            <p>No courses available.</p>
        @endif
        </div>
    </div>
</div>
</div>
