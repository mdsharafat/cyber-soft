<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Skill;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SkillsController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $skills = Skill::where('name', 'LIKE', "%$keyword%")
                ->orWhere('progress', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $skills = Skill::latest()->paginate($perPage);
        }

        return view('admin.skills.index', compact('skills'));
    }

    public function create()
    {
        return view('admin.skills.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:skills'
        ]);
        $requestData = $request->all();
        
        Skill::create($requestData);

        return redirect('admin/skills')->with('flash_message', 'Skill added!');
    }

    public function show($id)
    {
        $skill = Skill::findOrFail($id);

        return view('admin.skills.show', compact('skill'));
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);

        return view('admin.skills.edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('skills')->ignore(Skill::find($id)),
            ]
        ]);
        $requestData = $request->all();
        
        $skill = Skill::findOrFail($id);
        $skill->update($requestData);

        return redirect('admin/skills')->with('flash_message', 'Skill updated!');
    }

    public function destroy($id)
    {
        Skill::destroy($id);

        return redirect('admin/skills')->with('flash_message', 'Skill deleted!');
    }
}
