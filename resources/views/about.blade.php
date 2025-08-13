<x-layouts.app>
    <x-slot:title>
        About Us
    </x-slot:title>

    {{-- ================================================================= --}}
    {{-- PAGE HEADER BANNER --}}
    {{-- We use our new component here --}}
    {{-- ================================================================= --}}
    <x-page-header
        title="About Us"
        bgImage="https://placehold.co/1920x500/a3b18a/ffffff?text=Our+Story"
    />

    {{-- ================================================================= --}}
    {{-- ABOUT ADAM SECTION (Intro) --}}
    {{-- ================================================================= --}}
    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            {{-- Text Content --}}
            <div class="text-left">
                <h2 class="font-serif text-4xl md:text-5xl text-gray-800 leading-tight">About Adam Events</h2>
                <p class="mt-6 text-gray-600 leading-relaxed">
                    At Adam Group of Events, we believe every event tells a story—your story. Founded with a passion for creativity and precision, we specialize in crafting extraordinary experiences that leave lasting impressions. From corporate conferences and weddings to product launches and private celebrations, our team is dedicated to transforming your vision into reality.
                </p>
                <p class="mt-4 text-gray-600 leading-relaxed">
                    With years of experience and a commitment to excellence, we handle every detail, ensuring seamless execution from start to finish. Our innovative approach, combined with a personalized touch, ensures that each event is as unique as you are.
                </p>
            </div>

            {{-- Image Collage --}}
            <div class="grid grid-cols-5 grid-rows-3 gap-3 h-[450px]">
                <img src="https://placehold.co/600x600/e0e0e0/333?text=Event" alt="Event 1" class="col-span-3 row-span-3 rounded-2xl object-cover w-full h-full">
                <img src="https://placehold.co/400x400/eeeeee/333?text=Details" alt="Event 2" class="col-span-2 row-span-2 rounded-2xl object-cover w-full h-full">
                <img src="https://placehold.co/400x200/f5f5f5/333?text=Setup" alt="Event 3" class="col-span-2 row-span-1 rounded-2xl object-cover w-full h-full">
            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- CRAFTING MOMENTS (Call to Action) --}}
    {{-- ================================================================= --}}
    <section class="relative py-32 bg-cover bg-center" style="background-image: url('https://placehold.co/1920x800/d1d5db/333?text=Elegant+Flowers');">
        <div class="absolute inset-0 bg-white opacity-40"></div>
        <div class="container mx-auto px-6 relative z-10 text-center md:text-left">
            <p class="text-gray-700 uppercase tracking-widest">Tell Us Your Story</p>
            <h2 class="font-serif text-4xl md:text-6xl text-gray-900 mt-2">Crafting Unforgettable<br>Moments</h2>
            <a href="{{ route('contact') }}" class="inline-block mt-8 border border-gray-700 px-10 py-3 text-gray-700 font-medium hover:bg-gray-800 hover:text-white hover:border-gray-800 transition">CONTACT US</a>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- WHAT PEOPLE SAY (Testimonial) --}}
    {{-- ================================================================= --}}
    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center">
                <h2 class="font-serif text-4xl md:text-5xl text-gray-800">What People Say</h2>
            </div>
            <div class="mt-16 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                {{-- Service Links --}}
                <div class="lg:col-span-3">
                    <ul class="flex justify-center lg:flex-col lg:space-y-4 text-center lg:text-right uppercase tracking-widest text-gray-400">
                        <li class="p-2 lg:p-0"><a href="#" class="border-b-2 border-gray-800 text-gray-800 pb-1">Wedding</a></li>
                        <li class="p-2 lg:p-0"><a href="#" class="hover:text-gray-800">Corporate</a></li>
                        <li class="p-2 lg:p-0"><a href="#" class="hover:text-gray-800">Baptism</a></li>
                        <li class="p-2 lg:p-0"><a href="#" class="hover:text-gray-800">Birthday</a></li>
                    </ul>
                </div>
                {{-- Testimonial Content --}}
                <div class="lg:col-span-9 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <img src="https://placehold.co/600x700/e0e0e0/333?text=Outdoor+Wedding" alt="Testimonial Event" class="rounded-2xl w-full h-full object-cover">
                    <div>
                        <p class="text-gray-600 text-lg leading-relaxed">"Adam Events transformed our wedding into a dream come true. Their attention to detail and personalized approach made our day truly special. We couldn't have asked for a better team!"</p>
                        <p class="mt-6 font-semibold text-gray-800">- Reshma</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- MEET THE TEAM SECTION --}}
    {{-- ================================================================= --}}
    <section class="py-20 md:py-28">
        <div class="container mx-auto px-6 text-center">
            <h2 class="font-serif text-4xl md:text-5xl text-gray-800">Meet Our Creative Event Organizers</h2>
            <p class="mt-4 max-w-2xl mx-auto text-gray-600">Our talented team is committed to delivering excellence in every detail. With diverse skills and a shared passion for events, we turn dreams into reality.</p>
            <div class="mt-16 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
                <!-- Team Member 1 -->
                <div class="rounded-2xl overflow-hidden shadow-sm">
                    <img src="https://placehold.co/400x400/e0f2f1/333?text=Team+Member" alt="Team Member 1" class="w-full h-auto">
                    <div class="p-6 bg-[#e0f2f1]">
                        <h3 class="font-semibold text-xl text-gray-800">Design Implementation</h3>
                    </div>
                </div>
                <!-- Team Member 2 -->
                <div class="rounded-2xl overflow-hidden shadow-sm">
                    <img src="https://placehold.co/400x400/e0e7ff/333?text=Team+Member" alt="Team Member 2" class="w-full h-auto">
                    <div class="p-6 bg-[#e0e7ff]">
                        <h3 class="font-semibold text-xl text-gray-800">Event Planner</h3>
                    </div>
                </div>
                <!-- Team Member 3 -->
                <div class="rounded-2xl overflow-hidden shadow-sm">
                    <img src="https://placehold.co/400x400/e0f2f1/333?text=Team+Member" alt="Team Member 3" class="w-full h-auto">
                    <div class="p-6 bg-[#e0f2f1]">
                        <h3 class="font-semibold text-xl text-gray-800">Event Coordinator</h3>
                    </div>
                </div>
                <!-- Team Member 4 -->
                <div class="rounded-2xl overflow-hidden shadow-sm">
                    <img src="https://placehold.co/400x400/ffeeff/333?text=Team+Member" alt="Team Member 4" class="w-full h-auto">
                    <div class="p-6 bg-[#ffeeff]">
                        <h3 class="font-semibold text-xl text-gray-800">Operations</h3>
                    </div>
                </div>
            </div>
            <a href="#" class="inline-block mt-16 border border-gray-400 rounded-full px-8 py-3 text-gray-700 hover:bg-gray-800 hover:text-white hover:border-gray-800 transition">Read More</a>
        </div>
    </section>

</x-layouts.app>
