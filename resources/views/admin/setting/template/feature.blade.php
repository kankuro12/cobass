
<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title bg-white text-start text-primary pe-3">Why Us!</p>
                <h1 class="mb-4">Few Reasons Why People Choosing Us!</h1>
                <p class="mb-4">{{$curdata['desc']}}</p>
                <p><i class="fa fa-check text-primary me-3"></i>{{$curdata['reason1']}}</p>
                <p><i class="fa fa-check text-primary me-3"></i>{{$curdata['reason2']}}</p>
                <p><i class="fa fa-check text-primary me-3"></i>{{$curdata['reason3']}}</p>
            </div>
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4">
                                <h1 class="display-6 text-white" data-toggle="counter-up">{{$curdata['count1']}}</h1>
                                <span class="fs-5 fw-semi-bold text-secondary">{{$curdata['subtitle1']}}</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <h1 class="display-6" data-toggle="counter-up">{{$curdata['count2']}}</h1>
                                <span class="fs-5 fw-semi-bold text-primary">{{$curdata['subtitle2']}}</span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="text-center bg-secondary py-5 px-4">
                                <h1 class="display-6" data-toggle="counter-up">{{$curdata['count3']}}</h1>
                                <span class="fs-5 fw-semi-bold text-primary">{{$curdata['subtitle3']}} </span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center bg-primary py-5 px-4">
                                <h1 class="display-6 text-white" data-toggle="counter-up">{{$curdata['count4']}}</h1>
                                <span class="fs-5 fw-semi-bold text-secondary">{{$curdata['subtitle4']}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->
