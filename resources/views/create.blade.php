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

                    <form action="{{route('post.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Post Tilte</label>
                            <input type="text" class="form-control form-control-lg" name="title">
                        </div>
                        <div class="form-group">
                            <label for="">Post Description</label>
                            <textarea rows="10" class="form-control form-control-lg" name="description"></textarea>
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