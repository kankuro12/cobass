<div class="course-area bg-img pt-50 pb-10" style="background-image: url('{{ asset('/img/bg.jpeg') }}'); background-size: cover; background-position: center;">

    <div class="container" style="padding: 0;">
        <div class="container">
            <div class="section-title mb-75">
                <h2> <span>Our</span> Courses</h2>
                <p>{{ $data->program }}</p>
            </div>

            <div class="row" data-margin="10">
                @if (isset($courses) && count($courses) > 0)
                    @foreach ($courses as $course)
                        <div class="col-lg-3">
                            <div class="single-course" style="margin-bottom: 0; padding: 15px;">
                                <div class="course-img">
                                    <a href="#"><img src="{{ asset($course->image) }}"
                                            alt="{{ $course->name }}"></a>
                                </div>
                                <div class="course-content">
                                    <h4><a href="#"> {{ $course->name }}</a></h4>
                                    <p> {{ $course->short_des }}</p>
                                </div>
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
