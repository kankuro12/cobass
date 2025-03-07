@extends('front.layout.app')

@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/breadcrumb-bg-3.jpg');">
        <div class="container">
            <h2>Notice Grid</h2>
            <p>Stay informed with our latest announcements regarding academic schedules, upcoming events, admission deadlines, scholarship opportunities, and policy updates.  .</p>
        </div>
    </div>
    <div class="breadcrumb-bottom">
        <div class="container">
            <ul>
                <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Notice Grid</span></li>
            </ul>
        </div>
    </div>
</div>

<div class="event-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="notice-list">
                    @foreach ($notices as $notice)
                    <li class="notice-item mb-4" style="border: 1px solid #ddd; padding: 15px; border-radius: 5px;">
                        <div class="notice-content">
                            <h3 style="font-size: 1.5em;"><a href="#">{{ $notice->title }}</a></h3>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-calendar"></i>
                                    <span>{{ \Carbon\Carbon::parse($notice->date)->format('d M, Y') }}</span>
                                </div>
                            </div>
                            @if($notice->link)
                            <div class="download-link" style="float: right;">
                                <a href="{{ asset('storage/' . $notice->link) }}" download>
                                    <i class="fa fa-download"></i> Download Notice
                                </a>
                            </div>
                            @endif
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="pro-pagination-style text-center mt-25">
            <!-- Pagination -->
        </div>
    </div>
</div>

@endsection
