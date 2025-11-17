@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16 bg-dark-bg-primary">
    <!-- Gradient Blobs -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="gradient-blob w-96 h-96 bg-gradient-to-br from-blue-500 to-purple-600 top-1/4 left-1/4" style="animation-delay: 0s;"></div>
        <div class="gradient-blob w-80 h-80 bg-gradient-to-br from-pink-500 to-orange-500 top-1/3 right-1/4" style="animation-delay: 2s;"></div>
        <div class="gradient-blob w-72 h-72 bg-gradient-to-br from-teal-500 to-cyan-500 bottom-1/4 left-1/3" style="animation-delay: 4s;"></div>
    </div>

    <!-- Dark Overlay for Better Contrast -->
    <div class="absolute inset-0 bg-dark-bg-primary/40"></div>

    <!-- Dot Pattern Overlay -->
    <div class="absolute inset-0 dot-pattern text-white/5"></div>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="space-y-8 fade-in">
            <div class="space-y-6">
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-bold drop-shadow-lg">
                    <span class="text-gradient">Gene Ryan</span>
                </h1>

                <div class="max-w-3xl mx-auto">
                    <p class="text-xl sm:text-2xl lg:text-3xl text-gray-200 font-light leading-relaxed">
                        "Somebody stop me... from over-engineering simple solutions."
                    </p>
                    <p class="text-lg sm:text-xl text-gray-400 mt-4 italic">
                        — My self
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-8">
                <a
                    href="#projects"
                    class="btn-primary"
                >
                    View Projects
                </a>
                <a
                    href="#contact"
                    class="btn-secondary"
                >
                    Get in Touch
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>

    <!-- Bottom Text -->
    <div class="absolute bottom-8 right-8 hidden lg:block z-10">
        <p class="text-sm text-gray-400 font-medium rotate-90 origin-bottom-right">
            VOL . 1<br>
            <span class="italic">INDUSTRIAL DESIGN</span>
        </p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 bg-bg-secondary dark:bg-dark-bg-secondary transition-colors duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- About Content -->
                <div class="space-y-6 slide-up">
                    <h2 class="text-4xl sm:text-5xl font-bold text-text-primary dark:text-dark-text-primary">
                        About <span class="text-gradient">Me</span>
                    </h2>
                    <div class="space-y-4 text-text-secondary dark:text-dark-text-secondary text-lg leading-relaxed">
                        <p>
                            Hi! I'm <strong class="text-text-primary dark:text-dark-text-primary">Gene Ryan</strong>,
                            an AI / Full Stack Developer passionate about building intelligent web applications that
                            leverage the power of Large Language Models and Retrieval-Augmented Generation.
                        </p>
                        <p>
                            I specialize in creating AI-powered solutions using modern technologies like
                            <strong class="text-primary">React</strong>,
                            <strong class="text-primary">Next.js</strong>,
                            <strong class="text-primary">Python</strong>, and
                            <strong class="text-primary">FastAPI</strong>. My focus is on building applications
                            that combine cutting-edge AI capabilities with intuitive user experiences.
                        </p>
                        <p>
                            Currently, I'm deepening my knowledge in web security fundamentals and exploring
                            advanced RAG techniques to create even more powerful and secure AI applications.
                        </p>
                    </div>
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="/resume.pdf" download class="btn-primary">
                            Download Resume
                        </a>
                        <a href="#contact" class="btn-secondary">
                            Contact Me
                        </a>
                    </div>
                </div>

                <!-- Profile Image Placeholder -->
                <div class="relative slide-up" style="animation-delay: 0.2s;">
                    <div class="aspect-square rounded-2xl bg-gradient-to-br from-primary via-secondary to-accent p-1">
                        <div class="w-full h-full rounded-2xl bg-bg-primary dark:bg-dark-bg-primary flex items-center justify-center">
                            <div class="text-center space-y-4 p-8">
                                <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center">
                                    <span class="text-5xl font-bold text-white">GR</span>
                                </div>
                                <p class="text-text-secondary dark:text-dark-text-secondary text-sm">
                                    Profile Image<br>Placeholder
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl sm:text-5xl font-bold text-text-primary dark:text-dark-text-primary mb-4">
                    Skills & <span class="text-gradient">Technologies</span>
                </h2>
                <p class="text-text-secondary dark:text-dark-text-secondary text-lg">
                    Technologies I work with to bring ideas to life
                </p>
            </div>

            <!-- Technology Icons Grid -->
            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-6">
                <!-- JavaScript -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.05s;">
                    <i class="devicon-javascript-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">JavaScript</p>
                </div>

                <!-- TypeScript -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.1s;">
                    <i class="devicon-typescript-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">TypeScript</p>
                </div>

                <!-- React -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.15s;">
                    <i class="devicon-react-original colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">React</p>
                </div>

                <!-- Next.js -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.2s;">
                    <i class="devicon-nextjs-plain dark:text-white text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Next.js</p>
                </div>

                <!-- TailwindCSS -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.25s;">
                    <i class="devicon-tailwindcss-original colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Tailwind</p>
                </div>

                <!-- Node.js -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.3s;">
                    <i class="devicon-nodejs-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Node.js</p>
                </div>

                <!-- Express -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.35s;">
                    <i class="devicon-express-original dark:text-white text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Express</p>
                </div>

                <!-- Python -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.4s;">
                    <i class="devicon-python-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Python</p>
                </div>

                <!-- FastAPI -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.45s;">
                    <i class="devicon-fastapi-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">FastAPI</p>
                </div>

                <!-- Java -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.5s;">
                    <i class="devicon-java-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Java</p>
                </div>

                <!-- MongoDB -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.55s;">
                    <i class="devicon-mongodb-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">MongoDB</p>
                </div>

                <!-- PostgreSQL -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.6s;">
                    <i class="devicon-postgresql-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">PostgreSQL</p>
                </div>

                <!-- MySQL -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.65s;">
                    <i class="devicon-mysql-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">MySQL</p>
                </div>

                <!-- Redis -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.7s;">
                    <i class="devicon-redis-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Redis</p>
                </div>

                <!-- Docker -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.75s;">
                    <i class="devicon-docker-plain colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Docker</p>
                </div>

                <!-- Nginx -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.775s;">
                    <i class="devicon-nginx-original colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">Nginx</p>
                </div>

                <!-- AWS -->
                <div class="tech-logo-card slide-up" style="animation-delay: 0.8s;">
                    <i class="devicon-amazonwebservices-plain-wordmark colored text-5xl"></i>
                    <p class="text-xs mt-2 text-text-secondary dark:text-dark-text-secondary font-medium">AWS</p>
                </div>
            </div>

            <!-- AI/ML Section -->
            <div class="mt-16 slide-up" style="animation-delay: 0.85s;">
                <h3 class="text-2xl font-bold text-dark-text-primary mb-6 text-center">
                    AI & <span class="text-gradient">Machine Learning</span>
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                    <!-- OpenAI -->
                    <div class="tech-logo-card">
                        <div class="w-12 h-12 mx-auto bg-white rounded-lg p-2 flex items-center justify-center">
                            <img src="/openai.svg" alt="OpenAI" class="w-full h-full" />
                        </div>
                        <p class="text-xs mt-2 text-dark-text-secondary font-medium">OpenAI</p>
                    </div>

                    <!-- Anthropic Claude -->
                    <div class="tech-logo-card">
                        <img src="/claude-color.svg" alt="Claude" class="w-12 h-12 mx-auto" />
                        <p class="text-xs mt-2 text-dark-text-secondary font-medium">Claude</p>
                    </div>

                    <!-- Google Gemini -->
                    <div class="tech-logo-card">
                        <img src="/gemini-color.svg" alt="Google Gemini" class="w-12 h-12 mx-auto" />
                        <p class="text-xs mt-2 text-dark-text-secondary font-medium">Gemini</p>
                    </div>

                    <!-- Ollama -->
                    <div class="tech-logo-card">
                        <div class="w-12 h-12 mx-auto bg-white rounded-lg p-2 flex items-center justify-center">
                            <img src="/ollama.svg" alt="Ollama" class="w-full h-full" />
                        </div>
                        <p class="text-xs mt-2 text-dark-text-secondary font-medium">Ollama</p>
                    </div>

                    <!-- Hugging Face -->
                    <div class="tech-logo-card">
                        <img src="/huggingface-color.svg" alt="Hugging Face" class="w-12 h-12 mx-auto" />
                        <p class="text-xs mt-2 text-dark-text-secondary font-medium">Hugging Face</p>
                    </div>

                    <!-- LangChain -->
                    <div class="tech-logo-card">
                        <div class="w-12 h-12 mx-auto bg-white rounded-lg p-2 flex items-center justify-center">
                            <img src="/langchain.svg" alt="LangChain" class="w-full h-full" />
                        </div>
                        <p class="text-xs mt-2 text-dark-text-secondary font-medium">LangChain</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-20 bg-bg-secondary dark:bg-dark-bg-secondary transition-colors duration-300">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl sm:text-5xl font-bold text-text-primary dark:text-dark-text-primary mb-4">
                    Featured <span class="text-gradient">Projects</span>
                </h2>
                <p class="text-text-secondary dark:text-dark-text-secondary text-lg">
                    Showcasing my recent work and side projects
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Project 1: Sayonai -->
                <div class="project-card slide-up" style="animation-delay: 0.1s;">
                    <div class="project-image bg-gradient-to-br from-blue-400 to-purple-500"></div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-text-primary dark:text-dark-text-primary">Sayonai</h3>
                        <p class="text-text-secondary dark:text-dark-text-secondary">
                            AI-powered calculator that converts mathematical expressions from images into solutions
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">TypeScript</span>
                            <span class="tech-tag">FastAPI</span>
                            <span class="tech-tag">AI</span>
                        </div>
                        <div class="flex gap-4 pt-2">
                            <a href="/projects/sayonai" class="text-primary hover:text-secondary transition-colors font-medium">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2: Sikap -->
                <div class="project-card slide-up" style="animation-delay: 0.2s;">
                    <div class="project-image bg-gradient-to-br from-pink-400 to-orange-400"></div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-text-primary dark:text-dark-text-primary">Sikap</h3>
                        <p class="text-text-secondary dark:text-dark-text-secondary">
                            Cross-platform smart daily planner and task management application
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-tag">Electron</span>
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">TailwindCSS</span>
                        </div>
                        <div class="flex gap-4 pt-2">
                            <a href="/projects/sikap" class="text-primary hover:text-secondary transition-colors font-medium">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 3: Nomos -->
                <div class="project-card slide-up" style="animation-delay: 0.3s;">
                    <div class="project-image bg-gradient-to-br from-teal-400 to-cyan-400"></div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-text-primary dark:text-dark-text-primary">Nomos</h3>
                        <p class="text-text-secondary dark:text-dark-text-secondary">
                            AI-powered legal document analyzer for identifying risks and ensuring compliance
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-tag">AI</span>
                            <span class="tech-tag">NLP</span>
                            <span class="tech-tag">Python</span>
                        </div>
                        <div class="flex gap-4 pt-2">
                            <a href="/projects/nomos" class="text-primary hover:text-secondary transition-colors font-medium">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 4: Jipiey -->
                <div class="project-card slide-up" style="animation-delay: 0.4s;">
                    <div class="project-image bg-gradient-to-br from-indigo-400 to-blue-400"></div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-text-primary dark:text-dark-text-primary">Jipiey</h3>
                        <p class="text-text-secondary dark:text-dark-text-secondary">
                            GPA calculator with AI-powered grade recognition from image uploads
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">AI</span>
                            <span class="tech-tag">OCR</span>
                        </div>
                        <div class="flex gap-4 pt-2">
                            <a href="/projects/jipiey" class="text-primary hover:text-secondary transition-colors font-medium">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 5: Dtpgo -->
                <div class="project-card slide-up" style="animation-delay: 0.5s;">
                    <div class="project-image bg-gradient-to-br from-violet-400 to-purple-400"></div>
                    <div class="p-6 space-y-4">
                        <h3 class="text-2xl font-bold text-text-primary dark:text-dark-text-primary">Dtpgo</h3>
                        <p class="text-text-secondary dark:text-dark-text-secondary">
                            Hybrid student registration and attendance system with QR code scanning and analytics
                        </p>
                        <div class="flex flex-wrap gap-2">
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">QR Code</span>
                            <span class="tech-tag">Analytics</span>
                        </div>
                        <div class="flex gap-4 pt-2">
                            <a href="/projects/dtpgo" class="text-primary hover:text-secondary transition-colors font-medium">
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a
                    href="https://github.com/generyand"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn-secondary inline-flex items-center gap-2"
                >
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                    View All Projects on GitHub
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16 slide-up">
                <h2 class="text-4xl sm:text-5xl font-bold text-text-primary dark:text-dark-text-primary mb-4">
                    Get In <span class="text-gradient">Touch</span>
                </h2>
                <p class="text-text-secondary dark:text-dark-text-secondary text-lg">
                    Let's work together on your next project
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <!-- Email -->
                <a href="mailto:generyan.dep@gmail.com" class="contact-card slide-up" style="animation-delay: 0.1s;">
                    <div class="contact-icon bg-blue-500/10 text-blue-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-text-primary dark:text-dark-text-primary mb-2">Email</h3>
                    <p class="text-text-secondary dark:text-dark-text-secondary text-sm">generyan.dep@gmail.com</p>
                </a>

                <!-- GitHub -->
                <a href="https://github.com/generyand" target="_blank" rel="noopener noreferrer" class="contact-card slide-up" style="animation-delay: 0.2s;">
                    <div class="contact-icon bg-purple-500/10 text-purple-500">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-text-primary dark:text-dark-text-primary mb-2">GitHub</h3>
                    <p class="text-text-secondary dark:text-dark-text-secondary text-sm">@generyand</p>
                </a>

                <!-- LinkedIn -->
                <a href="https://linkedin.com/in/generyand" target="_blank" rel="noopener noreferrer" class="contact-card slide-up" style="animation-delay: 0.3s;">
                    <div class="contact-icon bg-pink-500/10 text-pink-500">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-text-primary dark:text-dark-text-primary mb-2">LinkedIn</h3>
                    <p class="text-text-secondary dark:text-dark-text-secondary text-sm">@generyand</p>
                </a>
            </div>

            <div class="text-center slide-up" style="animation-delay: 0.4s;">
                <p class="text-text-secondary dark:text-dark-text-secondary mb-6">
                    I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
                </p>
                <a href="mailto:generyan.dep@gmail.com" class="btn-primary inline-flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Send Me an Email
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Button Styles */
    .btn-primary {
        @apply px-8 py-3 bg-primary text-white rounded-lg font-semibold hover:bg-primary/90 transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-0.5;
    }

    .btn-secondary {
        @apply px-8 py-3 bg-transparent border-2 border-primary text-primary dark:text-primary rounded-lg font-semibold hover:bg-primary hover:text-white transition-all duration-300;
    }

    /* Skill Card */
    .skill-card {
        @apply p-6 rounded-xl bg-bg-primary dark:bg-dark-bg-primary border border-border dark:border-dark-border hover:border-primary dark:hover:border-primary transition-all duration-300 hover:shadow-lg hover:-translate-y-1;
    }

    .skill-icon {
        @apply w-16 h-16 rounded-lg flex items-center justify-center mb-4;
    }

    /* Project Card */
    .project-card {
        @apply rounded-xl overflow-hidden bg-bg-primary dark:bg-dark-bg-primary border border-border dark:border-dark-border hover:border-primary dark:hover:border-primary transition-all duration-300 hover:shadow-xl hover:-translate-y-1;
    }

    .project-image {
        @apply w-full h-48 flex items-center justify-center text-white text-2xl font-bold;
    }

    .tech-tag {
        @apply px-3 py-1 text-sm rounded-full bg-primary/10 text-primary border border-primary/20;
    }

    /* Contact Card */
    .contact-card {
        @apply p-6 rounded-xl bg-bg-secondary dark:bg-dark-bg-secondary border border-border dark:border-dark-border hover:border-primary dark:hover:border-primary transition-all duration-300 hover:shadow-lg hover:-translate-y-1 text-center;
    }

    .contact-icon {
        @apply w-16 h-16 rounded-lg flex items-center justify-center mx-auto mb-4;
    }

    /* Technology Logo Card */
    .tech-logo-card {
        @apply flex flex-col items-center justify-center p-4 rounded-xl bg-bg-primary dark:bg-dark-bg-primary border border-border dark:border-dark-border hover:border-primary dark:hover:border-primary transition-all duration-300 hover:shadow-lg hover:-translate-y-1;
    }

    /* AI Technology Card */
    .ai-tech-card {
        @apply p-6 rounded-xl bg-bg-primary dark:bg-dark-bg-primary border border-border dark:border-dark-border hover:border-primary dark:hover:border-primary transition-all duration-300 hover:shadow-lg hover:-translate-y-1 text-center;
    }
</style>
@endsection
