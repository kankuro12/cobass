<div class="choose-us section-padding-1">
    <div class="container-fluid">
        <div class="row no-gutters choose-negative-mrg">
            @foreach ($facility as $facilities)
                <div class="col-lg-3 col-md-6 mb-4">
                <div class="single-choose-us {{ $loop->iteration == 1 || $loop->iteration == 3 ? 'choose-bg-light-blue' : 'choose-bg-yellow' }} h-100" style="margin: 10px;">
                        <div class="choose-img">
                            <img class="animated" src="{{ asset($facilities->icon) }}" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>{{ $facilities->title }}</h3>
                            <p>{{ $facilities->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>About <span>Us</span></h2>
                        <p>{{ $data->why }}</p>
                    </div>
                    <div class="about-btn mt-45">
                        <a class="default-btn" href="{{ 'about' }}">ABOUT US</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/banner/banner-1.jpg" alt="">
                    <a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                        <img class="animated" src="assets/img/icon-img/video.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
