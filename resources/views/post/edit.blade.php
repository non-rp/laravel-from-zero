@extends('layouts.main')
@section('content')
    <a href="{{@route('posts.index')}}" class="btn btn-primary mb-3">Back</a>

    <form action="{{route('posts.update', $post)}}" method="post" class="--bs-light-bg-subtle">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-label="default input"
                   value="{{$post->title}}">

        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content" rows="3">{{$post->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input value="{{$post->image}}" type="text" name="image" class="form-control" id="image" >
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
