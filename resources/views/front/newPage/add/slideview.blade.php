<div class="slider-area" style="height: 80vh;">
    <div class="slider-active owl-carousel">
        @foreach ($sliders as $slider)
            <div class="single-slider slider-height-1 bg-img"
                 style="background-image: url('{{ asset($slider->image) }}'); height: 80vh;">
                <style>
                    @media (max-width: 768px) {
                        .single-slider.slider-height-1.bg-img {
                            background-image: url('{{ asset($slider->mobile_image) }}') !important;
                        }
                    }
                </style>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-7 col-12">
                            <div class="slider-content slider-animated-1">
                                <h1 class="animated fadeInUp">{{ $slider->title }}</h1>
                                <p class="animated fadeInUp delay-1s">{{ $slider->subtitle }}</p>
                                <div class="slider-btn">
                                    {{-- Previous commented buttons --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

    {{-- <!-- Custom Navigation Buttons -->
    <div class="slider-navigation">
        <button class="slider-prev" aria-label="Previous Slide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slider-next" aria-label="Next Slide">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div> --}}
</div>
