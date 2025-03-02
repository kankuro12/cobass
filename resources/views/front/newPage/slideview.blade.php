<div class="slider-area">
    <div class="slider-active owl-carousel">
        @foreach ($sliders as $slider)
            <div class="single-slider slider-height-1 bg-img"
                 style="background-image: url('{{ asset($slider->image) }}');">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-7 col-12">
                            <div class="slider-content slider-animated-1">
                                <h1 class="animated fadeInUp">{{ $slider->title }}</h1>
                                <p class="animated fadeInUp delay-1s">{{ $slider->subtitle }}</p>
                                <div class="slider-btn">
                                    <a href="{{ url('/about') }}"
                                       class="animated fadeInLeft delay-1s default-btn btn-green-color">
                                        ABOUT US
                                    </a>
                                    <a href="{{ url('/contact') }}"
                                       class="animated fadeInRight delay-1s default-btn btn-white-color">
                                        CONTACT US
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (!empty($slider->mobile_image))
                        <div class="slider-single-img slider-animated-1">
                            <img class="animated zoomIn delay-1s"
                                 src="{{ asset($slider->mobile_image) }}"
                                 alt="{{ $slider->title }}">
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>

    <!-- Custom Navigation Buttons -->
    <div class="slider-navigation">
        <button class="slider-prev" aria-label="Previous Slide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slider-next" aria-label="Next Slide">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
</div>
