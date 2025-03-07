@extends('front.layout.app')

@section('content')
    <div class="event-area bg-img default-overlay pt-130 pb-130"
        style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <div class="container">
            <div class="section-title mb-75 text-center">
                <h2><span>News</span> Details</h2>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-event event-white-bg">
                        <div class="event-img">
                            <img src="{{ asset($news->feature_image) }}" alt="{{ $news->title }}"
                                style="width: 100%; height: auto;">
                            <div class="event-date-wrap">
                                <span class="event-date">{{ date('j', strtotime($news->created_at)) }}</span>
                                <span>{{ date('M', strtotime($news->created_at)) }}</span>
                            </div>
                        </div>
                        <div class="event-content" style="padding: 20px;">
                            <h3>{{ $news->title }}</h3>
                            <p>{!! $news->long_content !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3>Other News</h3>
                        @foreach ($otherNews as $item)
                            <div class="sidebar-news-item">
                                <a href="{{ route('news.details', $item->id) }}">
                                    <img src="{{ asset("storage/{$item->feature_image}") }}" alt="{{ $item->title }}"
                                        style="width: 100%; height: auto;">
                                </a>
                                <h4><a href="{{ route('news.details', $item->id) }}">{{ $item->title }}</a></h4>
                                <p>{{ $item->short_content }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
