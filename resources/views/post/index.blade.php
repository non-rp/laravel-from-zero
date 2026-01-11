@extends('layouts.main')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Post title</th>
                <th scope="col">Content</th>
                <th scope="col">Likes</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->likes}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
