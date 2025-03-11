<div class="event-area bg-img default-overlay pt-40 pb-40 news-background">
    <div class="container">
        <div class="section-title mb-75 text-center">
            <h2><span>Latest</span> News</h2>
        </div>

        <div class="row">
            @foreach ($news->take(4) as $item)
                <!-- Limit to 4 news items -->
                <div class="col-lg-3 col-md-6 mb-30">
                    <div class="single-blog" style="height: 100%; display: flex; flex-direction: column;">
                        <div class="blog-img" style="flex: 1;">
                            <a href="{{ route('news.details', $item->id) }}">
                                <img src="{{ asset($item->feature_image) }}" alt="{{ $item->title }}"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </a>
                        </div>
                        <div class="blog-content-wrap"
                            style="flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            {{-- <span>{{ $item->category }}</span> --}}
                            <div class="blog-content">
                                <h4><a href="{{ route('news.details', $item->id) }}">{{ $item->title }}</a></h4>
                                <p>{{ $item->short_content }}</p>
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
    </div>
</div>
