<div class="achievement-area pt-130 pb-115">
    <div class="container">
        <div class="section-title mb-75">
            <h2>Our <span>Achievement</span></h2>
        </div>
        <div class="row">
            <!-- Students -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-one">
                    <div class="count-img">
                        <img src="{{ asset('storage/' . ($achievementData['students']->icon ?? 'default-icon.png')) }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $achievementData['students']->value ?? '0' }}</h2>
                        <span>STUDENTS</span>
                    </div>
                </div>
            </div>

            <!-- Graduates -->
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-two">
                    <div class="count-img">
                        <img src="{{ asset('storage/' . ($achievementData['graduates']->icon ?? 'default-icon.png')) }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $achievementData['graduates']->value ?? '0' }}</h2>
                        <span>GRADUATES</span>
                    </div>
                </div>
            </div>

            <!-- Awards -->
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-three">
                    <div class="count-img">
                        <img src="{{ asset('storage/' . ($achievementData['awards']->icon ?? 'default-icon.png')) }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $achievementData['awards']->value ?? '0' }}</h2>
                        <span>AWARD WINNING</span>
                    </div>
                </div>
            </div>

            <!-- Faculties -->
            <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                <div class="single-count mb-30 count-four">
                    <div class="count-img">
                        <img src="{{ asset('storage/' . ($achievementData['faculties']->icon ?? 'default-icon.png')) }}" alt="">
                    </div>
                    <div class="count-content">
                        <h2 class="count">{{ $achievementData['faculties']->value ?? '0' }}</h2>
                        <span>FACULTIES</span>
                    </div>
                </div>
            </div>
        </div>

        @include('front.newPage.add.testimonials')

        <div class="testimonial-text-img">
            <img alt="" src="https://htmldemo.net/glaxdu/glaxdu/assets/img/icon-img/testi-text.png">
        </div>
    </div>
</div>
