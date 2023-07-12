<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function homePage(){

        $posts = Post::with('user')->get();
        return view('pages.home')->with('posts', $posts);
        
    }




}
