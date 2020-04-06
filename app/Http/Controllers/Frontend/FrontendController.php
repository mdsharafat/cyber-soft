<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Skill;
use App\Service;

class FrontendController extends Controller
{
    public function index()
    {
        $skills   = Skill::all();
        $services = Service::all();
        $posts    = Post::latest()->take(4)->get();
        return view('frontend.index', compact('posts', 'skills', 'services'));
    }

    public function posts()
    {
        return view('frontend.posts');
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('frontend.single-post', compact('post'));
    }

    public function projects()
    {
        return view('frontend.projects');
    }
}
