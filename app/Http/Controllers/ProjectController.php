<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    private $projects = [
        'sayonai' => [
            'title' => 'Sayonai',
            'slug' => 'sayonai',
            'description' => 'AI-powered calculator that converts mathematical expressions from images into solutions',
            'long_description' => 'Sayonai is an innovative AI-powered calculator application that leverages computer vision and natural language processing to convert mathematical expressions from images into accurate solutions. Users can simply take a photo of a handwritten or printed mathematical equation, and the AI will recognize, parse, and solve it instantly.',
            'technologies' => ['React', 'TypeScript', 'FastAPI', 'OpenAI API', 'Computer Vision', 'TailwindCSS'],
            'features' => [
                'Image-to-text mathematical expression recognition',
                'Support for complex equations and calculus',
                'Step-by-step solution breakdown',
                'Real-time processing with FastAPI backend',
                'Modern, responsive UI built with React and TypeScript'
            ],
            'github' => 'https://github.com/generyand',
            'color' => 'from-blue-400 to-purple-500'
        ],
        'sikap' => [
            'title' => 'Sikap',
            'slug' => 'sikap',
            'description' => 'Cross-platform smart daily planner and task management application',
            'long_description' => 'Sikap is a comprehensive task management and daily planning application built with Electron for cross-platform compatibility. It features intelligent task scheduling, priority management, and productivity analytics to help users stay organized and focused on their goals.',
            'technologies' => ['Electron.js', 'React', 'TailwindCSS', 'Node.js', 'SQLite'],
            'features' => [
                'Cross-platform desktop application (Windows, macOS, Linux)',
                'Smart task scheduling with AI-powered suggestions',
                'Priority management and deadline tracking',
                'Productivity analytics and insights',
                'Dark mode support',
                'Offline-first architecture'
            ],
            'github' => 'https://github.com/generyand',
            'color' => 'from-pink-400 to-orange-400'
        ],
        'nomos' => [
            'title' => 'Nomos',
            'slug' => 'nomos',
            'description' => 'AI-powered legal document analyzer for identifying risks and ensuring compliance',
            'long_description' => 'Nomos is an advanced AI-powered platform designed to analyze legal documents, identify potential risks, and ensure compliance with regulations. Using state-of-the-art NLP and machine learning models, Nomos helps legal professionals and businesses streamline document review processes.',
            'technologies' => ['Python', 'FastAPI', 'OpenAI API', 'LangChain', 'React', 'PostgreSQL'],
            'features' => [
                'Automated legal document analysis',
                'Risk identification and classification',
                'Compliance checking against regulations',
                'Clause extraction and summarization',
                'Document comparison and version tracking',
                'Custom rule configuration for specific industries'
            ],
            'github' => 'https://github.com/generyand',
            'color' => 'from-teal-400 to-cyan-400'
        ],
        'jipiey' => [
            'title' => 'Jipiey',
            'slug' => 'jipiey',
            'description' => 'GPA calculator with AI-powered grade recognition from image uploads',
            'long_description' => 'Jipiey simplifies GPA calculation for students by allowing them to upload images of their grade reports. Using OCR and AI, the application automatically extracts grades, course credits, and calculates the GPA accurately, saving time and reducing manual errors.',
            'technologies' => ['React', 'TypeScript', 'OCR', 'OpenAI API', 'TailwindCSS'],
            'features' => [
                'Image-based grade recognition using OCR',
                'Automatic GPA calculation',
                'Support for different grading systems',
                'Grade history tracking',
                'Export results as PDF',
                'Mobile-responsive design'
            ],
            'github' => 'https://github.com/generyand',
            'color' => 'from-indigo-400 to-blue-400'
        ],
        'dtpgo' => [
            'title' => 'Dtpgo',
            'slug' => 'dtpgo',
            'description' => 'Hybrid student registration and attendance system with QR code scanning and analytics',
            'long_description' => 'Dtpgo is a comprehensive student registration and attendance management system that combines QR code technology with powerful analytics. Designed for educational institutions, it streamlines the attendance tracking process and provides valuable insights into student participation patterns.',
            'technologies' => ['Node.js', 'Express', 'MongoDB', 'React', 'QR Code', 'Chart.js'],
            'features' => [
                'QR code-based attendance scanning',
                'Student registration and profile management',
                'Real-time attendance tracking',
                'Comprehensive analytics dashboard',
                'Automated attendance reports',
                'Mobile-friendly interface for students and administrators',
                'Integration with existing school systems'
            ],
            'github' => 'https://github.com/generyand',
            'color' => 'from-violet-400 to-purple-400'
        ]
    ];

    public function show($slug)
    {
        if (!isset($this->projects[$slug])) {
            abort(404);
        }

        $project = $this->projects[$slug];
        return view('projects.show', compact('project'));
    }
}
