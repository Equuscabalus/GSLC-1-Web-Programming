@extends('layouts.app')

@section('title', 'Home - ' . $data['name'])

@section('content')
<div class="university-bg text-white">
    <div class="max-w-7xl mx-auto px-4 py-20">
        <div class="flex flex-col md:flex-row items-center justify-between">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">{{ $data['name'] }}</h1>
                <h2 class="text-2xl md:text-3xl text-blue-200 mb-2">{{ $data['title'] }}</h2>
                <div class="flex items-center text-blue-200 mb-4">
                    <i class="fas fa-university mr-2"></i>
                    <span class="text-xl">{{ $data['university'] }}</span>
                </div>
                <p class="text-xl text-blue-100 mb-8">{{ $data['tagline'] }}</p>
                <div class="flex space-x-4">
                </div>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <div class="text-center">
                    <img src="{{ $data['image'] }}" alt="{{ $data['name'] }}" class="rounded-full w-64 h-64 md:w-80 md:h-80 object-cover border-4 border-white shadow-2xl mx-auto">
                    <div class="mt-6 bg-white text-blue-600 rounded-lg p-4 shadow-lg">
                        <div class="grid grid-cols-2 gap-4 text-center">
                            <div>
                                <div class="text-2xl font-bold">{{ $data['current_year'] }}</div>
                                <div class="text-sm">Year</div>
                            </div>
                            <div>
                                <div class="text-2xl font-bold">{{ $data['gpa'] }}</div>
                                <div class="text-sm">GPA</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection