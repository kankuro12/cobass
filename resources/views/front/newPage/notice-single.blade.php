@extends('front.layout.app')

@section('css')
    <style>
        .notice-single-card {
            background: #fff;
            border: 1px solid rgba(0, 0, 0, 0.08);
            border-radius: 14px;
            box-shadow: 0 10px 28px rgba(0, 0, 0, 0.06);
            padding: 30px;
        }

        .notice-single-meta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 18px;
            color: #0f6f3f;
            font-weight: 600;
        }

        .notice-single-title {
            margin-bottom: 18px;
            font-size: 34px;
            line-height: 1.2;
        }

        .notice-single-details {
            font-size: 17px;
            line-height: 1.8;
            color: #444;
        }

        .notice-single-attachment {
            margin-top: 24px;
        }

        .notice-single-image {
            max-width: 100%;
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, 0.08);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
        }

        .notice-single-actions {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 28px;
        }

        .notice-single-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 20px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
        }

        .notice-single-button.primary {
            background: #0f6f3f;
            color: #fff;
        }

        .notice-single-button.secondary {
            border: 1px solid #0f6f3f;
            color: #0f6f3f;
            background: #fff;
        }
    </style>
@endsection

@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95" style="background-image:url('');">
            <div class="container">
                <h2>{{ $notice->title }}</h2>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a>
                        <span>
                            <i class="fa fa-angle-double-right"></i> Notice Details
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="event-area pt-40 pb-40" style="background: #f8faf9;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="notice-single-card">
                        <div class="notice-single-meta">
                            <i class="fa fa-calendar"></i>
                            <span>{{ \Carbon\Carbon::parse($notice->date)->format('d M, Y') }}</span>
                        </div>

                        <h1 class="notice-single-title">{{ $notice->title }}</h1>

                        <div class="notice-single-details">
                            {!! nl2br(e($notice->details)) !!}
                        </div>

                        @if ($notice->link)
                            @php
                                $attachmentExtension = strtolower(pathinfo($notice->link, PATHINFO_EXTENSION));
                                $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'];
                            @endphp

                            <div class="notice-single-attachment">
                                @if (in_array($attachmentExtension, $imageExtensions, true))
                                    <img class="notice-single-image" src="{{ asset($notice->link) }}" alt="{{ $notice->title }}">
                                @else
                                    <a class="notice-single-button primary" href="{{ asset($notice->link) }}" download>
                                        <i class="fa fa-download"></i>
                                        <span>Download Notice</span>
                                    </a>
                                @endif
                            </div>
                        @endif

                        <div class="notice-single-actions">
                            <a class="notice-single-button secondary" href="{{ route('notice') }}">
                                <i class="fa fa-arrow-left"></i>
                                <span>Back to Notices</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
