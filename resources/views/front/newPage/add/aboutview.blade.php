<div class="about-us pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about-content">
                    <div class="section-title section-title-green mb-30">
                        <h2>About <span>Us</span></h2>
                        <p>{{ $about['txt1'] }}</p>
                    </div>
                    {{-- <div class="about-btn mt-45">
                        <a class="default-btn" href="{{ 'about' }}">ABOUT US</a>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about-img default-overlay">
                    <img src="{{ asset($about['img']) }}" alt="About Us">
                </div>

            </div>
        </div>
    </div>
</div>
