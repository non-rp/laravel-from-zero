<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('post.index', compact('posts'));
    }

    public function create() {
                return view('post.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
        ]);

        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function update()
    {
        $post = Post::find(2);

        $post->update(
            [
                'title' => 'My Third Post',
                'content' => 'This is my third post content',
                'image' => 'image.jpg',
                'likes' => 30,
                'is_published' => false,
            ]
        );
        dd('updated');
    }

    public function delete(): void
    {
//        Delete all with n+1 query not recomended
//        $posts = Post::all();
//        foreach ($posts as $item) {
//            $item->delete();
//        }

//          Eloquent query builder
        Post::query()->delete();
//        Post::where('is_published', 0)->delete();

//        Low level delete
//        DB::table('posts')->delete();
//        DB::table('posts')
//            ->where('status', 'draft')
//            ->delete();

//        Chunk deletes
//        $chunk = Post::chunkById(100);
//        foreach ($chunk as $post) {
//            $post->delete();
//        }

//        Delete one
//        $post = Post::find(2);
//        $post->delete();

//        Restore
//        $post = Post::withTrashed()->find(2);
//        $post->restore();

        dd('deleted');
    }

}
