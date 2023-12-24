<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\client;
use App\Models\comment;
use App\Models\config;
use App\Models\contact;
use App\Models\education;
use App\Models\experience;
use App\Models\project;
use App\Models\project_type;
use App\Models\service;
use App\Models\skill;
use App\Models\User;
use Illuminate\Http\Request;

class homePageController extends Controller
{
    public function index(Request $request)
    {

        $config = config::all();
        if (count($config) == 0)
            abort(500);
        else
            $config = $config[0];
//        dd($config);


        $services = service::all();
        $comments = comment::orderBy('created_at', 'desc')->get();

        $clients = client::all();


        $educations = education::orderBy('created_at', 'asc')->get();
        $experiences = experience::orderBy('created_at', 'asc')->get();
        $skills = skill::all();
        $projects = project::all();
        $projectTypes = project_type::all();

        $blogs = blog::orderBy('created_at', 'asc')->get();





//        dd($projectTypes);
//        dd($experiences);

        return view('front.mainpage.home', compact('config', 'services', 'comments', 'clients', 'educations', 'experiences', 'skills', 'projectTypes', 'projects', 'blogs'));
    }

    public function showBlog(Request $request, int $id)
    {
        $blog = blog::find($id);
        $config = config::all();
        if (count($config) == 0)
            abort(500);
        else
            $config = $config[0];
        return view('front.blog.show', compact('blog', 'config'));
    }

    public function contactMe(Request $request)
    {
        $this->validate($request, [
            'fullName' => 'required',
            'phone' => 'required',
            'email' => 'required| email',
            'text' => 'required',
        ]);

        contact::create([
            'fullName' => $request->fullName,
            'phone' => $request->phone,
            'email' => $request->email,
            'text' => $request->text,
        ]);

        return redirect()->route('Home');
    }

    public function init(Request $request)
    {
        return view('front.init');
    }

    public function saveInit(Request $request)
    {

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'phone' => 'required | numeric',
            'email' => 'required | email',
            'image' => 'required',
            'logo' => 'required',
            'password' => 'required',
        ]);


        $config = config::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'phone' => $request->phone,
            'email' => $request->email,
            'image' => $request->image,
            'about' => 'init',
            'birthday' => 'init',
        ]);

        User::create([
            'name' => $request->firstName . ' ' . $request->lastName,
            'email' => $request->email,
            'password' => $request->password
        ]);

        if ($request->files->count() > 0) {
            $config->image = $request->file('image')->getClientOriginalName();
            $config->save();
            $request->file('image')->move(public_path('assets/images/'),'my-avatar.png');

            if ($request->has('logo')){
                $request->file('logo')->move(public_path('assets/images/'),'logo.ico');

            }
        }


        return redirect()->route('login');
    }
}
