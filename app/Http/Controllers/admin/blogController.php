<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(Request $request)
    {

        return view('back.blog.list');
    }
}
