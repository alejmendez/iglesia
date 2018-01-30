<?php

namespace App\Http\Controllers;

// modelos
use App\Post;
use \TCG\Voyager\Models\Category;

class PostsController extends Controller
{
    public function show()
    {
        $posts = Post::published()->paginate(6);
        $lastPosts = Post::published()->take(3)->get();
        $categorys = Category::all();
        $tags = Post::popularTagsNormalized(5);

        return $this->view('posts', [
            'posts'     => $posts,
            'tags'      => $tags,
            'lastPosts' => $lastPosts,
            'categorys' => $categorys,
        ]);
    }
}