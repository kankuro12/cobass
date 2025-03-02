@extends('admin.layout.app')

@section('css')
<style>
    .upload-container {
        padding: 30px;
        background: #cecece;
        border-radius: 10px;
    }

    .upload-container #single-upload-container {
        padding: 10px;
        display: flex;
        border-radius: 10px;
        border: 2px dashed #716880;
        min-height: 170px;
        flex-wrap: wrap;
    }

    .upload-container #single-upload-container .single-upload {
        width: 20%;
        padding: 5px;
        background: white;
        height: 150px;
        overflow: hidden;
        align-items: center;
        position: relative;
        border: 1px dashed #716880;
    }

    .upload-container #single-upload-container .single-upload button {
        position: absolute;
        top: 0px;
        right: 0px;
        height: 30px;
        width: 30px;
        background: #d80000;
        color: white;
        border: none;
    }

    .upload-container #single-upload-container .single-upload img {
        width: 100%;
    }

    .form-label {
        font-weight: 600;
        font-size: 1.1rem;
        color: black;
        margin-top: 5px;
    }

    .form-control {
        border-radius: 5px !important;
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

    .achievement-container {
        margin-top: 20px;
    }

    .achievement-item {
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 15px;
        background: #fff;
    }

    .achievement-item img {
        max-width: 100%;
        border-radius: 5px;
    }

    .achievement-item h4 {
        margin-top: 10px;
        font-size: 1.2rem;
        font-weight: 600;
    }

    .achievement-item p {
        margin-top: 5px;
        font-size: 1rem;
        color: #555;
    }

    .achievement-item .actions {
        margin-top: 10px;
    }

    .achievement-item .actions .btn {
        margin-right: 5px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <h2>Achievements</h2>
    <a href="{{ route('admin.achievements.create') }}" class="btn btn-primary">Add Achievement</a>

    <!-- Achievement List -->
    <div class="achievement-container">
        @foreach($achievements as $achievement)
        <div class="achievement-item">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('storage/' . $achievement->image) }}" alt="{{ $achievement->title }}">
                </div>
                <div class="col-md-9">
                    <h4>{{ $achievement->title }}</h4>
                    <p>{{ $achievement->description }}</p>
                    <div class="actions">
                        <a href="{{ route('admin.achievements.edit', $achievement->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.achievements.destroy', $achievement->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
