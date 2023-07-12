<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function singlePost($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.single', compact('post'));
        //return view('pages.home', compact('post'));
    }
}
