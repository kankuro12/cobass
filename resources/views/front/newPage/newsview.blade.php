<div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url('https://images.pexels.com/photos/1029577/pexels-photo-1029577.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
    <div class="container">
        <div class="section-title mb-75">
            <h2><span>Latest</span> News</h2>
        </div>

        <div class="event-active owl-carousel nav-style-1">
            @foreach($news as $item)
            <div class="single-event event-white-bg">
                <div class="event-img">
                    <a href="news-details.html">
                        <img src="{{ asset('storage/'.$item->feature_image) }}" alt="{{ $item->title }}">
                    </a>
                    <div class="event-date-wrap">
                        <span class="event-date">{{ date('j', strtotime($item->created_at)) }}</span>
                        <span>{{ date('M', strtotime($item->created_at)) }}</span>
                    </div>
                </div>
                <div class="event-content">
                    <h3><a href="news-details.html">{{ $item->title }}</a></h3>
                    <p>{{ $item->short_content }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
