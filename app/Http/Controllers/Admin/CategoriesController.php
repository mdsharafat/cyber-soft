<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $category        = new Category();
        $category->title = $request->title;
        $category->slug  = Str::of($request->title)->slug('-');
        $category->save();
        return redirect('admin/categories')->with('flash_message', 'Category added!');
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        DB::table('categories')
            ->where('id', $id)
            ->update(['title' => $request->title, 'slug' => Str::of($request->title)->slug('-')]);
        return redirect('admin/categories')->with('flash_message', 'Category updated!');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect('admin/categories')->with('flash_message', 'Category deleted!');
    }
}
