<div class="course-area bg-img pt-130 pb-10">

    <div style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
    <div class="container">
        <div class="section-title mb-75">
            <h2> <span>Our</span> Courses</h2>
            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip </p>
        </div>

        <div class="course-slider-active nav-style-1 owl-carousel">
            @if(isset($courses) && count($courses) > 0)
            @foreach ($courses as $course)
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img src="{{ asset($course->image) }}" alt=""></a>
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
