@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Create a New Resume</h1>
        <form action="{{ route('resumes.store') }}" method="POST">
            @csrf
            @include('partials.resume-section', ['section' => 'personal', 'title' => 'Personal Information'])
            @include('partials.resume-section', ['section' => 'education', 'title' => 'Education'])
            @include('partials.resume-section', ['section' => 'experience', 'title' => 'Experience'])
            @include('partials.resume-section', ['section' => 'skills', 'title' => 'Skills'])
            <div class="mt-8">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Create Resume</button>
            </div>
        </form>
    </div>
@endsection
