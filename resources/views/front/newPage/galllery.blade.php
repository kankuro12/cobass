@extends('front.layout.app')
@section('css')
    <style>
        .filter {
            display: none;
        }

        .show {
            display: block;
        }

        .btn {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: white;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #ddd;
        }

        .btn.active {
            background-color: #666;
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95"
            style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
            <div class="container">
                <h2>Shop Grid</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .
                </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Shop Grid</span></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="event-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-top-bar">
                        <div class="shop-tab-wrap">
                            <div class="shop-tab nav">
                                <a class="active" href="#shop-1" data-toggle="tab">
                                    <i class="fa fa-table"></i>
                                </a>

                            </div>
                            <p>Showing 1–12 of 20 result</p>
                        </div>

                        <div class="filter-buttons">
                            <button class="btn filter-button active" onclick="filterSelection('all')">All</button>
                            <button class="btn filter-button" onclick="filterSelection('student')">Student</button>
                            <button class="btn filter-button" onclick="filterSelection('teacher')">Teacher</button>
                            <!-- Add more buttons for other categories as needed -->
                        </div>
                    </div>
                    <div class="shop-bottom-area mt-30">
                        <div class="tab-content jump">
                            <div id="shop-1" class="tab-pane active">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter student">
                                        <div class="product-wrap mb-30 ">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>

                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery</a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter student">
                                        <div class="product-wrap mb-30 ">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter student">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter student">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter teacher">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter teacher">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter teacher">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter teacher">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter teacher">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter teacher">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter student">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 filter teacher">
                                        <div class="product-wrap mb-30">
                                            <div class="product-img">
                                                <a href="single-product.html"><img
                                                        src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                        alt=""></a>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-title-rating-wrap">
                                                    <div class="product-title">
                                                        <h3><a href="single-product.html">Gallery </a></h3>
                                                    </div>

                                                </div>
                                                <div class="pro-category-price">
                                                    {{-- <span class="pro-category">1</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="pro-pagination-style text-center mt-30">
                <ul>
                    <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pb-130">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function filterSelection(c) {
            console.log("Filtering by:", c);

            var x, i;
            x = document.getElementsByClassName("filter");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }

        // Initial filter
        filterSelection("all");
    </script>
@endsection
