@extends('layouts.main')
@section('content')
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$post->image}}</h6>
            <p class="card-text">{{$post->content}}</p>
        </div>
    </div>

    <a href="{{route('posts.index')}}" class="back-link">Back</a>

@endsection
