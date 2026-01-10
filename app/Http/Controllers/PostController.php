<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): void
    {
        $posts = Post::all();
        dump($posts);
    }

    public function create() {
        $postArr = [
            [
                'title' => 'My First Post',
                'content' => 'This is my first post content',
                'image' => 'image.jpg',
                'likes' => 10,
                'is_published' => true,
            ],
            [
                'title' => 'My Second Post',
                'content' => 'This is my second post content',
                'image' => 'image.jpg',
                'likes' => 20,
                'is_published' => true,
            ],
            [
                'title' => 'My Third Post',
                'content' => 'This is my third post content',
                'image' => 'image.jpg',
                'likes' => 30,
                'is_published' => false,
            ],
        ];

        foreach ($postArr as $post) {
            Post::create($post);
        }

        dd('created');
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
