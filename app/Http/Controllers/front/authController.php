<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function login()
    {
        return view('front.login');
    }

    public function doLogin(Request $request)
    {

        $this->validate($request,
            [
                'email'=>'required',
                'password'=>'required',
            ]
        );

        if (Auth::attempt(['email'=>$request->email , 'password'=>$request->password])){
            return redirect()->route('dashboard.index');
        }else
            return view('front.login');


    }



    public function register()
    {
        return view('front.register');
    }

    public function doRegister(Request $request)
    {
        //validate

//        dd($request->all());
        User::create([
            'name'=>'Daniyal Roomiyani',
            'email'=>$request->email,
            'password'=>$request->password
            ]);

    }
}
