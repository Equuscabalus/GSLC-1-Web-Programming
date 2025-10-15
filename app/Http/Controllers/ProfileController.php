<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display home page
     */
    public function home()
    {
        $data = [
            'name' => 'Laurentius Nelson Raharjo',
            'title' => 'Computer Science Student',
            'university' => 'Bina Nusantara University',
            'tagline' => 'Passionate about software development and AI research',
            'image' => asset('Images/Profimg.jpg'),
            'current_year' => '3rd',
            'gpa' => '3.47/4.0'
        ];
        
        return view('home', ['data' => $data]);
    }

    /**
     * Display about page
     */
    public function about()
    {
        $about = [
            'description' => "I'm a passionate Computer Science student at University of Technology, specializing in Artificial Intelligence and Software Engineering. I'm actively involved in research projects and campus organizations.",
            'interests' => [
                'Artificial Intelligence & Machine Learning',
                'Web Development',
                'Mobile App Development',
                'Data Science',
                'Open Source Contributions'
            ],
            'campus_involvement' => [
                'President - Computer Science Club',
                'Member - AI Research Group',
                'Volunteer - Tech Tutoring Program',
                'Participant - Hackathon Organizer'
            ]
        ];
        
        return view('about', ['about' => $about]);
    }

    /**
     * Display education page
     */
    public function education()
    {
        $education = [
            'university' => [
                'name' => 'Bina Nusantara University',
                'degree' => 'Computer Science',
                'year' => '2023 - 2027',
                'gpa' => '3.49/4.0',
                'relevant_courses' => [
                    'Computer Vision',
                    'Data Mining',
                    'Natural Language Processing',
                    'Compilation Techniques',
                    'Entrepreneurship: Market Validation',
                    'Operating System',
                    'Web Programming',
                ]
            ]
        ];
        
        return view('education', ['education' => $education]);
    }

    /**
     * Display skills page
     */
    public function skills()
    {
        $skills = [
            'Programming Languages' => [
                'Python' => 70,
                'Java' => 75,
                'C' => 85,
                'SQL' => 75
            ],
            'Web Development' => [
                'HTML/CSS' => 70,
                'React' => 75,
                'Laravel' => 80,
                'Node.js' => 70,
                'Bootstrap' => 85
            ],
            'Tools & Technologies' => [
                'Git' => 65,
                'Docker' => 55,
                'MySQL' => 60
            ],
            'Soft Skills' => [
                'Teamwork' => 80,
                'Problem Solving' => 85,
                'Communication' => 75,
                'Time Management' => 70,
                'Leadership' => 75
            ]
        ];
        
        return view('skills', ['skills' => $skills]);
    }
}