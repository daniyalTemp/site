<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\client;
use App\Models\comment;
use App\Models\contact;
use App\Models\project;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(Request $request)
    {

        $counts = [
            'blogs'=>count(blog::all()),
            'projects'=>count(project::all()),
            'clients'=>count(client::all()),
            'comments'=>count(comment::all()),

        ];
        $newComments = contact::orderBy('created_at', 'desc')->where('seen',false)->get();

        return view('back.panel.home' ,compact('counts', 'newComments'));
    }
}
