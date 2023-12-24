<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\project;
use App\Models\project_type;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use function Symfony\Component\Translation\t;

class projectController extends Controller
{
    public function index(Request $request)
    {
        $projects = project::all();
        return view('back.projects.list', compact('projects'));
    }

    public function add(Request $request)
    {
        $types = project_type::all();
        return view('back.projects.form', compact('types'));
    }

    public function edit(Request $request, int $id)
    {

        $project= project::find($id);
        $types = project_type::all();

        return view('back.projects.form', compact('project' , 'types'));
    }

    public function save(Request $request, int $id)
    {

        $this->validate($request, [
            'title' => 'required',
            'website' => 'required',
            'type' => 'required',
        ]);
        if ($id == -1) {
            $item = project::create([
                'title' => $request->title,
                'website' => $request->website,
                'text' => $request->text,
                'type_id' => $request->type,
            ]);
        } else {
            $item= project::find($id);
            $item->title=$request->title;
            $item->website=$request->website;
            $item->text=$request->text;
            $item->type_id=$request->type;
            $item->save();

        }
        if ($request->files->count() > 0) {
            $item->image = $request->file('image')->getClientOriginalName();
            $item->save();
            $request->file('image')->move(storage_path('app/public/images/projects'), $request->file('image')->getClientOriginalName());
        }
        return redirect()->route('dashboard.projects');
    }

    public function types(Request $request)
    {
        $types = project_type::all();
        return view('back.projects.types.list', compact('types'));

    }

    public function addtype(Request $request)
    {
        return view('back.projects.types.form');

    }

    public function edittype(Request $request, int $id)
    {
        $type = project_type::find($id);
        return view('back.projects.types.form', compact('type'));

    }

    public function savetype(Request $request, int $id)
    {
        $this->validate($request, ['title' => 'required']);


        if ($id == -1) {
            project_type::create(['name' => $request->title]);
        } else {
            $type = project_type::find($id);
            $type->name = $request->title;
            $type->save();
        }
        return redirect()->route('dashboard.projects.types');
    }


}
