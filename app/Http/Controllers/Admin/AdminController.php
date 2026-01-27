<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $this->authorize('view', auth()->user());

        $categories = Category::all();
        $tags = Tag::all();

        $data = $request->validated();

        $filter = app()->make(PostFilter::class, [
            'queryParams' => array_filter($data)
        ]);

        $posts = Post::filter($filter)->paginate(10);
        return view('admin.post.index', compact('categories', 'tags', 'posts') );
    }

}
