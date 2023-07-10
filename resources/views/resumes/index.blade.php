@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Resumes</h1>
        <a href="{{ route('resumes.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Create Resume</a>
        <table class="mt-4 w-full">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($resumes as $resume)
                    <tr>
                        <td>{{ $resume->title }}</td>
                        <td>{{ $resume->name }}</td>
                        <td>{{ $resume->email }}</td>
                        <td>
                            <a href="{{ route('resumes.show', $resume->id) }}" class="text-blue-500 hover:underline">View</a>
                            <a href="{{ route('resumes.edit', $resume->id) }}" class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('resumes.destroy', $resume->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this resume?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No resumes found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
