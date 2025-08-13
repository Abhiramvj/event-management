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
    <header class="w-full bg-[#28034e] shadow-lg">
    <nav class="container-fluid mx-auto flex items-center justify-between px-6 lg:px-16 py-4">
        {{-- Logo --}}
        <a href="{{ route('home') }}" class="flex items-center gap-3 group">
            <img
    src="{{ asset('images/logo.png') }}"
    alt="Mango Events & Media Logo"
    class="h-16 md:h-28 lg:h-32 w-auto group-hover:scale-105 transition-transform duration-300"
    style="max-width: 300px;"
>

        </a>
        {{-- Navbar Links --}}
        <ul class="hidden md:flex items-center space-x-6 lg:space-x-10 uppercase text-white text-sm font-medium tracking-wide">
            <li><a href="{{ route('home') }}" class="pb-1 border-b-2 border-transparent hover:border-white transition">Home</a></li>
            <li><a href="{{ route('about') }}" class="hover:text-yellow-400 transition">About Us</a></li>
            <li><a href="{{ route('services') }}" class="hover:text-yellow-400 transition">Services</a></li>
            <li><a href="{{ route('gallery') }}" class="hover:text-yellow-400 transition">Gallery</a></li>
            <li><a href="{{ route('blogs') }}" class="hover:text-yellow-400 transition">Blogs</a></li>
            <li>
                <a href="{{ route('contact') }}"
                   class="ml-2 px-5 py-2 bg-yellow-400 text-[#210640] font-semibold rounded-full shadow hover:bg-yellow-300 border border-yellow-400 transition">
                   Contact Us
                </a>
            </li>
        </ul>

        {{-- Mobile menu button --}}
        <button class="md:hidden text-white focus:outline-none" id="navbar-mobile-btn">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
        </button>
    </nav>

    {{-- Mobile Dropdown --}}
    <div id="navbar-mobile-menu" class="md:hidden bg-[#210640] px-6 py-3 hidden">
        <ul class="space-y-3 text-white uppercase font-medium">
            <li><a href="{{ route('home') }}" class="block hover:text-yellow-400">Home</a></li>
            <li><a href="{{ route('about') }}" class="block hover:text-yellow-400">About Us</a></li>
            <li><a href="{{ route('services') }}" class="block hover:text-yellow-400">Services</a></li>
            <li><a href="{{ route('gallery') }}" class="block hover:text-yellow-400">Gallery</a></li>
            <li><a href="{{ route('blogs') }}" class="block hover:text-yellow-400">Blogs</a></li>
            <li>
                <a href="{{ route('contact') }}"
                   class="block px-5 py-2 bg-yellow-400 text-[#210640] rounded-full shadow hover:bg-yellow-300 border border-yellow-400 transition w-max">
                   Contact Us
                </a>
            </li>
        </ul>
    </div>
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
