@extends('admin.layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
    <style>
        .col-md-3 {
            margin-bottom: 10px;
        }

        label {
            font-weight: 600;
            font-size: 1.1rem;
            /* margin-bottom: 5px; */
            color: black;
            margin-top: 5px;
        }

        .form-control,
        .tox {
            border-radius: 5px !important;
        }

    </style>
@endsection
@section('page-option')
@endsection
@section('s-title')
    <li class="breadcrumb-item">
        <a href="{{ route('admin.setting.slider.index') }}">Sliders</a>
    </li>
    <li class="breadcrumb-item active">
        Add
    </li>
@endsection
@section('content')

    <div class="card shadow mb-3">
        <div class="card-body">
            <form action="{{ route('admin.setting.slider.add') }}" method="post" enctype="multipart/form-data" id="add-slider">

                @csrf
                <div class="row">
                    <div class="col-md-9">
                        <label for="image">Image</label>
                        <input type="file" name="image" id="image" class="form-control photo" required>
                    </div>

                    <div class="col-md-3">
                        <label for="mobile_image">Mobile Image</label>
                        <input type="file" name="mobile_image" id="mobile_image" class="form-control photo">
                    </div>
                    <div class="col-md-12">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control " >
                    </div>
                    <div class="col-md-12">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" name="subtitle" id="subtitle" class="form-control " >
                    </div>

                </div>
                <div class="shadow mt-3">
                    <h5 class="p-3">Button Setting</h5>
                    <hr class="m-0">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="link_title">Title</label>
                                        <input type="text" name="link_title" id="link_title" value="View More" class="form-control" >
                                    </div>
                                </div>

                                <div class="col-md-3" id="extra-link-wrapper">
                                    <div class="form-group">
                                        <label for="link">Link URL</label>
                                        <input type="text" name="link" id="link" class="form-control">
                                    </div>
                                </div>

                            </div>
                        </div>
                </div>
                <div class="py-2">
                    <button class="btn btn-primary">
                        Add Slider
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('script')

    <script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
    <script>
        $('.photo').dropify();
    </script>
@endsection
