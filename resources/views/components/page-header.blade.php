@props(['title', 'bgImage'])

<div class="relative h-72 md:h-96 bg-cover bg-center" style="background-image: url('{{ $bgImage }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto px-6 h-full flex flex-col items-center justify-center text-white relative z-10">
        <h1 class="font-serif text-4xl md:text-6xl font-bold">{{ $title }}</h1>
        <div class="mt-4 text-sm font-light">
            <a href="{{ route('home') }}" class="hover:text-gray-300">Home</a>
            <span class="mx-2">/</span>
            <span>{{ $title }}</span>
        </div>
    </div>
</div>
