# Gene Ryan - Portfolio Website

A modern, minimalistic portfolio website built with Laravel, Blade, and Tailwind CSS. Features a dark mode design with gradient animations and smooth scrolling.

## Tech Stack

### Backend
- Laravel 12
- PHP 8.3+
- Blade Templating Engine

### Frontend
- Tailwind CSS v4
- Alpine.js
- Vite 7.x
- DevIcon (Technology Logos)

### Featured Technologies
- **Languages**: JavaScript, TypeScript, PHP, Python, Java
- **Frontend**: React, Vue, Tailwind CSS
- **Backend**: Laravel, Node.js, Express
- **Databases**: MongoDB, PostgreSQL, MySQL, Redis
- **DevOps**: Docker, Nginx, AWS
- **AI/ML**: OpenAI, Claude, Gemini, Ollama, Hugging Face, LangChain

## Features

- Single-page scrolling with smooth animations
- Responsive design (mobile-first)
- Project showcase with detail pages
- Skills section with technology logos
- AI & Machine Learning tools section
- Contact section with social links
- Downloadable resume
- Gradient blob animations
- Intersection Observer scroll animations

## Projects Showcase

1. **Sayonai** - AI-powered calculator using React, TypeScript, FastAPI, and OpenAI
2. **Sikap** - E-commerce platform with Laravel, Vue.js, and PostgreSQL
3. **Nomos** - Task management app with React Native and Node.js
4. **Jipiey** - Chat application using WebSockets and Redis
5. **Dtpgo** - Student registration and attendance system with QR codes

## Prerequisites

- PHP 8.3 or higher
- Composer
- Node.js 18+ and npm
- SQLite (or your preferred database)

## Installation

1. Clone the repository
```bash
git clone <repository-url>
cd gene-portfolio
```

2. Install PHP dependencies
```bash
composer install
```

3. Install Node.js dependencies
```bash
npm install
```

4. Create environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure your database in `.env`
```env
DB_CONNECTION=sqlite
# or configure MySQL/PostgreSQL
```

7. Run migrations (if applicable)
```bash
php artisan migrate
```

## Development

1. Start the Laravel development server
```bash
php artisan serve
```

2. In a separate terminal, start Vite for asset compilation
```bash
npm run dev
```

3. Visit `http://127.0.0.1:8000` in your browser

## Build for Production

Compile assets for production:
```bash
npm run build
```

## Project Structure

```
gene-portfolio/
├── app/
│   └── Http/Controllers/
│       └── ProjectController.php    # Handles project detail pages
├── resources/
│   ├── css/
│   │   └── app.css                  # Tailwind configuration & custom styles
│   ├── js/
│   │   └── app.js                   # Alpine.js & scroll animations
│   └── views/
│       ├── components/
│       │   ├── navigation.blade.php  # Navigation component
│       │   └── footer.blade.php      # Footer component
│       ├── layouts/
│       │   └── app.blade.php         # Main layout template
│       ├── home.blade.php            # Homepage with all sections
│       └── project.blade.php         # Project detail page template
├── public/
│   └── *.svg                         # Logo files
└── routes/
    └── web.php                       # Application routes
```

## Customization

### Updating Colors
Edit the theme variables in `resources/css/app.css`:
```css
@theme {
    --color-primary: #6366f1;
    --color-secondary: #ec4899;
    --color-accent: #14b8a6;
}
```

### Adding Projects
Update the `$projects` array in `app/Http/Controllers/ProjectController.php`

### Modifying Sections
Edit `resources/views/home.blade.php` to customize the Hero, About, Skills, Projects, or Contact sections

## License

This project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Author

**Gene Ryan**
- AI / Full Stack Developer
- Specializing in RAG and AI-powered applications
