@extends('front.layout.app')
@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
            style="background-image:url('https://htmldemo.net/glaxdu/glaxdu/assets/img/bg/breadcrumb-bg-2.jpg');">
            <div class="container">
                <h2>Course Detail</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .
                </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Course Detail</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="course-details-area pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="course-left-wrap mr-40">
                        <div class="apply-area">
                            <img src="	https://htmldemo.net/glaxdu/glaxdu/assets/img/banner/course-details.jpg"
                                alt="">
                            <div class="course-apply-btn">
                                <a href="#" class="default-btn">APPLY NOW</a>
                            </div>
                        </div>
                        {{-- <div class="course-tab-list nav pt-40 pb-25 mb-35">
                            <a class="active" href="#course-details-1" data-toggle="tab">
                                <h4>Over View </h4>
                            </a>
                            <a href="#course-details-2" data-toggle="tab">
                                <h4>Instructor </h4>
                            </a>
                            <a href="#course-details-3" data-toggle="tab">
                                <h4> Reviews </h4>
                            </a>
                        </div> --}}
                        <br>
                        <div class="tab-content jump">
                            <div class="tab-pane active" id="course-details-1">
                                <div class="over-view-content">
                                    <h4>COURSE DETAILS</h4>
                                    <h5>Course Name : Grphic Design & Multimedia</h5>
                                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor
                                        sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                        quaerat voluptatem.</p>
                                    <div class="over-view-list">
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                            </div>
                                        </div>
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                            </div>
                                        </div>
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p>Es eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="course-details-img">
                                        <img src="assets/img/banner/course-details-1.jpg" alt="">
                                    </div> --}}
                                    <div class="course-summary-wrap">
                                        <div class="single-course-summary">
                                            <h4>Total Students</h4>
                                            <span><i class="fa fa-user"></i> 50</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Course Duration</h4>
                                            <span><i class="fa fa-clock"></i> 4yrs</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Course Fee</h4>
                                            <span><i class="fa fa-diamond"></i> 125</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Total Semester</h4>
                                            <span><i class="fa fa-book"></i> 12</span>
                                        </div>
                                    </div>
                                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor
                                        sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                        quaerat voluptatem.</p>
                                </div>
                            </div>
                            {{-- <div class="tab-pane" id="course-details-2">
                                <div class="over-view-content">
                                    <h4>INSTRUCTOR</h4>
                                    <h5>Head Of The Department : Ara’af Imtiaz</h5>
                                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor
                                        sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                        quaerat voluptatem.</p>
                                    <div class="over-view-list">
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                            </div>
                                        </div>
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                            </div>
                                        </div>
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p>Es eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-details-img">
                                        <img src="assets/img/banner/course-details-1.jpg" alt="">
                                    </div>
                                    <div class="course-summary-wrap">
                                        <div class="single-course-summary">
                                            <h4>Total Students</h4>
                                            <span><i class="fa fa-user"></i> 50</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Course Duration</h4>
                                            <span><i class="fa fa-clock-o"></i> 4yrs</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Course Credits</h4>
                                            <span><i class="fa fa-diamond"></i> 125</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Total Semester</h4>
                                            <span><i class="fa fa-book"></i> 12</span>
                                        </div>
                                    </div>
                                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor
                                        sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                                        et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia
                                        consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam
                                        quaerat voluptatem.</p>
                                </div>
                            </div> --}}
                            {{-- <div class="tab-pane" id="course-details-3">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/img/blog/recent-post-1.jpg" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-btn">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia
                                                    Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula.
                                                    Phasellus quam nisi, congue id nulla nec, convallis conval lis leo.
                                                    Maecenas bibendum bibendum larius.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="assets/img/blog/recent-post-2.jpg" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-btn">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia
                                                    Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula.
                                                    Phasellus quam nisi, congue id nulla nec, convallis conval lis leo.
                                                    Maecenas bibendum bibendum larius.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ratting-form-wrapper">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form>
                                            <div class="star-box">
                                                <span>Your rating:</span>
                                                <div class="ratting-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <input placeholder="Name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <input placeholder="Email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="Your Review" placeholder="Message"></textarea>
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="related-course pt-70">
                            <div class="related-title mb-45 mrg-bottom-small">
                                <h3>Related Course</h3>
                                <p>Hempor incididunt ut labore et dolore mm, itation ullamco laboris <br>nisi ut aliquip.
                                </p>
                            </div>
                            <div class="related-slider-active">
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated"
                                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Apparel Manufacturing</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated"
                                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Grphic Design & Multimedia</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated"
                                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Fashion & Technology</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated"
                                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Fashion & Technology</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-style sidebar-res-mrg-none">
                        <div class="sidebar-search mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Search</h4>
                            </div>
                            <form>
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar-about mb-40">
                            <div class="sidebar-title mb-15">
                                <h4>About Us</h4>
                            </div>
                            <p>quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolors eos qui
                                ratione voluptatem sad.</p>
                            <a href="#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                            <div class="sidebar-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa-brands fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-recent-post mb-35">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Post</h4>
                            </div>
                            <div class="recent-post-wrap">
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img
                                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img
                                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-category mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Course Category</h4>
                            </div>
                            <div class="category-list">
                                <ul>
                                    <li><a href="#">MBA <span>04</span></a></li>
                                    <li><a href="#">Graduate <span>08</span></a></li>
                                    <li><a href="#">Under Graduate <span>04</span></a></li>
                                    <li><a href="#">BBA <span>06</span></a></li>
                                    <li><a href="#">Engineering <span>04</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-recent-course-wrap mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Courses</h4>
                            </div>
                            <div class="sidebar-recent-course">
                                <div class="sin-sidebar-recent-course">
                                    <div class="sidebar-recent-course-img">
                                        <a href="#"><img
                                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="sidebar-recent-course-content">
                                        <h4><a href="#">Course Title</a></h4>
                                        <ul>
                                            <li>Credits : 125</li>
                                            <li class="duration-color">Duration : 4yrs</li>
                                        </ul>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                                <div class="sin-sidebar-recent-course">
                                    <div class="sidebar-recent-course-img">
                                        <a href="#"><img
                                                src="https://htmldemo.net/glaxdu/glaxdu/assets/img/course/related-course-1.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="sidebar-recent-course-content">
                                        <h4><a href="#">Course Title</a></h4>
                                        <ul>
                                            <li>Credits : 125</li>
                                            <li class="duration-color">Duration : 4yrs</li>
                                        </ul>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-tag-wrap">
                            <div class="sidebar-title mb-40">
                                <h4>Tag</h4>
                            </div>
                            <div class="sidebar-tag">
                                <ul>
                                    <li><a href="#">Loremsite</a></li>
                                    <li><a href="#">Loreipsum</a></li>
                                    <li><a href="#">Dolar</a></li>
                                    <li><a href="#">Site ament dollar</a></li>
                                    <li><a href="#">Loremsite</a></li>
                                    <li><a href="#">Dummy Text</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pb-130">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection
