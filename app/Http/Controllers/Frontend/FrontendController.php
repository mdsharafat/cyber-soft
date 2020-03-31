<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return view('frontend.single-post');
    }

    public function projects()
    {
        return view('frontend.projects');
    }
}
