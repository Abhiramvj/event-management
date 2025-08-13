@props(['title', 'bgImage', 'height' => 'h-72 md:h-96', 'breadcrumbs' => []])

<div class="relative {{ $height }} bg-cover bg-center" style="background-image: url('{{ $bgImage }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container mx-auto px-6 h-full flex flex-col items-center justify-center text-white relative z-10">
        <h1 class="font-serif text-4xl md:text-6xl font-bold">{{ $title }}</h1>

        {{-- Breadcrumbs --}}
        <div class="mt-4 text-sm font-light flex items-center">
            @foreach($breadcrumbs as $name => $url)
                @if($url)
                    <a href="{{ $url }}" class="hover:text-gray-300">{{ $name }}</a>
                @else
                    <span>{{ $name }}</span>
                @endif
                @if(!$loop->last)
                    <span class="mx-2">/</span>
                @endif
            @endforeach
        </div>
    </div>
</div>
