<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DB;

class PostsController extends Controller
{

    public function index(Request $request)
    {
        $posts = Post::latest()->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::latest()->get();
        $tags       = Tag::latest()->get();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $post          = new Post();
        $post->title   = $request->title;
        $post->content = $request->content;
        $post->user_id = 1;
        $post->slug    = Str::of($request->title)->slug('-');
        if($request->is_published) {
            $post->is_published = 1;
        }
        $post->save();
        $post->categories()->attach($request->category_id);
        $post->tags()->attach($request->tag_id);
        return redirect('admin/posts')->with('flash_message', 'Post added!');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('admin.posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post       = Post::findOrFail($id);
        $categories = Category::latest()->get();
        $tags       = Tag::latest()->get();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $post        = Post::findOrFail($id);
        $requestData = array();

        $requestData['title']      = $request->title;
        $requestData['content']    = $request->content;
        $requestData['slug']       = Str::of($request->title)->slug('-');
        
        if($request->is_published && $request->is_published == "on") {
            $requestData['is_published'] = 1;
        }else{
            $requestData['is_published'] = 0;
        }
        // dd($requestData['is_published']);
        $post->update($requestData);
        
        $post->categories()->sync($request->category_id);
        $post->tags()->sync($request->tag_id);

        return redirect('admin/posts')->with('flash_message', 'Post updated!');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect('admin/posts')->with('flash_message', 'Post deleted!');
    }

    public function publishPost($id)
    {
        $post = Post::findOrFail($id);

        if($post->is_published == 1){
            return redirect()->back()->with('flash_message', 'This post has already published');
        }else{
            DB::table('posts')
              ->where('id', $id)
              ->update(['is_published' => 1]);
            return redirect()->back()->with('flash_message', 'This post has published');
        }
    }
}
