<style>
    .home-notice-card {
        height: 100%;
        background: #fff;
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        overflow: hidden;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .home-notice-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 14px 30px rgba(0, 0, 0, 0.1);
    }

    .home-notice-body {
        padding: 22px;
    }

    .home-notice-date {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 12px;
        font-size: 14px;
        color: #0f6f3f;
        font-weight: 600;
    }

    .home-notice-title {
        margin-bottom: 12px;
        font-size: 20px;
        line-height: 1.35;
    }

    .home-notice-title a {
        color: #1e1e1e;
        text-decoration: none;
    }

    .home-notice-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-weight: 600;
        color: #0f6f3f;
        text-decoration: none;
    }

    .home-notice-link:hover {
        color: #0a4f2c;
    }

    .home-notice-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 18px;
    }

    .home-notice-action {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 16px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
    }

    .home-notice-action.view {
        background: #0f6f3f;
        color: #fff;
    }

    .home-notice-action.view:hover {
        background: #0a4f2c;
        color: #fff;
    }

    .home-notice-action.download {
        border: 1px solid #0f6f3f;
        color: #0f6f3f;
        background: #fff;
    }

    .home-notice-action.download:hover {
        border-color: #0a4f2c;
        color: #0a4f2c;
    }
</style>

<div class="event-area pt-40 pb-40" style="background: #f8faf9;">
    <div class="container">
        <div class="section-title mb-40 text-center">
            <h2><span>Latest</span> Notices</h2>
            <p>Recent updates and announcements from the school.</p>
        </div>

        <div class="row">
            @forelse ($latestNotices as $notice)
                <div class="col-lg-4 col-md-6 mb-30">
                    <div class="home-notice-card">
                        <div class="home-notice-body">
                            <div class="home-notice-date">
                                <i class="fa fa-calendar"></i>
                                <span>{{ \Carbon\Carbon::parse($notice->date)->format('d M, Y') }}</span>
                            </div>

                            <h3 class="home-notice-title">
                                <a href="{{ route('notice.show', $notice->id) }}">{{ $notice->title }}</a>
                            </h3>

                            <div class="home-notice-actions">
                                <a class="home-notice-action view" href="{{ route('notice.show', $notice->id) }}">
                                    <i class="fa fa-eye"></i>
                                    <span>View Notice</span>
                                </a>

                                @if ($notice->link)
                                    <a class="home-notice-action download" href="{{ asset($notice->link) }}" download>
                                        <i class="fa fa-download"></i>
                                        <span>Download Notice</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No notices available right now.</p>
                </div>
            @endforelse
        </div>

        <div class="text-center mt-20">
            <a href="{{ route('notice') }}" class="home-notice-link">
                <span>View all notices</span>
                <i class="fa fa-arrow-right"></i>
            </a>
        </div>
    </div>
</div>
