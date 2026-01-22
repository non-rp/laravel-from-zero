@extends('layouts.admin')

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
        <div class="card">
            <div class="card-header" >
                <h3 class="card-title">Posts</h3>

                <div class="card-tools" >
                    <ul class="pagination pagination-sm float-right">
                        {{ $posts->withQueryString()->links() }}
                    </ul>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Likes</th>
                        <th>Category</th>
                        <th>Tags</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->likes}}</td>
                            <td><span class="badge bg-success">{{$post->category->title}}</span></td>
                            <td>
                                @if ($post->tags->isNotEmpty())
                                    @foreach ($post->tags as $tag)
                                        <span class="badge bg-warning">
                                    {{$tag->title}}
                                </span>
                                    @endforeach
                                @else
                                    <span class="text-muted">No tags</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">Show post</a>
                                <a href="{{route('posts.edit', $post->id)}}" class="btn btn-warning">Edit post</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
@endsection
