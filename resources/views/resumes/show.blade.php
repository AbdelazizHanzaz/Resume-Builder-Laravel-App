@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">{{ $resume->title }}</h1>
        @include('partials.resume-section', ['section' => 'personal', 'title' => 'Personal Information'])
        @include('partials.resume-section', ['section' => 'education', 'title' => 'Education'])
        @include('partials.resume-section', ['section' => 'experience', 'title' => 'Experience'])
        @include('partials.resume-section', ['section' => 'skills', 'title' => 'Skills'])
        <div class="mt-4">
            <a href="{{ route('resumes.edit', $resume->id) }}" class="text-blue-500 hover:underline">Edit</a>
            <form action="{{ route('resumes.destroy', $resume->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this resume?')">Delete</button>
            </form>
        </div>
    </div>
@endsection
