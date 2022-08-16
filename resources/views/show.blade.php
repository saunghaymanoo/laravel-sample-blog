@extends('master')
@section('title') {{$post->title}} @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card my-5">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                    <div class="">
                        <h1 class="mb-0">Post Detail</h1>
                        <p class="mb-0 text-black-50">
                           What is your mind?
                        </p>

                    </div>
                    <div class="">
                        <a href="{{route('post.index')}}" class="btn btn-outline-primary">Home</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <h1 class="card-title fw-bold">{{$post->title}}</h1>
                    <p class="card-text text-black-50">{{$post->description}}</p>
                    <div class="d-flex justify-content-between">
                    <p>{{$post->created_at->format('j M Y H:i A')}}</p>
                    <!-- <a href="{{route('post.show',$post->id)}}" class="btn btn-outline-primary">See More</a> -->
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection