<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mango Events And Media - Home</title>

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

    {{-- HERO SECTION --}}
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('https://placehold.co/1920x1080/333333/ffffff?text=Live+Events');">
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <header class="absolute top-0 left-0 right-0 z-20">
            {{-- This is the transparent header unique to the homepage --}}
            <nav class="container mx-auto px-6 lg:px-16 py-6 flex justify-between items-center">
                <div class="text-white text-center">
                    <h1 class="font-serif text-3xl font-bold tracking-wider">Mango</h1>
                    <p class="text-xs tracking-[0.2em]">EVENTS AND MEDIA</p>
                </div>
                {{-- === EDITED SECTION BELOW === --}}
                <ul class="hidden md:flex items-center space-x-8 uppercase text-white text-sm font-light tracking-wider">
                    <li><a href="{{ route('home') }}" class="border-b-2 border-white pb-1">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-gray-300">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-gray-300">Services</a></li>
                    <li><a href="{{ route('gallery') }}" class="hover:text-gray-300">Gallery</a></li>
                    <li><a href="{{ route('blogs') }}" class="hover:text-gray-300">Blogs</a></li>
                    <li><a href="{{ route('contact') }}" class="bg-white text-black px-5 py-2 hover:bg-gray-200 transition">Contact Us</a></li>
                </ul>
                {{-- === END EDITED SECTION === --}}
                <div class="md:hidden"><button class="text-white"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg></button></div>
            </nav>
        </header>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-white text-center px-4">
            <h2 class="font-serif text-4xl md:text-6xl font-bold leading-tight drop-shadow-md">Turning Your Dreams</h2>
            <h3 class="font-serif text-4xl md:text-6xl font-bold leading-tight mt-2 drop-shadow-md">Into Remarkable Events</h3>
        </div>
    </div>

    {{-- ABOUT ADAM SECTION --}}
    <section class="py-24">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="text-left">
                <h2 class="font-serif text-4xl md:text-5xl text-gray-800">About Adam</h2>
                <p class="mt-6 text-gray-600 leading-relaxed">Welcome to Adam Group of Events, a premier event management company dedicated to creating unforgettable experiences tailored to your unique needs.</p>
                <a href="{{ route('about') }}" class="inline-block mt-8 border border-gray-400 rounded-full px-8 py-3 text-gray-700 hover:bg-gray-800 hover:text-white hover:border-gray-800 transition">Read More</a>
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-4 h-96">
                <img src="https://placehold.co/400x600/d1d5db/333333?text=Event+1" alt="Event 1" class="rounded-2xl object-cover w-full h-full col-span-1 row-span-2">
                <img src="https://placehold.co/400x280/d1d5db/333333?text=Event+2" alt="Event 2" class="rounded-2xl object-cover w-full h-full">
                <img src="https://placehold.co/400x280/d1d5db/333333?text=Event+3" alt="Event 3" class="rounded-2xl object-cover w-full h-full">
            </div>
        </div>
    </section>

    {{-- LARGE FEATURE IMAGE / VIDEO SECTION --}}
    <section class="py-12 px-6">
        <div class="container mx-auto relative h-[500px] flex items-center justify-center rounded-3xl overflow-hidden">
            <img src="https://placehold.co/1200x500/555555/ffffff?text=Large+Group+Photo" alt="Large group photo at an event" class="absolute inset-0 w-full h-full object-cover">
            <div class="absolute inset-0 bg-black opacity-30"></div>
            <button class="relative z-10 bg-white/30 backdrop-blur-sm rounded-full p-6 text-white hover:bg-white/50 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10"><path fill-rule="evenodd" d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.647c1.295.748 1.295 2.536 0 3.284L7.279 20.99c-1.25.72-2.779-.217-2.779-1.643V5.653Z" clip-rule="evenodd" /></svg>
            </button>
        </div>
    </section>

    {{-- OUR SERVICES SECTION --}}
    <section class="py-24 text-center">
        <div class="container mx-auto px-6">
            <h2 class="font-serif text-4xl md:text-5xl text-gray-800">Our Services</h2>
            <p class="mt-4 max-w-2xl mx-auto text-gray-600">We specialize in turning your event dreams into reality, ensuring every detail is executed flawlessly. With our expertise, you can relax and enjoy the celebration.</p>
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group"><div class="overflow-hidden rounded-2xl"><img src="https://placehold.co/400x500/e5e7eb/333333?text=Wedding" alt="Wedding" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div><h3 class="mt-4 text-xl font-medium text-gray-800">WEDDING</h3></div>
                <div class="group"><div class="overflow-hidden rounded-2xl"><img src="https://placehold.co/400x500/e5e7eb/333333?text=Baptism" alt="Baptism" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div><h3 class="mt-4 text-xl font-medium text-gray-800">BAPTISM</h3></div>
                <div class="group"><div class="overflow-hidden rounded-2xl"><img src="https://placehold.co/400x500/e5e7eb/333333?text=Birthday" alt="Birthday" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div><h3 class="mt-4 text-xl font-medium text-gray-800">BIRTHDAY</h3></div>
                <div class="group"><div class="overflow-hidden rounded-2xl"><img src="https://placehold.co/400x500/e5e7eb/333333?text=Corporate" alt="Corporate" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div><h3 class="mt-4 text-xl font-medium text-gray-800">CORPORATE</h3></div>
            </div>
            <a href="{{ route('services') }}" class="inline-block mt-16 border border-gray-400 rounded-full px-8 py-3 text-gray-700 hover:bg-gray-800 hover:text-white hover:border-gray-800 transition">View All</a>
        </div>
    </section>

    {{-- TRACK RECORD SECTION --}}
    <section class="h-80 bg-cover bg-center bg-fixed" style="background-image: url('https://placehold.co/1920x800/222222/ffffff?text=Night+Event');">
        <div class="h-full flex items-center justify-center text-white bg-black/50">
            <div class="text-center">
                <h3 class="font-serif text-3xl md:text-4xl">With a proven track record of</h3>
                <p class="text-3xl md:text-4xl font-bold mt-2">over 600+ events</p>
            </div>
        </div>
    </section>

    {{-- OUR LATEST PROJECTS SECTION --}}
    <section class="py-24 text-center">
        <div class="container mx-auto px-6">
            <h2 class="font-serif text-4xl md:text-5xl text-gray-800">Our Latest Projects</h2>
            <p class="mt-4 max-w-2xl mx-auto text-gray-600">Explore our portfolio of stunning events that showcase our creativity and attention to detail.</p>
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group"><div class="overflow-hidden rounded-2xl"><img src="https://placehold.co/400x500/d1d5db/333333?text=Engagement" alt="Engagement" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div><h3 class="mt-4 text-xl font-medium text-gray-800">ENGAGEMENT</h3></div>
                <div class="group"><div class="overflow-hidden rounded-2xl"><img src="https://placehold.co/400x500/d1d5db/333333?text=Baptism" alt="Baptism" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div><h3 class="mt-4 text-xl font-medium text-gray-800">BAPTISM</h3></div>
                <div class="group"><div class="overflow-hidden rounded-2xl"><img src="https://placehold.co/400x500/d1d5db/333333?text=Wedding+Events" alt="Wedding Events" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div><h3 class="mt-4 text-xl font-medium text-gray-800">WEDDING EVENTS</h3></div>
                <div class="group"><div class="overflow-hidden rounded-2xl"><img src="https://placehold.co/400x500/d1d5db/333333?text=Birthday" alt="Birthday" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div><h3 class="mt-4 text-xl font-medium text-gray-800">BIRTHDAY</h3></div>
            </div>
            <a href="{{ route('gallery') }}" class="inline-block mt-16 border border-gray-400 rounded-full px-8 py-3 text-gray-700 hover:bg-gray-800 hover:text-white hover:border-gray-800 transition">View All</a>
        </div>
    </section>

    {{-- CLIENT TESTIMONIAL SECTION --}}
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="font-serif text-4xl md:text-5xl text-gray-800">Our Clients Say</h2>
            <img src="https://placehold.co/100x100/333/fff?text=S%26D" alt="Client photo" class="w-24 h-24 rounded-full mx-auto mt-12 object-cover">
            <h3 class="mt-4 font-bold text-xl text-gray-800">Sarah & David, Wedding Clients</h3>
            <p class="mt-6 max-w-3xl mx-auto text-gray-600 text-lg leading-relaxed">"Our wedding was an absolute dream come true, thanks to Adam Events. From the decor to the coordination, everything was executed flawlessly. The team took our vision and brought it to life with creativity and attention to detail. We couldn't have asked for a better experience!"</p>
        </div>
    </section>

    {{-- CONTACT FORM SECTION --}}
    <section class="py-24">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="h-full w-full">
                <img src="https://placehold.co/800x1000/d1d5db/333333?text=Elegant+Decor" alt="Elegant event decor" class="rounded-3xl object-cover w-full h-full">
            </div>
            <div>
                <h2 class="font-serif text-4xl md:text-5xl text-gray-800">Drop Us a Line</h2>
                <form action="#" method="POST" class="mt-8 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <input type="text" name="name" placeholder="Name" class="w-full p-4 rounded-full bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none">
                        <input type="text" name="phone" placeholder="Phone Number" class="w-full p-4 rounded-full bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" class="w-full p-4 rounded-full bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none">
                    </div>
                    <div>
                        <select name="service" class="w-full p-4 rounded-full bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none appearance-none">
                            <option>Select Service</option>
                            <option>Wedding</option>
                            <option>Birthday</option>
                            <option>Corporate</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="message" placeholder="Message" rows="5" class="w-full p-4 rounded-3xl bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full md:w-auto bg-gray-800 text-white font-bold rounded-full px-10 py-4 hover:bg-gray-900 transition">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- REUSABLE FOOTER COMPONENT --}}
    <x-footer />

</body>
</html>
