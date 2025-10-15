@extends('layouts.app')

@section('title', 'Education')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">Education</h1>
    
    <!-- University Education -->
    <div class="bg-white rounded-lg shadow-lg p-8 mb-12">
        <div class="flex items-start mb-6">
            <div class="bg-blue-100 p-4 rounded-lg mr-6">
                <i class="fas fa-university text-blue-600 text-2xl"></i>
            </div>
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">{{ $education['university']['name'] }}</h2>
                <p class="text-xl text-blue-600 font-medium">{{ $education['university']['degree'] }}</p>
                <p class="text-gray-600">{{ $education['university']['year'] }} | GPA: {{ $education['university']['gpa'] }}</p>
            </div>
        </div>
        
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Current Courses</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach($education['university']['relevant_courses'] as $course)
            <div class="bg-gray-50 p-3 rounded-lg">
                <i class="fas fa-book text-blue-600 mr-2"></i>
                <span class="text-gray-700">{{ $course }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection