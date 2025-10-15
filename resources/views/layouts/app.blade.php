<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Profile')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .university-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }
        .skill-bar {
            transition: width 2s ease-in-out;
        }
    </style>
</head>
<body class="h-full flex flex-col">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50 flex-shrink-0">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600 flex items-center">
                        <i class="fas fa-graduation-cap mr-2"></i>
                        AJ
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="menu-btn" class="text-gray-600 hover:text-blue-600 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 font-medium {{ request()->is('/') ? 'text-blue-600' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 font-medium {{ request()->is('about') ? 'text-blue-600' : '' }}">About</a>
                    <a href="{{ route('education') }}" class="text-gray-600 hover:text-blue-600 font-medium {{ request()->is('education') ? 'text-blue-600' : '' }}">Education</a>
                    <a href="{{ route('skills') }}" class="text-gray-600 hover:text-blue-600 font-medium {{ request()->is('skills') ? 'text-blue-600' : '' }}">Skills</a>
                </div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden py-4 border-t">
                <div class="flex flex-col space-y-4">
                    <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600 font-medium">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600 font-medium">About</a>
                    <a href="{{ route('education') }}" class="text-gray-600 hover:text-blue-600 font-medium">Education</a>
                    <a href="{{ route('skills') }}" class="text-gray-600 hover:text-blue-600 font-medium">Skills</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 flex-shrink-0">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <div class="flex items-center justify-center mb-4">
                <i class="fas fa-university text-2xl text-blue-400 mr-3"></i>
                <p class="text-lg">Bina Nusantara University</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Animate skill bars when they come into view
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const skillBars = entry.target.querySelectorAll('.skill-bar');
                    skillBars.forEach(bar => {
                        const width = bar.style.width;
                        bar.style.width = '0';
                        setTimeout(() => {
                            bar.style.width = width;
                        }, 100);
                    });
                }
            });
        });

        document.querySelectorAll('.skills-section').forEach(section => {
            observer.observe(section);
        });
    </script>
</body>
</html>