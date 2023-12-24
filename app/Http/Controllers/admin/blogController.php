<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\blog_types;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(Request $request)
    {

        $blogs = blog::all();
        return view('back.blog.list', compact('blogs'));
    }

    public function add(Request $request)
    {
        $types = blog_types::all();
        return view('back.blog.form', compact('types'));
    }

    public function edit(Request $request , int $id){
        $blog=blog::find($id);
        $types= blog_types::all();
        return view('back.blog.form' , compact('types','blog'));
    }


    public function save(Request $request, int $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'type' => 'required',
            'text' => 'required',
        ]);

        if ($id == -1) {

            $item = blog::create([
                'title' => $request->title,
                'show_post' => ($request->has('show_post') ? true : false),
                'text' => $request->text,
                'image' => $request->image ? $request->image : '',
                'type_id' => $request->type,
            ]);
        } else {
            $item = blog::find($id);
            $item->title = $request->title;
            $item->text = $request->text;
            $item->type_id = $request->type;
            $item->show_post = $request->has('show_post') ? true : false;
            $item->save();

        }
        if ($request->files->count() > 0) {
            $item->image = $request->file('image')->getClientOriginalName();
            $item->save();
            $request->file('image')->move(storage_path('app/public/images/blogs'), $request->file('image')->getClientOriginalName());
        }
        return redirect()->route('dashboard.blogs');


    }

    public function types(Request $request)
    {

        $types = blog_types::all();
        return view('back.blog.types.list', compact('types'));
    }

    public function addtype()
    {
        return view('back.blog.types.form');
    }

    public function edittype(Request $request, int $id)
    {

        $type = blog_types::find($id);
        return view('back.blog.types.form', compact('type'));
    }

    public function savetype(Request $request, int $id)
    {
        $this->validate($request, ['title' => 'required']);


        if ($id == -1) {
            blog_types::create(['name' => $request->title]);
        } else {
            $type = blog_types::find($id);
            $type->name = $request->title;
            $type->save();
        }
        return redirect()->route('dashboard.blogs.types');

    }
}
