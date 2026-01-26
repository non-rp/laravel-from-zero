@extends('layouts.main')
@section('content')
    <div class="container">

        @foreach (['success', 'danger', 'warning', 'info'] as $type)
            @if (session($type))
                <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
                    {{ session($type) }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif
        @endforeach

        <div class="d-grid align-items-center gap-3" style="grid-template-columns: 1fr 1fr 1fr;">
            @foreach($posts as $post)
                <div class="col">
                    <div class="card" style="width: 100%;">
                        <img src="" class="card-img-top" alt="{{$post->image}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Likes: {{$post->likes}}</h6>
                            <p class="card-text">{{$post->content}}</p>
                            <p class="card-text">Category: {{$post->category->title}}</p>
                            <p class="card-text">Tags:
                                @if ($post->tags->isNotEmpty())
                                    @foreach ($post->tags as $tag)
                                        {{$tag->title}}
                                    @endforeach
                                @else
                                    <span class="text-muted">No tags</span>
                                @endif
                            </p>
                            <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Show post</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="paginate">
                {{ $posts->withQueryString()->links() }}
            </div>
        </div>
    </div>
@endsection
