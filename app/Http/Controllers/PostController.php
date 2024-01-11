<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        $posts = [];
        // get here all post with who user created this post with eager loading.
        // compact the post data to welcome view.
        $posts = Post::where('user_id', 1)->paginate(6);
        return view('welcome', compact('posts'));
    }
}
