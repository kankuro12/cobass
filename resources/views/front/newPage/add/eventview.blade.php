<style>
    .single-event {
        height: 400px;
        /* Adjust the height as needed */
        overflow: hidden;
    }
</style>

<div class="event-area bg-img default-overlay pt-40 pb-40"
    style="background-image:url('{{ asset('img/bg.jpeg') }}');">
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>Upcoming</span> Events</h2>
            {{-- <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p> --}}
        </div>

        <div class="row">
            @foreach ($events->take(4) as $event)
                <div class="col-lg-3 col-md-6 mb-2">
                    <a href="{{ route('events.details', $event->id) }}">
                        <div class="single-event event-white-bg">
                            <div class="event-img" style="height: 200px; overflow: hidden;">
                                <!-- Use the image path from the database -->
                                <img src="{{ asset($event->feature_image) }}" alt="{{ $event->title }}"
                                    style="height: 100%; object-fit: cover;" loading="lazy">

                                <div class="event-date-wrap">
                                    <span class="event-date">{{ date('j', strtotime($event->start_date)) }}</span>
                                    <span>{{ date('M', strtotime($event->start_date)) }}</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <h3>{{ $event->title }}
                    </a></h3>
                    <p>{{ $event->short_description }}</p>
                    <div class="event-meta-wrap">
                        <div class="event-meta">
                            <i class="fa fa-location-arrow"></i>
                            <span>{{ $event->venue }}</span>
                        </div>
                        <div class="event-meta">
                            <i class="fa fa-clock"></i>
                            <span>{{ date('h:i A', strtotime($event->start_time)) }} -
                                {{ date('h:i A', strtotime($event->end_time)) }}</span>
                        </div>
                    </div>
                </div>
        </div>
        </a>
    </div>
    @endforeach
</div>
</div>
</div>
