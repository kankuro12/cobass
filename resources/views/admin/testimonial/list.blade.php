

 @extends('admin.layout.app')
 @section('css')
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('admin/plugins/drophify/css/dropify.min.css') }}">
 @endsection
 @section('s-title')
     /<a href="{{ route('admin.testimonial.list') }}">Testimonial</a>/List
 @endsection
 @section('content')
     <div class="bg-white p-5 shadow">
         <form action="{{ route('admin.testimonial.save') }}" method="POST" enctype="multipart/form-data">

             @csrf

             @foreach ($testimonials as $testimonial)
                 <div class="row">
                     <div class="col-md-9">

                         <div class="row">
                             <div class="col-md-9">
                                 <label for="image">
                                     Image
                                 </label>
                                 <input type="file" name="image" id="image" class="photo"
                                     data-defult-file="{{ asset($testimonial->image) }}">
                             </div>
                             <div class="col-md-5">
                                 <div class="mb-2">

                                     <label for="name">
                                         Name:
                                     </label>
                                     <input type="text" name="name" id="name" class="form-control"
                                         value="{{ $testimonial->name }}">
                                 </div>
                             </div>
                             <div class="col-md-5">
                                 <label for="faculty">
                                     faculty
                                 </label>
                                 <input type="text" name="faculty" id="faculty" class="form-control" required
                                     value="{{ $testimonial->profission }}">
                             </div>
                         </div>
                         <div class="mb-9">

                             <label for="long_des">
                                 Long Description
                             </label>
                             <textarea name="long_des" id="long_des" class="form-control" required value="{{ $testimonial->long_des }}"></textarea>
                         </div>
                         <div class="mb-2">


                         <div class="text-right">
                             <button class="btn btn-primary">
                                 save
                             </button>

                         </div>

                     </div>

                 </div>
             @endforeach
         </form>
     </div>
 @endsection
 @section('script')
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
     <script src="{{ asset('admin/plugins/drophify/js/dropify.min.js') }}"></script>
     <script>
         $(function() {
             $('.photo').dropify();
             $('#desc').summernote();
         });
     </script>
 @endsection
