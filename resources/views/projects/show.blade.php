@extends('layouts.app')

@php
    $title = $project['title'] . ' - Gene Ryan Portfolio';
    $description = $project['description'];
@endphp

@section('content')
<!-- Project Hero -->
<section class="relative pt-32 pb-20 overflow-hidden">
    <!-- Gradient Background -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-br {{ $project['color'] }} opacity-10"></div>
        <div class="absolute inset-0 dot-pattern text-text-secondary/5 dark:text-dark-text-secondary/5"></div>
    </div>

    <div class="relative container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Back Button -->
            <a href="/#projects" class="inline-flex items-center gap-2 text-text-secondary dark:text-dark-text-secondary hover:text-primary transition-colors mb-8">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back to Projects
            </a>

            <!-- Project Title -->
            <div class="space-y-6 fade-in">
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold text-text-primary dark:text-dark-text-primary">
                    {{ $project['title'] }}
                </h1>
                <p class="text-xl sm:text-2xl text-text-secondary dark:text-dark-text-secondary">
                    {{ $project['description'] }}
                </p>

                <!-- Technologies -->
                <div class="flex flex-wrap gap-2 pt-4">
                    @foreach($project['technologies'] as $tech)
                        <span class="tech-tag-large">{{ $tech }}</span>
                    @endforeach
                </div>

                <!-- Actions -->
                <div class="flex flex-wrap gap-4 pt-6">
                    <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer" class="btn-primary inline-flex items-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                        View on GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Details -->
<section class="py-20 bg-bg-secondary dark:bg-dark-bg-secondary transition-colors duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto space-y-16">
            <!-- Overview -->
            <div class="slide-up">
                <h2 class="text-3xl font-bold text-text-primary dark:text-dark-text-primary mb-6">
                    Project <span class="text-gradient">Overview</span>
                </h2>
                <p class="text-lg text-text-secondary dark:text-dark-text-secondary leading-relaxed">
                    {{ $project['long_description'] }}
                </p>
            </div>

            <!-- Key Features -->
            <div class="slide-up" style="animation-delay: 0.1s;">
                <h2 class="text-3xl font-bold text-text-primary dark:text-dark-text-primary mb-6">
                    Key <span class="text-gradient">Features</span>
                </h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($project['features'] as $feature)
                        <div class="flex items-start gap-3 p-4 rounded-lg bg-bg-primary dark:bg-dark-bg-primary border border-border dark:border-dark-border">
                            <svg class="w-6 h-6 text-primary flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-text-secondary dark:text-dark-text-secondary">{{ $feature }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Technologies -->
            <div class="slide-up" style="animation-delay: 0.2s;">
                <h2 class="text-3xl font-bold text-text-primary dark:text-dark-text-primary mb-6">
                    Technologies <span class="text-gradient">Used</span>
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($project['technologies'] as $tech)
                        <div class="p-4 rounded-lg bg-bg-primary dark:bg-dark-bg-primary border border-border dark:border-dark-border text-center">
                            <p class="font-semibold text-text-primary dark:text-dark-text-primary">{{ $tech }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Project Image Placeholder -->
            <div class="slide-up" style="animation-delay: 0.3s;">
                <h2 class="text-3xl font-bold text-text-primary dark:text-dark-text-primary mb-6">
                    Project <span class="text-gradient">Preview</span>
                </h2>
                <div class="rounded-xl overflow-hidden border border-border dark:border-dark-border">
                    <div class="aspect-video bg-gradient-to-br {{ $project['color'] }} flex items-center justify-center">
                        <div class="text-center space-y-4 p-8">
                            <svg class="w-24 h-24 mx-auto text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-white text-lg font-semibold">Project Screenshot Placeholder</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="slide-up text-center pt-12 border-t border-border dark:border-dark-border" style="animation-delay: 0.4s;">
                <h3 class="text-2xl font-bold text-text-primary dark:text-dark-text-primary mb-4">
                    Interested in this project?
                </h3>
                <p class="text-text-secondary dark:text-dark-text-secondary mb-6">
                    Check out the source code or get in touch to discuss similar projects
                </p>
                <div class="flex flex-wrap items-center justify-center gap-4">
                    <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer" class="btn-primary">
                        View Source Code
                    </a>
                    <a href="/#contact" class="btn-secondary">
                        Contact Me
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- More Projects -->
<section class="py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-text-primary dark:text-dark-text-primary mb-6">
                Explore More <span class="text-gradient">Projects</span>
            </h2>
            <a href="/#projects" class="btn-secondary">
                View All Projects
            </a>
        </div>
    </div>
</section>

<style>
    .tech-tag-large {
        @apply px-4 py-2 text-base rounded-full bg-primary/10 text-primary border border-primary/20 font-medium;
    }

    .btn-primary {
        @apply px-8 py-3 bg-primary text-white rounded-lg font-semibold hover:bg-primary/90 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5;
    }

    .btn-secondary {
        @apply px-8 py-3 bg-transparent border-2 border-primary text-primary dark:text-primary rounded-lg font-semibold hover:bg-primary hover:text-white transition-all duration-300;
    }
</style>
@endsection
