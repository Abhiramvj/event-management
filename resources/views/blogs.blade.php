<x-layouts.app>
    {{-- Set the browser tab title --}}
    <x-slot:title>
        Blog
    </x-slot:title>

    {{-- ================================================================= --}}
    {{-- PAGE HEADER BANNER --}}
    {{-- ================================================================= --}}
    <x-page-header
        title="Blog"
        bgImage="https://placehold.co/1920x500/a9a9a9/ffffff?text=Our+Insights"
    />

    {{-- ================================================================= --}}
    {{-- MAIN CONTENT SECTION (Two-Column Layout) --}}
    {{-- ================================================================= --}}
    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-6">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16">

                {{-- ================================================================= --}}
                {{-- MAIN BLOG POSTS (Left Column) --}}
                {{-- ================================================================= --}}
                <div class="lg:col-span-2 space-y-20">

                    <!-- Blog Post 1 -->
                    <article class="text-center">
                        <a href="#">
                            <img src="https://placehold.co/1200x800/e0e0e0/333?text=Wedding+Planning" alt="Blog post image" class="rounded-2xl w-full object-cover">
                        </a>
                        <h2 class="font-serif text-3xl md:text-4xl mt-8 text-gray-800 hover:text-black transition">
                            <a href="#">How to Choose the Best Wedding Planner for Your...</a>
                        </h2>
                        <p class="text-sm text-gray-500 mt-4">May 31, 2024</p>
                        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                            Planning your wedding can be exhilarating yet overwhelming. Choosing the right wedding planner is essential for a smooth experience. Here...
                        </p>
                        <a href="#" class="inline-block mt-6 bg-gray-800 text-white font-medium px-8 py-3 hover:bg-black transition">
                            CONTINUE READING
                        </a>
                    </article>

                    <!-- Blog Post 2 -->
                    <article class="text-center">
                        <a href="#">
                            <img src="https://placehold.co/1200x800/f5f5f5/333?text=Event+Details" alt="Blog post image" class="rounded-2xl w-full object-cover">
                        </a>
                        <h2 class="font-serif text-3xl md:text-4xl mt-8 text-gray-800 hover:text-black transition">
                            <a href="#">Top 5 Reasons to Choose Adam Events for Your N...</a>
                        </h2>
                        <p class="text-sm text-gray-500 mt-4">October 08, 2023</p>
                        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                            Planning a celebration can be both exciting and overwhelming, but with Adam Events by your side, you can make the...
                        </p>
                        <a href="#" class="inline-block mt-6 bg-gray-800 text-white font-medium px-8 py-3 hover:bg-black transition">
                            CONTINUE READING
                        </a>
                    </article>

                    {{-- Add more articles here as needed --}}

                </div>

                {{-- ================================================================= --}}
                {{-- SIDEBAR (Right Column) --}}
                {{-- ================================================================= --}}
                <aside class="lg:col-span-1 space-y-10">

                    <!-- CTA Widget -->
                    <div class="relative rounded-lg overflow-hidden p-8 flex items-center h-56 bg-cover bg-center" style="background-image: url('https://placehold.co/600x400/d1d5db/333?text=Decor');">
                        <div class="absolute inset-0 bg-green-800 opacity-80"></div>
                        <div class="relative z-10">
                            <h3 class="font-serif text-2xl text-white">LET'S PLAN YOUR BIG DAY?</h3>
                            <a href="{{ route('contact') }}" class="mt-4 inline-flex items-center text-white font-semibold">
                                Enquire Now
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5 ml-2"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" /></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Services Widget -->
                    <div class="p-8 bg-gray-100 rounded-lg">
                        <h3 class="font-serif text-2xl text-gray-800 mb-4">Our Services</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li>- <a href="#" class="hover:text-black">Wedding</a></li>
                            <li>- <a href="#" class="hover:text-black">Birthday</a></li>
                            <li>- <a href="#" class="hover:text-black">Bride To Be</a></li>
                            <li>- <a href="#" class="hover:text-black">Corporate</a></li>
                        </ul>
                    </div>

                </aside>
            </div>

        </div>
    </section>

</x-layouts.app>
