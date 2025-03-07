@extends('layouts.app')

@section('content')
    <div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <div class="container">
            <div class="section-title mb-75 d-flex justify-content-between align-items-center">
                <h2><span>All</span> Events</h2>
                <a href="{{ route('events.create') }}" class="btn btn-primary">Add Event</a>
            </div>

            <!-- Search Form -->
            <form action="{{ route('events.index') }}" method="GET" class="mb-4">
                <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="Search events by title..." value="{{ request('search') }}">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>

            <div class="row">
                @foreach($events as $event)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="single-event event-white-bg" style="height: 100%; display: flex; flex-direction: column;">
                            <div class="event-img" style="flex: 1;">
                                <a href="{{ route('events.details', $event->id) }}">
                                    <img src="{{ asset('storage/'.$event->feature_image) }}" alt="{{ $event->title }}" style="width: 100%; height: auto;">
                                </a>
                                <div class="event-date-wrap">
                                    <span class="event-date">{{ date('j', strtotime($event->start_date)) }}</span>
                                    <span>{{ date('M', strtotime($event->start_date)) }}</span>
                                </div>
                            </div>
                            <div class="event-content" style="padding: 15px; flex: 1;">
                                <h3><a href="{{ route('events.details', $event->id) }}">{{ $event->title }}</a></h3>
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
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
