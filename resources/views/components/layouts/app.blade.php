<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- This title will be dynamically set by each page, with a default fallback --}}
    <title>{{ $title ?? 'Adam Group of Events' }}</title>

    {{-- Google Fonts for elegant typography --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .font-serif { font-family: 'Playfair Display', serif; }
        .font-sans { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="font-sans bg-gray-50">

    {{-- ================================================================= --}}
    {{-- STANDARD HEADER FOR INNER PAGES --}}
    {{-- ================================================================= --}}
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <nav class="container mx-auto px-6 lg:px-16 py-4 flex justify-between items-center">
            {{-- Logo --}}
            <div class="text-gray-800 text-center">
                <a href="{{ route('home') }}">
                    <h1 class="font-serif text-3xl font-bold tracking-wider">ADAM</h1>
                    <p class="text-xs tracking-[0.2em]">GROUP OF EVENTS</p>
                </a>
            </div>

            {{-- Navigation Links --}}
            <ul class="hidden md:flex items-center space-x-8 uppercase text-gray-700 text-sm font-light tracking-wider">
                <li><a href="{{ route('home') }}" class="hover:text-black">Home</a></li>
                {{-- Example of how to show an "active" state --}}
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-black border-b-2 border-black pb-1' : 'hover:text-black' }}">About Us</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-black border-b-2 border-black pb-1' : 'hover:text-black' }}">Services</a></li>
                <li><a href="{{ route('gallery') }}" class="{{ request()->routeIs('gallery') ? 'text-black border-b-2 border-black pb-1' : 'hover:text-black' }}">Gallery</a></li>
                <li><a href="{{ route('blogs') }}" class="{{ request()->routeIs('blogs') ? 'text-black border-b-2 border-black pb-1' : 'hover:text-black' }}">Blogs</a></li>
                <li><a href="{{ route('contact') }}" class="bg-gray-800 text-white px-5 py-2 hover:bg-black transition">Contact Us</a></li>
            </ul>
             <div class="md:hidden"><button class="text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg></button></div>
        </nav>
    </header>

    {{-- ================================================================= --}}
    {{-- MAIN CONTENT AREA --}}
    {{-- All page-specific content will be injected here. --}}
    {{-- ================================================================= --}}
    <main>
        {{ $slot }}
    </main>

    {{-- ================================================================= --}}
    {{-- REUSABLE FOOTER COMPONENT --}}
    {{-- ================================================================= --}}
    <x-footer />

</body>
</html>
