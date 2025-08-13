<x-layouts.app>
    {{-- Set the browser tab title --}}
    <x-slot:title>
        Our Services
    </x-slot:title>

    {{-- ================================================================= --}}
    {{-- PAGE HEADER BANNER --}}
    {{-- We use our reusable component for a consistent look. --}}
    {{-- ================================================================= --}}
    <x-page-header
        title="Services"
        bgImage="https://placehold.co/1920x500/8f8f8f/ffffff?text=Our+Services"
    />

    {{-- ================================================================= --}}
    {{-- SERVICES GRID SECTION --}}
    {{-- ================================================================= --}}
    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-6">

            {{-- Introductory Text --}}
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl md:text-5xl text-gray-800">Crafting Unforgettable Moments</h2>
                <p class="mt-4 text-lg text-gray-600">Expert Planning, Flawless Execution</p>
            </div>

            {{-- Grid Container --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">

                {{-- Service Item 1: Baptism --}}
                <a href="#" class="group block text-center">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="https://placehold.co/800x600/e0e0e0/333?text=Baptism+Event" alt="Baptism Event" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out">
                    </div>
                    <h3 class="font-serif text-3xl mt-6 text-gray-800">Baptism</h3>
                </a>

                {{-- Service Item 2: Bride To Be --}}
                <a href="#" class="group block text-center">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="https://placehold.co/800x600/f5f5f5/333?text=Bride+To+Be" alt="Bride To Be Event" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out">
                    </div>
                    <h3 class="font-serif text-3xl mt-6 text-gray-800">Bride To Be</h3>
                </a>

                {{-- Service Item 3: Birthday --}}
                <a href="#" class="group block text-center">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="https://placehold.co/800x600/eeeeee/333?text=Birthday+Party" alt="Birthday Party" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out">
                    </div>
                    <h3 class="font-serif text-3xl mt-6 text-gray-800">Birthday</h3>
                </a>

                {{-- Service Item 4: Corporate --}}
                <a href="#" class="group block text-center">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="https://placehold.co/800x600/e0e0e0/333?text=Corporate+Event" alt="Corporate Event" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out">
                    </div>
                    <h3 class="font-serif text-3xl mt-6 text-gray-800">Corporate</h3>
                </a>

                {{-- Service Item 5: Wedding (Spans both columns) --}}
                <a href="#" class="group block text-center md:col-span-2 mt-8">
                    <div class="overflow-hidden rounded-2xl shadow-lg">
                        <img src="https://placehold.co/1600x800/f5f5f5/333?text=Wedding+Reception" alt="Wedding Reception" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 ease-in-out">
                    </div>
                    <h3 class="font-serif text-3xl mt-6 text-gray-800">Wedding</h3>
                </a>

            </div>

        </div>
    </section>

</x-layouts.app>
