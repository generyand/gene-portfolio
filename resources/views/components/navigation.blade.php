<nav
    x-data="{ mobileMenuOpen: false }"
    class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md bg-dark-bg-primary/90 border-b border-dark-border"
>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo/Name -->
            <a href="/" class="text-xl font-bold text-dark-text-primary hover:text-primary transition-colors">
                <span class="text-gradient">GR</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#home" class="nav-link">Home</a>
                <a href="#about" class="nav-link">About</a>
                <a href="#skills" class="nav-link">Skills</a>
                <a href="#projects" class="nav-link">Projects</a>
                <a href="#contact" class="nav-link">Contact</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="p-2 rounded-lg text-dark-text-primary"
                    aria-label="Toggle menu"
                >
                    <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform -translate-y-2"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 transform translate-y-0"
        x-transition:leave-end="opacity-0 transform -translate-y-2"
        class="md:hidden border-t border-dark-border bg-dark-bg-primary"
    >
        <div class="px-4 py-4 space-y-3">
            <a href="#home" @click="mobileMenuOpen = false" class="block nav-link">Home</a>
            <a href="#about" @click="mobileMenuOpen = false" class="block nav-link">About</a>
            <a href="#skills" @click="mobileMenuOpen = false" class="block nav-link">Skills</a>
            <a href="#projects" @click="mobileMenuOpen = false" class="block nav-link">Projects</a>
            <a href="#contact" @click="mobileMenuOpen = false" class="block nav-link">Contact</a>
        </div>
    </div>
</nav>

<style>
    .nav-link {
        @apply text-dark-text-secondary hover:text-primary font-medium transition-colors duration-200;
    }
</style>
