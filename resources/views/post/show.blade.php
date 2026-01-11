@extends('layouts.main')
@section('content')
    <a href="{{route('posts.index')}}" class="back-link mb-4 btn btn-primary">Back</a>

    <div class="card mb-4" style="">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$post->image}}</h6>
            <p class="card-text">{{$post->content}}</p>
        </div>
    </div>

    <form action="{{route('posts.destroy', $post)}}" method="post">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete This Post</button>
    </form>
@endsection
