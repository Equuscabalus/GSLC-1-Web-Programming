@extends('layouts.app')

@section('title', 'About Me')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">About Me</h1>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
        <!-- Personal Profile -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-user text-blue-600 mr-3"></i>
                Personal Profile
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                I'm a Computer Science student at Bina Nusantara University with a strong interest in 
                software development and artificial intelligence. I believe in the power of technology to solve 
                real-world problems and create positive impact in society.
            </p>
            <div class="space-y-4">
                <div class="flex items-center">
                    <i class="fas fa-map-marker-alt text-blue-600 mr-3"></i>
                    <span class="text-gray-700">Based in Jakarta, Indonesia</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-calendar text-blue-600 mr-3"></i>
                    <span class="text-gray-700">20 years old</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-star text-blue-600 mr-3"></i>
                    <span class="text-gray-700">Ambitious and detail-oriented</span>
                </div>
            </div>
        </div>

        <!-- Hobbies & Interests -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6 flex items-center">
                <i class="fas fa-heart text-red-600 mr-3"></i>
                Hobbies & Interests
            </h2>
            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center">
                    <i class="fas fa-laptop-code text-blue-600 mr-2"></i>
                    <span class="text-gray-700">Coding Projects</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-book text-green-600 mr-2"></i>
                    <span class="text-gray-700">Reading Tech Blogs</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-gamepad text-purple-600 mr-2"></i>
                    <span class="text-gray-700">Gaming</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-music text-yellow-600 mr-2"></i>
                    <span class="text-gray-700">Playing Guitar</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-utensils text-red-500 mr-2"></i>
                    <span class="text-gray-700">Cooking</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-film text-indigo-600 mr-2"></i>
                    <span class="text-gray-700">Watching Movies</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Favorite quotes -->
    <div class="bg-blue-50 rounded-lg p-8">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Favorite Quotes</h2>
        <p class="text-gray-700 text-lg text-center italic">
            "Technology is best when it brings people together and solves real problems. 
            I strive to create solutions that are not only functional but also meaningful and user-friendly."
        </p>
        <div class="text-center mt-4">
            <p class="text-gray-600">- Always learning, always growing -</p>
        </div>
    </div>
</div>
@endsection