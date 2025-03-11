@php
    $about = getSetting('about') ?? (object)[
        'img' => '',
    ]
@endphp
<div class="about-us pt-40 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>About <span>Us</span></h2>
                        <p>{{$data->why }}</p>
                    </div>
                    {{-- <div class="about-btn mt-45">
                        <a class="default-btn" href="{{ 'about' }}">ABOUT US</a>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="about-img default-overlay">
                    <img src="{{ asset($about->img) }}" alt="About Us">
                </div>

            </div>
        </div>
    </div>
</div>
