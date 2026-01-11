@extends('layouts.main')
@section('content')
    <div>
        @foreach($posts as $post)
            {{$post->title}}
            {{$post->content}}
            {{$post->likes}}
        @endforeach
    </div>
@endsection
