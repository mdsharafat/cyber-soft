<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class TagsController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        
        $tag        = new Tag();
        $tag->title = $request->title;
        $tag->slug  = Str::of($request->title)->slug('-');
        $tag->save();
        return redirect('admin/tags')->with('flash_message', 'Tag added!');
    }

    public function show($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.show', compact('tag'));
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);
        return view('admin.tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        DB::table('tags')
            ->where('id', $id)
            ->update(['title' => $request->title, 'slug' => Str::of($request->title)->slug('-')]);
        return redirect('admin/tags')->with('flash_message', 'Tag updated!');
    }

    public function destroy($id)
    {
        Tag::destroy($id);
        return redirect('admin/tags')->with('flash_message', 'Tag deleted!');
    }
}
