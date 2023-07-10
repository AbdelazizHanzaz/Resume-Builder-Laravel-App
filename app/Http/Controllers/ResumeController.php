<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeTemplate;
use App\Http\Requests\StoreResumeRequest;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = ResumeTemplate::all();

        return view('resumes.index', compact('resumes'));
    }

    public function create()
    {
        return view('resumes.create');
    }

    public function store(StoreResumeRequest $request)
    {
        $resume = new ResumeTemplate();
        $resume->title = $request->title;
        $resume->name = $request->name;
        $resume->email = $request->email;
        $resume->phone = $request->phone;
        $resume->summary = $request->summary;
        $resume->education = $request->education;
        $resume->experience = $request->experience;
        $resume->skills = $request->skills;
        $resume->save();

        return redirect()->route('resumes.show', $resume->id);
    }

    public function show(ResumeTemplate $resume)
    {
        return view('resumes.show', compact('resume'));
    }

    public function edit(ResumeTemplate $resume)
    {
        return view('resumes.edit', compact('resume'));
    }

    public function update(StoreResumeRequest $request, ResumeTemplate $resume)
    {
        $resume->title = $request->title;
        $resume->name = $request->name;
        $resume->email = $request->email;
        $resume->phone = $request->phone;
        $resume->summary = $request->summary;
        $resume->education = $request->education;
        $resume->experience = $request->experience;
        $resume->skills = $request->skills;
        $resume->save();

        return redirect()->route('resumes.show', $resume->id);
    }

    public function destroy(ResumeTemplate $resume)
    {
        $resume->delete();

        return redirect()->route('resumes.index');
    }
}
