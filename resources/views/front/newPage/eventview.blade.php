<div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>Upcoming</span> Events</h2>
            {{-- <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p> --}}
        </div>

        <div class="event-active owl-carousel nav-style-1">
            @foreach($events as $event)
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <!-- Use the image path from the database -->
                    <a href="event-details.html">
                        <img src="{{ asset('storage/'.$event->feature_image) }}" alt="{{ $event->title }}">
                    </a>
                    <div class="event-date-wrap">
                        <span class="event-date">{{ date('j', strtotime($event->start_date)) }}</span>
                        <span>{{ date('M', strtotime($event->start_date)) }}</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="event-details.html">{{ $event->title }}</a></h3>
                    <p>{{ $event->short_description }}</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>{{ $event->venue }}</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock"></i>
                            <span>{{ date('h:i A', strtotime($event->start_time)) }} - {{ date('h:i A', strtotime($event->end_time)) }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

