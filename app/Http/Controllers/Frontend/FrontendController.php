<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function posts()
    {
        return view('frontend.posts');
    }

    public function singlePost()
    {
        $post = Post::where('id', 1)->first();
        return view('frontend.single-post', compact('post'));
    }

    public function projects()
    {
        return view('frontend.projects');
    }
}
