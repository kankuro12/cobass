@extends('front.layout.app')

@section('content')
<div class="breadcrumb-area">
    <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95" style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/breadcrumb-bg-3.jpg');">
        <div class="container">
            <h2>Notice Grid</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
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
            @foreach ($notices as $notice)
            <div class="col-lg-4 col-md-6">
                <div class="single-event mb-55 event-gray-bg">
                    <div class="event-img">
                        @if($notice->link)
                        <a href="{{ asset('storage/' . $notice->link) }}">
                            <img src="{{ asset('storage/' . $notice->link) }}" alt="Notice Image">
                        </a>
                        @else
                        <a href="#">
                            <img src="https://via.placeholder.com/500x300" alt="No Image">
                        </a>
                        @endif
                    </div>
                    <div class="event-content">
                        <h3><a href="#">{{ $notice->title }}</a></h3>
                        <p>{{ Str::limit($notice->details, 50) }}</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-calendar"></i>
                                <span>{{ \Carbon\Carbon::parse($notice->date)->format('d M, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="pro-pagination-style text-center mt-25">
            <!-- Pagination -->
        </div>
    </div>
</div>

@endsection
