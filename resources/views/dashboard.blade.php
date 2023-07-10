@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="w-96 bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
            <p>Welcome, {{ Auth::user()->name }}!</p>
            <div class="mt-4">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-blue-500 hover:underline">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection
