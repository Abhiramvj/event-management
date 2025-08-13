<x-layouts.app>
    {{-- Set the browser tab title --}}
    <x-slot:title>
        Gallery
    </x-slot:title>

    {{-- ================================================================= --}}
    {{-- PAGE HEADER BANNER --}}
    {{-- We use our reusable component for a consistent look. --}}
    {{-- ================================================================= --}}
    <x-page-header
        title="Gallery"
        bgImage="https://placehold.co/1920x500/b7b7a4/ffffff?text=Our+Portfolio"
    />

    {{-- ================================================================= --}}
    {{-- GALLERY GRID SECTION --}}
    {{-- ================================================================= --}}
    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-6">

            {{-- Introductory Text --}}
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl md:text-5xl text-gray-800">Explore Our Work</h2>
                <p class="mt-4 text-lg text-gray-600">A showcase of our creativity, passion, and attention to detail.</p>
            </div>

            {{-- Grid Container --}}
            <div class="space-y-12">

                {{-- First Row of Gallery Items (4 columns) --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Gallery Item 1 -->
                    <a href="#" class="group block text-center">
                        <div class="overflow-hidden rounded-2xl shadow-lg"><img src="https://placehold.co/600x400/e0e0e0/333?text=Engagement" alt="Engagement" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"></div>
                        <h3 class="font-serif text-2xl mt-6 text-gray-800">Engagement</h3>
                    </a>
                    <!-- Gallery Item 2 -->
                    <a href="#" class="group block text-center">
                        <div class="overflow-hidden rounded-2xl shadow-lg"><img src="https://placehold.co/600x400/f5f5f5/333?text=Baptism" alt="Baptism" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"></div>
                        <h3 class="font-serif text-2xl mt-6 text-gray-800">Baptism</h3>
                    </a>
                    <!-- Gallery Item 3 -->
                    <a href="#" class="group block text-center">
                        <div class="overflow-hidden rounded-2xl shadow-lg"><img src="https://placehold.co/600x400/eeeeee/333?text=Wedding+Events" alt="Wedding Events" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"></div>
                        <h3 class="font-serif text-2xl mt-6 text-gray-800">Wedding Events</h3>
                    </a>
                    <!-- Gallery Item 4 -->
                    <a href="#" class="group block text-center">
                        <div class="overflow-hidden rounded-2xl shadow-lg"><img src="https://placehold.co/600x400/e0e0e0/333?text=Birthday" alt="Birthday" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"></div>
                        <h3 class="font-serif text-2xl mt-6 text-gray-800">Birthday</h3>
                    </a>
                </div>

                {{-- Second Row of Gallery Items (2 columns) --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 pt-8">
                    <!-- Gallery Item 5 -->
                    <a href="#" class="group block text-center">
                        <div class="overflow-hidden rounded-2xl shadow-lg"><img src="https://placehold.co/800x600/f5f5f5/333?text=Corporate+Events" alt="Corporate Events" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"></div>
                        <h3 class="font-serif text-2xl mt-6 text-gray-800">Corporate Events</h3>
                    </a>
                    <!-- Gallery Item 6 -->
                    <a href="#" class="group block text-center">
                        <div class="overflow-hidden rounded-2xl shadow-lg"><img src="https://placehold.co/800x600/eeeeee/333?text=Private+Parties" alt="Private Parties" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out"></div>
                        <h3 class="font-serif text-2xl mt-6 text-gray-800">Private Parties</h3>
                    </a>
                </div>

            </div>

        </div>
    </section>

</x-layouts.app>
