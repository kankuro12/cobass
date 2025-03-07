@extends('front.layout.app')

@section('content')
    <style>
        .single-event {
            height: 400px;
            overflow: hidden;
        }
    </style>

    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
            style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
            <div class="container">
                <h2>Event Details</h2>
                <p>{{ $event->title }}</p>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <!-- Left Section: Event Details -->
            <div class="col-lg-8">
                <div class="single-event event-white-bg shadow p-3 mb-4 bg-white rounded">
                    <div class="event-img">
                        <img src="{{ asset($event->feature_image ?? 'default-image.jpg') }}" alt="{{ $event->title }}" class="img-fluid w-100">
                        <div class="event-date-wrap">
                            <span class="event-date">{{ date('j', strtotime($event->start_date ?? 'now')) }}</span>
                            <span>{{ date('M', strtotime($event->start_date ?? 'now')) }}</span>
                        </div>
                    </div>
                    <div class="event-content p-3">
                        <h3>{{ $event->title }}</h3>
                        <p>{!! $event->long_description !!}</p>
                        <div class="event-meta-wrap mt-3">
                            <div class="event-meta"><i class="fa fa-location-arrow"></i> <span>{{ $event->venue }}</span></div>
                            <div class="event-meta"><i class="fa fa-clock"></i> <span>{{ date('h:i A', strtotime($event->start_time ?? 'now')) }} - {{ date('h:i A', strtotime($event->end_time ?? 'now')) }}</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section: Latest Events Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">
                    <h3 class="mb-3">Latest Events</h3>
                    <div class="row">
                        @foreach ($showother->where('id', '!=', $event->id ?? 0) as $other)
                            <div class="col-lg-12 col-md-6 mb-2">
                                <div class="single-event event-white-bg">
                                    <div class="event-img" style="height: 200px; overflow: hidden;">
                                        <a href="{{ route('events.details', $other->id) }}">
                                            <img src="{{ asset($other->feature_image) }}" alt="{{ $other->title }}" style="height: 100%; object-fit: cover;">
                                        </a>
                                        <div class="event-date-wrap">
                                            <span class="event-date">{{ date('j', strtotime($other->start_date)) }}</span>
                                            <span>{{ date('M', strtotime($other->start_date)) }}</span>
                                        </div>
                                    </div>
                                    <div class="event-content">
                                        <h3><a href="{{ route('events.details', $other->id) }}">{{ $other->title }}</a></h3>
                                        <p>{{ $other->short_description }}</p>
                                        <div class="event-meta-wrap">
                                            <div class="event-meta">
                                                <i class="fa fa-location-arrow"></i>
                                                <span>{{ $other->venue }}</span>
                                            </div>
                                            <div class="event-meta">
                                                <i class="fa fa-clock"></i>
                                                <span>{{ date('h:i A', strtotime($other->start_time)) }} -
                                                    {{ date('h:i A', strtotime($other->end_time)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
