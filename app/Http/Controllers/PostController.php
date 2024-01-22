<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->filter(request(['search']))->simplePaginate(6)->withQueryString();

        return view('posts', [
            'posts' => $posts,
            'categories' => Category::all(),
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'post' => $post, 
        ]);
    }
}
