<?php

namespace App\Http\Controllers;

// modelos
use App\Post;
use \TCG\Voyager\Models\Category;

class PostCategoriesController extends Controller
{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $posts = Post::published()->where('category_id', $category->id)->paginate(6);
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