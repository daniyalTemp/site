<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\comment;
use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index(Request $request)
    {
        $contactStatus = 'New';
        $contacts = contact::where('seen', false)->get();
        return view('back.contact.list', compact('contactStatus', 'contacts'));
    }

    public function moveToComment(Request $request, int $id)
    {
        $contact = contact::find($id);

        comment::create([
            'fullName' => $contact->fullName,
            'sex' => 'male',
            'text' => $contact->text,
        ]);
        return redirect()->route('dashboard.contact');
    }

    public function seen(Request $request, int $id)
    {
        $contact = contact::find($id);

        $contact->seen = true;
        $contact->save();
        return redirect()->route('dashboard.contact');


    }

    public function showAll(Request $request)
    {

        $contactStatus = 'All ';
        $contacts = contact::all();
        return view('back.contact.list', compact('contactStatus', 'contacts'));
    }

}
