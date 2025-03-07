<div class="event-area bg-img default-overlay pt-130 pb-130 news-background">
    <div class="container">
        <div class="section-title mb-75 text-center">
            <h2><span>Latest</span> News</h2>
        {{-- <link rel="stylesheet" href="{{ asset('css/custom.css') }}"> --}}
        </div>

        <div class="row">
            @foreach($news->take(4) as $item) <!-- Limit to 4 news items -->
            <div class="col-lg-3 col-md-6 mb-30">
                <div class="single-blog">
                    <div class="blog-img">
                        <div class="col-md-3">
                            <a href="{{ route('news.details', $item->id) }}">
                                <img src="{{asset($item->feature_image) }}" alt="{{ $item->title }}">
                            </a>
                        </div>
                    </div>
                    <div class="blog-content-wrap">
                        <span>{{ $item->category }}</span>
                        <div class="blog-content">
                            <h4><a href="{{ route('news.details', $item->id) }}">{{ $item->title }}</a></h4>
                            <p>{{ $item->short_content }}</p>
                        </div>
                        <div class="blog-date">
                            <a href="#"><i class="fa fa-calendar-o"></i> {{ date('M, jS Y', strtotime($item->created_at)) }}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
