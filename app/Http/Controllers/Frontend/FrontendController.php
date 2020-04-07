<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Category;
use App\Post;
use App\Project;
use App\Skill;
use App\Service;
use App\Tag;
use DB;

class FrontendController extends Controller
{
    public function index()
    {
        $skills   = Skill::all();
        $services = Service::all();
        $posts    = Post::latest()->take(4)->get();
        $projects = Project::all();
        return view('frontend.index', compact('posts', 'projects', 'skills', 'services'));
    }

    public function posts()
    {
        $categories = Category::all();
        $posts = Post::paginate(15);
        return view('frontend.posts', compact('posts', 'categories'));
    }

    public function postByCategory($slug)
    {
        $categories = Category::all();
        $postByCategory = Category::where('slug', $slug)->first();
        return view('frontend.post-by-category', compact('categories', 'postByCategory'));
    }

    public function postByTag($slug)
    {
        $categories = Category::all();
        $postByTag = Tag::where('slug', $slug)->first();
        return view('frontend.post-by-tag', compact('categories', 'postByTag'));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $postKey = "post_".$post->id;
        if(!Session::has($postKey)){
            $post->increment('view_count');
            Session::put($postKey, 1);
        }
        $arrayOfTags = [];
        
        foreach($post->tags as $tag){
            array_push($arrayOfTags, $tag->id);
        }
        $relatedPosts = Post::whereHas('tags', function($q) use ($arrayOfTags){
            $q->whereIn('tag_id', $arrayOfTags);
        })->take(2)->get();
        return view('frontend.single-post', compact('post', 'relatedPosts'));
    }

    public function projects()
    {
        $projects = Project::latest()->get();
        return view('frontend.projects', compact('projects'));
    }

    public function searchPost(Request $request)
    {
        $categories = Category::all();
        $keyword = $request->keyword;
        $posts = Post::where('title', 'LIKE', "%$keyword%")
                ->get();
        return view('frontend.post-by-search', compact('categories', 'posts'));
    }
}
