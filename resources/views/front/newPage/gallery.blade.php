@extends('front.layout.app')

@section('css')
    <style>
        /* Filter styles */
        .filter {
            display: block; /* Initially show all images */
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        .filter:not(.show) {
            display: none;
        }

        /* Card and image styling */
        .card {
            margin-bottom: 30px;
        }

        .card img {
            height: 200px;
            object-fit: cover;
        }

        /* Pagination styling */
        .pro-pagination-style ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .pro-pagination-style ul li {
            margin: 0 5px;
        }

        .pro-pagination-style ul li a {
            padding: 5px 10px;
            border: 1px solid #ccc;
            color: #333;
            text-decoration: none;
        }

        .pro-pagination-style ul li a.active {
            background-color: #007bff;
            color: white;
        }

        .pro-pagination-style ul li a:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
@endsection

@section('content')
    <!-- Breadcrumb Section -->
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95"
            style="background-image:url(assets/img/bg/breadcrumb-bg-4.jpg);">
            <div class="container">
                <h2>Gallery</h2>
                <p>
                    Explore our curated collection of images showcasing the best of what we offer. Our gallery highlights a range of stunning visuals, from captivating moments to unique creations. Whether you're looking for inspiration or just want to admire exceptional work, this is the place to be. Dive into the beauty of our visuals and see how we bring creativity to life.
                </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Gallery</span></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="event-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Loop through each gallery type -->
                    <div class="row">
                        @foreach ($galleryTypes as $galleryType)
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="{{ route('gallery.show', $galleryType->id) }}">
                                        <img src="{{ asset($galleryType->icon ?? 'default.jpg') }}" class="card-img-top"
                                            alt="{{ $galleryType->name }}">
                                    </a>
                                    <div class="card-body text-center">
                                        <h5>{{ $galleryType->name }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="pro-pagination-style text-center mt-30">
        <ul>
            <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
            <li><a class="active" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
        </ul>
    </div>

    <!-- Brand Logo Section -->
    <div class="brand-logo-area pb-130">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                @foreach(range(1, 7) as $i)
                    <div class="single-brand-logo">
                        <a href="#"><img src="https://htmldemo.net/glaxdu/glaxdu/assets/img/brand-logo/1.png" alt=""></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            filterSelection("all"); // Ensure all items are visible on load
        });

        function filterSelection(c) {
            console.log("Filtering by:", c);

            let elements = document.querySelectorAll(".filter");
            elements.forEach((el) => {
                el.classList.remove("show");
                if (c === "all" || el.classList.contains(c)) {
                    el.classList.add("show");
                }
            });
        }

        function openAlbum(albumId) {
            $.ajax({
                url: '/get-album-images/' + albumId,
                type: 'GET',
                success: function(response) {
                    $('#albumTitle').text(response.album.name);
                    let imagesHtml = '';
                    response.images.forEach(image => {
                        imagesHtml += `<div class="col-md-4"><img src="${image.file}" class="w-100"></div>`;
                    });
                    $('#albumImages').html(imagesHtml);
                    $('#albumModal').modal('show');
                }
            });
        }
    </script>
@endsection
