<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\education;
use App\Models\experience;
use App\Models\skill;
use Illuminate\Http\Request;
use function Laravel\Prompts\text;
use function Symfony\Component\String\s;

class resumeController extends Controller
{
    public function index(Request $request)
    {
        $educations = education::all();
        $experiences = experience::all();
        $skills = skill::all();
        return view('back.resume.list', compact('educations', 'experiences' , 'skills'));
    }

    public function addEducation(Request $request)
    {
        return view('back.resume.educationForm');
    }

    public function editEducation(Request $request, int $id)
    {
        $education = education::find($id);
        return view('back.resume.educationForm', compact('education'));

    }

    public function saveEducation(Request $request, int $id)
    {
        $this->validate($request, [
            'uniName' => 'required',
            'yearIN' => 'required|numeric',
            'grade' => 'required',
        ]);


        if ($id == -1) {
            $data = ['uniName' => $request->uniName,
                'yearIN' => $request->yearIN,
                'grade' => $request->grade,];

            if ($request->has('active')) {
                $data['yearOut'] = null;
                $data['active'] = true;
            } else {
                $data['yearOut'] = $request->yearOut;
                $data['active'] = false;

            }
            education::create($data);
        } else {
            $item = education::find($id);
            $item->uniName = $request->uniName;
            $item->yearIN = $request->yearIN;
            $item->grade = $request->grade;
            $item->yearOut = ($request->has('active') ? null : $request->yearOut);
            $item->active = ($request->has('active') ? true : false);
            $item->save();
        }
        return redirect()->route('dashboard.resumes');
    }


    public function addExperience(Request $request)
    {
        return view('back.resume.experienceForm');
    }

    public function editExperience(Request $request, int $id)
    {
        $experience = experience::find($id);
        return view('back.resume.experienceForm', compact('experience'));

    }

    public function saveExperience(Request $request, int $id)
    {
        $this->validate($request, [
            'position' => 'required',
            'yearIN' => 'required|numeric',
        ]);


        if ($id == -1) {
            $data = [
                'yearIN' => $request->yearIN,
                'position' => $request->position,
                'text' => $request->text,
            ];

            if ($request->has('active')) {
                $data['yearOut'] = null;
                $data['active'] = true;
            } else {
                $data['yearOut'] = $request->yearOut;
                $data['active'] = false;

            }
            experience::create($data);
        } else {
            $item = experience::find($id);
            $item->position = $request->position;
            $item->yearIN = $request->yearIN;
            $item->text = $request->text;
            $item->yearOut = ($request->has('active') ? null : $request->yearOut);
            $item->active = ($request->has('active') ? true : false);
            $item->save();
        }
        return redirect()->route('dashboard.resumes');
    }


    public function addSkill(Request $request)
    {
        return view('back.resume.skillForm');
    }

    public function editSkill(Request $request, int $id)
    {
        $skill = skill::find($id);
        return view('back.resume.skillForm', compact('skill'));

    }

    public function saveSkill(Request $request, int $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'percent' => 'required',
        ]);


        if ($id == -1) {
            $data = [
                'name' => $request->name,
                'percent' => $request->percent,
                'text' => $request->text,
                'image' => $request->image,
            ];
            $item = skill::create($data);
        } else {
            $item = skill::find($id);
            $item->percent = $request->percent;
            $item->name = $request->name;
            $item->text = $request->text;
            $item->save();
        }
        if ($request->files->count() > 0) {
            $item->image = $request->file('image')->getClientOriginalName();
            $item->save();
            $request->file('image')->move(storage_path('app/public/images/skills'), $request->file('image')->getClientOriginalName());
        }
        return redirect()->route('dashboard.resumes');
    }


}
