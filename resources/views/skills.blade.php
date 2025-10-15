@extends('layouts.app')

@section('title', 'Skills')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12 skills-section">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">My Skills</h1>
    
    @foreach($skills as $category => $categorySkills)
    <div class="mb-12">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
            @if($category == 'Programming Languages')
            <i class="fas fa-code text-blue-600 mr-3"></i>
            @elseif($category == 'Web Development')
            <i class="fas fa-laptop-code text-green-600 mr-3"></i>
            @elseif($category == 'Tools & Technologies')
            <i class="fas fa-tools text-purple-600 mr-3"></i>
            @else
            <i class="fas fa-users text-yellow-600 mr-3"></i>
            @endif
            {{ $category }}
        </h2>
        <div class="space-y-4">
            @foreach($categorySkills as $skill => $percentage)
            <div class="bg-white rounded-lg shadow-sm p-4">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-medium text-gray-700">{{ $skill }}</span>
                    <span class="text-sm text-blue-600 font-semibold">{{ $percentage }}%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-3">
                    <div class="skill-bar bg-blue-600 h-3 rounded-full" style="width: {{ $percentage }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection