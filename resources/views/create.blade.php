@extends('master')
@section('title') Sample Blog Create @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card my-5">
                <div class="card-body">
                    <div class="d-flex mb-4 justify-content-between align-items-center">
                        <div class="">
                            <h1 class="mb-0">Create Post</h1>

                        </div>
                        <div class="">
                            <a href="{{route('post.index')}}" class="btn btn-outline-primary">Home</a>
                        </div>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="m-0">
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('post.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Post Tilte</label>
                            <input type="text" value="{{old('title')}}" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title">
                            @error('title')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Post Description</label>
                            <textarea rows="10" class="form-control form-control-lg @error('title') is-invalid @enderror" name="description">{{old('title')}}</textarea>
                           @error('description')
                            <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn btn-primary btn-lg">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection