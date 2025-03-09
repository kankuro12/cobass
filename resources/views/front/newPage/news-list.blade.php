@extends('front.layout.app')

@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url('');">
            <div class="container">
                <h2>Home / News</h2>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a>
                        <span>
                            <i class="fa fa-angle-double-right"></i> News
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="event-area bg-img default-overlay pt-130 pb-130 news-background">
        <div class="container">

            <!-- Search Bar -->
            <div class="row mb-4">
                <div class="col-md-4 offset-md-8">
                    <form method="GET" action="{{ route('news.list') }}">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search news..."
                                value="{{ request()->query('search') }}">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <!-- News List -->
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($news as $item)
                            <div class="col-lg-4 col-md-6 mb-30">
                                <div class="single-blog" style="height: 100%; display: flex; flex-direction: column;">
                                    <div class="blog-img" style="flex: 1;">
                                        <a href="{{ route('news.details', $item->id) }}">
                                            <img src="{{ asset($item->feature_image) }}" alt="{{ $item->title }}"
                                                style="width: 100%; height: 100%; object-fit: cover;">
                                        </a>
                                    </div>
                                    <div class="blog-content-wrap"
                                        style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                                        <div class="blog-content">
                                            <h4><a href="{{ route('news.details', $item->id) }}">{{ $item->title }}</a>
                                            </h4>
                                            <p>{{ Str::limit($item->short_content, 100) }}</p>
                                        </div>
                                        <div class="blog-date">
                                            <a href="#"><i class="fas fa-calendar-alt"></i>
                                                {{ date('M, jS Y', strtotime($item->created_at)) }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="pagination-wrap mt-4">
                        {{ $news->links() }}
                    </div>
                </div>

                <!-- Sidebar: Latest 4 Events -->
                {{-- <div class="col-lg-4">
                <div class="sidebar">
                    <h4 class="mb-3">Latest Events</h4>
                    @foreach ($events->take(4) as $event)
                        <div class="sidebar-event mb-3">
                            <h5><a href="{{ route('event.details', $event->id) }}">{{ $event->title }}</a></h5>
                            <p><i class="fas fa-calendar-alt"></i> {{ date('M j, Y', strtotime($event->start_date)) }}</p>
                        </div>
                    @endforeach
                </div>
            </div> --}}
            </div>
        </div>
    </div>
@endsection
