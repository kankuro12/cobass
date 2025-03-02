@extends('admin.layout.app')

@section('styles')
<style>
    .form-label {
        font-weight: bold;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }
    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    .btn-success {
        background-color: #28a745;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        color: white;
    }
    .btn-success:hover {
        background-color: #218838;
    }
    .text-danger {
        color: #dc3545;
        font-size: 14px;
    }
    #image-preview {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h2>Add Achievement</h2>
    <form action="{{ route('admin.achievements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" required></textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Image</label>
            <input type="file" name="image" class="form-control" accept="image/*" required onchange="previewImage(event)">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            <div class="mt-2">
                <img id="image-preview" src="#" alt="Image Preview" style="max-width: 200px; display: none;">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Add</button>
    </form>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        const imagePreview = document.getElementById('image-preview');

        reader.onload = function() {
            if (reader.readyState === 2) {
                imagePreview.src = reader.result;
                imagePreview.style.display = 'block';
            }
        }

        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
