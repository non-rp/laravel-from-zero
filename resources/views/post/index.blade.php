@extends('layouts.main')
@section('content')
    <div class="container">
        @if(@session('post_destroy'))
            <div class="alert alert-success">
                {{session('post_destroy')}}
            </div>
        @endif
        <a href="{{route('posts.create')}}" class="btn btn-primary mb-3 mt-3">Create New Post</a>
        <div class="d-grid align-items-center gap-3" style="grid-template-columns: 1fr 1fr 1fr;">
            @foreach($posts as $post)
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="" class="card-img-top" alt="{{$post->image}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Likes: {{$post->likes}}</h6>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Show post</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
