<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $services = Service::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $services = Service::latest()->paginate($perPage);
        }

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:services'
        ]);
        
        $requestData = $request->all();
        
        Service::create($requestData);

        return redirect('admin/services')->with('flash_message', 'Service added!');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);

        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('services')->ignore(Service::find($id)),
            ]
        ]);

        $requestData = $request->all();
        
        $service = Service::findOrFail($id);
        $service->update($requestData);

        return redirect('admin/services')->with('flash_message', 'Service updated!');
    }

    public function destroy($id)
    {
        Service::destroy($id);

        return redirect('admin/services')->with('flash_message', 'Service deleted!');
    }
}
