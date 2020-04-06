<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Str;
use DB;
use Illuminate\Validation\Rule;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $projects = Project::where('title', 'LIKE', "%$keyword%")
                ->orWhere('short_desc', 'LIKE', "%$keyword%")
                ->orWhere('url', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $projects = Project::latest()->paginate($perPage);
        }

        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        $project = new Project();
        return view('admin.projects.create', compact('project'));
    }

    public function uploadImage($image, $uploadPath)
    {
        $imageName = Str::random(10).'.'.$image->getClientOriginalExtension();
        $image->move($uploadPath, $imageName);
        return $imageName;
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:projects',
            'url' => 'required|unique:projects',
        ]);
        
        $project = new Project();
        $project->title = $request->title;
        $project->short_desc = $request->short_desc;
        $project->url = $request->url;
        if ($request->hasfile('image')) {
            $image           = $request->file('image');
            $uploadPath      = 'storage/projects/';
            $project->image = $this->uploadImage($image, $uploadPath);
        }
        $project->save();

        return redirect('admin/projects')->with('flash_message', 'Project added!');
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.projects.show', compact('project'));
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => [
                'required',
                Rule::unique('projects')->ignore(Project::find($id)),
            ],
            'url' => [
                'required',
                Rule::unique('projects')->ignore(Project::find($id)),
            ],
        ]);

        $project = Project::findOrFail($id);
        $requestData = array();

        $requestData['title']      = $request->title;
        $requestData['short_desc']    = $request->short_desc;
        $requestData['url']    = $request->url;
        if ($request->hasfile('image')) {
            if ($project->image) {
                $delete_project_image = 'storage/projects/'.$project->image;
                unlink($delete_project_image);
            }
            $image               = $request->file('image');
            $uploadPath          = 'storage/projects/';
            $requestData['image'] = $this->uploadImage($image, $uploadPath);
        }
        $project->update($requestData);
        return redirect('admin/projects')->with('flash_message', 'Project updated!');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if ($project->image) {
            $delete_project_image = 'storage/projects/'.$project->image;
            unlink($delete_project_image);
        }
        Project::destroy($id);
        return redirect('admin/projects')->with('flash_message', 'Project deleted!');
    }
}
