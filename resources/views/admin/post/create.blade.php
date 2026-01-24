@extends('layouts.admin')
@section('content')
    <a href="{{@route('posts.index')}}" class="btn btn-primary mb-3">All posts</a>
    <div class="card card-primary">
        <form action="{{route('posts.store')}}" method="post" class="--bs-light-bg-subtle">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input
                        value="{{old('title')}}"
                        type="text" name="title" class="form-control" id="title" aria-label="default input">
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="form-control" id="content" rows="3">{{old('content')}}</textarea>
                    @error('content')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input
                        value="{{old('image')}}"
                        type="text" name="image" class="form-control" id="image" >
                    @error('image')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="category_id" class="form-label">Category</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        @foreach ($categories as $category)
                            <option
                                {{ old('category_id') == $category->id ? ' selected' : '' }}
                                value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <select class="form-select" multiple aria-label="Multiple select example" name="tags[]">
                        @foreach ($tags as $tag)
                            <option
                                {{ in_array($tag->id, old('tags', [])) ? 'selected' : '' }}
                                value="{{$tag->id}}">{{$tag->title}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection
