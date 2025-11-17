<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Gene Ryan - AI / Full Stack Developer' }}</title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ $description ?? 'AI / Full Stack Developer specializing in building AI-powered applications with RAG and modern web technologies.' }}">
    <meta name="keywords" content="AI Developer, Full Stack Developer, RAG, Machine Learning, Web Development, React, Laravel, Python">
    <meta name="author" content="Gene Ryan">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $title ?? 'Gene Ryan - AI / Full Stack Developer' }}">
    <meta property="og:description" content="{{ $description ?? 'Building AI-powered applications with RAG and learning cybersecurity' }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? 'Gene Ryan - AI / Full Stack Developer' }}">
    <meta name="twitter:description" content="{{ $description ?? 'Building AI-powered applications with RAG and learning cybersecurity' }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- DevIcon for Technology Logos -->
    <link rel="stylesheet" type='text/css' href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-dark-bg-primary text-dark-text-primary">
    <!-- Navigation -->
    <x-navigation />

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <x-footer />

</body>
</html>
