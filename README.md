# Laravel From Zero

A learning project built with **Laravel**, created while completing a *“Laravel From Zero”* course.  
This repository serves as a sandbox for mastering Laravel fundamentals and maintaining a clean, structured commit history.

## About the Project

The main goal of this project is to practice and solidify core Laravel concepts, including:

- Application structure and lifecycle
- Routing and controllers
- Configuration and environment management
- Database migrations
- Asset bundling with Vite
- Basic frontend and backend integration

This is a study-oriented repository rather than a production-ready application.

## Tech Stack

- PHP / Laravel
- Composer
- Node.js / NPM
- Vite
- Database: MySQL / MariaDB / SQLite (configurable via `.env`)

## Requirements

- PHP (compatible with the Laravel version used)
- Composer
- Node.js + NPM
- Database server (or SQLite)

## Installation

Clone the repository:

```bash
git clone https://github.com/non-rp/laravel-from-zero.git
cd laravel-from-zero
```

Install backend and frontend dependencies:

```bash
composer install
npm install
```

Set up environment variables:

```bash
cp .env.example .env
php artisan key:generate
```

Configure your database in .env, then run migrations:

```bash
php artisan migrate
```

Start the development servers:

```bash
npm run dev
php artisan serve
```

Open in browser:

```bash
http://127.0.0.1:8000
```

## Useful Commands

Frontend development build:

```bash
npm run dev
```

Frontend production build:

```bash
npm run build
```

Database migrations:

```bash
php artisan migrate
php artisan migrate:fresh --seed
```


Clear application caches:

```bash
php artisan optimize:clear
```

Run tests (if available):

```bash
php artisan test
```

## Project Structure

- `app/` – application core (controllers, models, services)
- `routes/` – web and API routes
- `resources/` – Blade templates, styles, JavaScript
- `database/` – migrations, seeders, factories
- `public/` – public web directory

## Project Goals

- Learn Laravel from scratch with hands-on practice
- Keep a clean and readable project structure
- Track learning progress through meaningful commits
- Use the repository as a reference for future projects and interviews

## Project Status

The project is actively developed as part of a learning process.  
Each commit typically represents a completed topic or lesson.





