<x-layouts.app>
    {{-- Set the browser tab title --}}
    <x-slot:title>
        Contact Us
    </x-slot:title>

    {{-- ================================================================= --}}
    {{-- PAGE HEADER BANNER --}}
    {{-- ================================================================= --}}
    <x-page-header
        title="Contact Us"
        bgImage="https://placehold.co/1920x500/c5c5c5/ffffff?text=Get+In+Touch"
    />

    {{-- ================================================================= --}}
    {{-- CONTACT DETAILS SECTION --}}
    {{-- ================================================================= --}}
    <section class="py-20 md:py-28 bg-white">
        <div class="container mx-auto px-6">

            {{-- Introductory Text --}}
            <div class="text-center mb-16">
                <h2 class="font-serif text-4xl md:text-5xl text-gray-800">What Are You Waiting For...</h2>
                <p class="mt-4 text-lg text-gray-600">Get in Touch With Us</p>
            </div>

            {{-- Details Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center">

                <!-- Address Column -->
                <div>
                    <div class="flex justify-center mb-4">
                        <div class="bg-green-100 p-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-green-800">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="font-serif text-2xl text-gray-800">Address</h3>
                    <p class="mt-2 text-gray-600 leading-relaxed">
                        1707, 7th floor, TL, Hilite business park,<br>
                        Palazhi, Calicut 673014
                    </p>
                </div>

                <!-- Phone Column -->
                <div>
                     <div class="flex justify-center mb-4">
                        <div class="bg-green-100 p-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-green-800">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 6.75z" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="font-serif text-2xl text-gray-800">Phone</h3>
                    <div class="mt-2 text-gray-600 leading-relaxed space-y-1">
                        <p><a href="tel:+918089722160" class="hover:text-black">+91 80897 22160</a></p>
                        <p><a href="tel:+919207545021" class="hover:text-black">+91 92075 45021</a></p>
                        <p><a href="tel:+916282479591" class="hover:text-black">+91 62824 79591</a></p>
                    </div>
                </div>

                <!-- E-Mail Column -->
                <div>
                     <div class="flex justify-center mb-4">
                        <div class="bg-green-100 p-4 rounded-full">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-green-800">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                    </div>
                    <h3 class="font-serif text-2xl text-gray-800">E-Mail</h3>
                    <p class="mt-2 text-gray-600">
                        <a href="mailto:adamgroupofficial@gmail.com" class="hover:text-black">adamgroupofficial@gmail.com</a>
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ================================================================= --}}
    {{-- APPOINTMENT FORM SECTION --}}
    {{-- ================================================================= --}}
    <section class="pb-20 md:pb-28">
        <div class="container mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            {{-- Form Column --}}
            <div class="bg-gray-50 p-8 md:p-12 rounded-2xl">
                <h2 class="font-serif text-3xl md:text-4xl text-gray-800">Make An Appointment</h2>
                <p class="mt-4 text-gray-600">
                    Feel free to ask any questions you may have. If you haven't had a reply within 24 hours then please check your spam folder or let us know.
                </p>
                <form action="#" method="POST" class="mt-8 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <input type="text" name="name" placeholder="Name" class="w-full p-4 rounded-xl bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none transition">
                        <input type="text" name="phone" placeholder="Phone Number" class="w-full p-4 rounded-xl bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none transition">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" class="w-full p-4 rounded-xl bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none transition">
                    </div>
                    <div>
                        <select name="service" class="w-full p-4 rounded-xl bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none transition appearance-none">
                            <option>Select Service</option>
                            <option>Wedding</option>
                            <option>Birthday</option>
                            <option>Corporate</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div>
                        <textarea name="message" placeholder="Message" rows="5" class="w-full p-4 rounded-xl bg-white border border-gray-200 focus:ring-2 focus:ring-gray-400 focus:outline-none transition"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="bg-green-700 text-white font-medium rounded-xl px-10 py-4 hover:bg-green-800 transition">SEND MESSAGE</button>
                    </div>
                </form>
            </div>

            {{-- Image Column --}}
            <div class="h-full w-full">
                <img src="https://placehold.co/800x1000/e0e0e0/333?text=Happy+Client" alt="Happy client at an event" class="rounded-2xl object-cover w-full h-full">
            </div>
        </div>
    </section>

</x-layouts.app>
