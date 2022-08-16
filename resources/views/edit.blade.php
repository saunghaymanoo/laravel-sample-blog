@extends('master')
@section('title') Edit Post @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card my-5">
                <div class="card-body">
                    <div class="d-flex mb-4 justify-content-between align-items-center">
                        <div class="">
                            <h1 class="mb-0">Edit Post</h1>

                        </div>
                        <div class="">
                            <a href="{{route('post.index')}}" class="btn btn-outline-primary">Home</a>
                        </div>
                    </div>

                    <form action="{{route('post.update',$post->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Post Tilte</label>
                            <input type="text" class="form-control form-control-lg" name="title" value="{{$post->title}}">
                        </div>
                        <div class="form-group">
                            <label for="">Post Description</label>
                            <textarea rows="10" class="form-control form-control-lg" name="description">{{$post->description}}</textarea>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary btn-lg">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection