<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\client;
use App\Models\config;
use App\Models\contact;
use App\Models\service;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\File;

class configController extends Controller
{
    private function getConfig()
    {
        $config = config::all();
        if (count($config) == 0) {
            $config = config::create([
                'firstName' => 'init',
                'lastName' => 'init',
                'email' => 'init',
                'phone' => 'init',
                'instagram' => 'init',
                'telegram' => 'init',
                'github' => 'init',
                'linkedin' => 'init',
                'youtube' => 'init',
                'image' => 'init',
                'googleApi' => 'init',
                'about' => 'init',
                'birthday' => '2023-12-13'
            ]);
        } else {
            $config = $config[0];
        }
        return $config;
    }

    public function index()
    {
        $config = $this->getConfig();
        $clients=client::all();
        $services = service::all();
        return view('back.config.main', compact('config' , 'clients' , 'services'));
    }

    public function editAbout(Request $request)
    {
        $config = $this->getConfig();
        return view('back.config.aboutForm', compact('config'));
    }

    public function saveAbout(Request $request)
    {
        $this->validate($request, [
            'text' => 'required'
        ]);


        $config = $this->getConfig();
        $config->about = $request->text;
//
//        if (file_exists('/about.html')){
//            file
//        }

        $myfile = fopen("../resources/views/back/config/about.blade.php", "w") ;

        fwrite($myfile, $request->text);
        fclose($myfile);


//        dd($f);
        $config->save();
//        dd($request->all());
        return redirect()->route('dashboard.config');
    }

    public function editContact(Request $request)
    {
        $config = $this->getConfig();

        return view('back.config.contactForm', compact('config'));
    }

    public function saveContact(Request $request)
    {


        $this->validate($request, [
            "email" => "required|email",
            "phone" => "required|numeric",
            "birthday" => "required",
            "address" => "required",
            "github" => "required",
            "telegram" => "required",
            "linkedIn" => "required",
            "instagram" => "required",
            "lastName" => "required",
            "firstName" => "required",
        ]);


        $config = $this->getConfig();
        $config->email = $request->email;
        $config->phone = $request->phone;
        $config->birthday = $request->birthday;
        $config->address = $request->address;
        $config->github = $request->github;
        $config->telegram = $request->telegram;
        $config->linkedIn = $request->linkedIn;
        $config->instagram = $request->instagram;
        $config->firstName = $request->firstName;
        $config->lastName= $request->lastName;
        $config->save();
//        $request->dd();
        //save to config
        return redirect()->route('dashboard.config');
    }

    public function newServices(Request $request)
    {
        return view('back.config.serviceForm');
    }

    public function editServices(Request $request, int $id)
    {
        $service = service::find($id);
        return view('back.config.serviceForm', compact('service'));

    }

    public function saveServices(Request $request, int $id = null)
    {
//        dd($request->all());
        if ($id == -1) { //new item mode
            $service = service::create([
                'title' => $request->name,
                'image' => $request->image,
                'text' => $request->text,
            ]);

        } else {
            $service = service::find($id);
            $service->title = $request->name;
            $service->image = $request->image?$request->image:$service->image ;
            $service->text = $request->text;
            $service->save();
        }
        if ($request->files->count() > 0) {
            $service->image = $request->file('image')->getClientOriginalName();
            $service->save();
            $request->file('image')->move(storage_path('app/public/images/services'), $request->file('image')->getClientOriginalName());
        }
        //save to Services
        return redirect()->route('dashboard.config');

    }

    public function newClient(Request $request)
    {
        return view('back.config.clientForm');
    }

    public function editClient(Request $request, int $id)
    {
        $client = client::find($id);

        return view('back.config.clientForm', compact('client'));

    }

    public function saveClient(Request $request, int $id = null)
    {
//        dd();
        if ($id == -1) { //new item mode
            $client = client::create([
                'name' => $request->name,
                'logo' => $request->image,
                'link' => $request->link,
            ]);


        } else {
            $client = client::find($id);
            $client->name = $request->name;
            $client->logo = $request->image;
            $client->link = $request->link;
            $client->save();
        }
        if ($request->files->count() > 0) {
            $client->logo = $request->file('image')->getClientOriginalName();
            $client->save();
            $request->file('image')->move(storage_path('app/public/images/clients'), $request->file('image')->getClientOriginalName());
        }
        //save to Services
        return redirect()->route('dashboard.config');

    }
}
