@extends('layouts.admin')
@section('page-title', 'Pages')
@section('content')
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
            <h3 class="card-title">Pages</h3>

            <div class="card-tools" >
                <ul class="pagination pagination-sm float-right">
                    {{ $pages->withQueryString()->links() }}
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
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{$page->title}}</td>
                        <td class="d-flex gap-2 justify-content-end">
                            <a href="{{route('posts.show', $page->id)}}" class="btn btn-primary">Show page</a>
                            <a href="{{route('admin.posts.edit', $page->id)}}" class="btn btn-warning">Edit page</a>
                            <form action="{{route('admin.posts.destroy', $page->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete page</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
