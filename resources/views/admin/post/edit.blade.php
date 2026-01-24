@extends('layouts.admin')
@section('content')
    <a href="{{@route('admin.posts.index')}}" class="btn btn-primary mb-3">All posts</a>
    <div class="card card-primary">
        <form action="{{route('admin.posts.store')}}" method="post" class="--bs-light-bg-subtle">
            @csrf
            <div class="card-body">
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" id="title" aria-label="default input"
                           value="{{$post->title}}">
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="3">{{$post->content}}</textarea>
                    @error('content')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input value="{{$post->image}}" type="text" name="image" class="form-control" id="image" >
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        @foreach ($categories as $category)
                            <option
                                {{$category->id === $post->category_id ? ' selected' : ''}}
                                value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Tags</label>
                    <select class="form-select" multiple aria-label="Multiple select example" name="tags[]">
                        @foreach ($tags as $tag)
                            <option
                                @foreach($post->tags as $postTag)
                                    {{$tag->id === $postTag->id ? ' selected' : ''}}
                                @endforeach
                                value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
