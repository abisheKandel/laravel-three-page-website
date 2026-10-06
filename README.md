# Laravel 11 - Basic Three-Page Website (PT1 & PT2)

A clean, modern Laravel web application built following Jeffrey Way's *30 Days to Learn Laravel 11* series.

## Features & Implementation
- **Blade Components & Layout**: Reusable `<x-layout>` component utilizing `{{ $slot }}` and named `<x-slot:heading>`.
- **Dynamic Active Navigation**: Reusable `<x-nav-link>` component with active state highlighting powered by `request()->is(...)`.
- **Custom Branding**: Tailwind UI application shell featuring a custom vector SVG logo and site title.
- **Data Passing & Blade Loops**: Passing data arrays from `web.php` to views, iterated with `@foreach`.
- **Dynamic Route Wildcards**: `/jobs/{id}` routing with item retrieval using Laravel's `\Illuminate\Support\Arr::first()`.
- **Array Methods & Vowel Filter Challenge**: Demonstrating `array_push`, `array_shift`, `sort`, and vowel prefix filtering on `/fruits`.
- **Feature Tests**: Automated Pest feature tests covering all routes, components, and assertions.

## Project Routes
- `/` — Home page with dynamic greeting
- `/jobs` — Jobs listing page
- `/jobs/{id}` — Single job detail page
- `/contact` — Contact page
- `/about` — About page
- `/fruits` — Array functions and vowel filtering demo

## Getting Started

### Prerequisites
- PHP 8.2 or higher
- Composer
- Laravel Herd (or local PHP CLI)

### Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/abisheKandel/laravel-three-page-website.git
   cd laravel-three-page-website
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Set up environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Run tests:
   ```bash
   php artisan test
   ```
5. Serve the application:
   ```bash
   php artisan serve
   ```
   Or visit `http://myfirstproject.test` if using Laravel Herd.
