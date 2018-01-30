<?php

namespace App\Http\Controllers;

// modelos
use App\Post;
use \TCG\Voyager\Models\Category;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->published()->first();
        $lastPosts = Post::published()->take(3)->get();
        $categorys = Category::all();
        $tags = Post::popularTagsNormalized(5);

        return $this->view('post', [
            'post'      => $post,
            'tags'      => $tags,
            'categorys' => $categorys,
            'lastPosts' => $lastPosts
        ]);
    }
}