<x:layout>
    <div
        x-data
        @keydown.escape.window="Turbo.visit('{{ route('tip.index') }}')"
        class="fixed inset-0 z-40 items-center justify-between hidden w-full h-screen p-16 pointer-events-none lg:flex"
    >

        {{-- Left button = newer --}}
        @if($link = $tip->newQuery()->orderBy('created_at', 'asc')->firstWhere('created_at', '>', $tip->created_at))
            <a
                class="rounded-full shadow-md pointer-events-auto"
                href="{{ route('tip.show', $link, false) }}"
                x-data
                @keydown.arrow-left.window="$el.click()"
            >
                <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-500" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </div>
            </a>
        @else
            <div>
                {{-- Placeholder for positioning of the right button --}}
            </div>
        @endif

        {{-- Right button = older --}}
        @if($link = $tip->newQuery()->orderBy('created_at', 'desc')->firstWhere('created_at', '<', $tip->created_at))
            <a
                class="rounded-full shadow-md pointer-events-auto"
                href="{{ route('tip.show', $link, false) }}"
                x-data
                @keydown.arrow-right.window="$el.click()"
                >
                <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-500" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </a>
        @endif
    </div>

    <main class="relative flex-1 py-24">
        <div
            class="absolute w-full transform skew-y-12 pointer-events-none h-72 md:h-96 -translate-y-1/4 bg-gradient-to-br from-yellow-300 to-pink-400 mix-blend-multiply">
        </div>

        <x:container>
            <div class="flex flex-col items-center space-y-6 text-center md:space-y-12">
                <div class="space-y-6 text-yellow-900">
                    <h1 class="text-3xl font-bold tracking-tighter md:text-5xl">{{ $tip->title }}</h1>

                    <x:socials />
                </div>

                @if ($tip->images())
                    @foreach ($tip->images() as $image)
                        <img class="shadow-xl rounded-xl backdrop-filter backdrop-blur-lg backdrop-saturate-125"
                            src="{{ $image->small() }}" alt="{{ $tip->title }}">
                    @endforeach
                @endif

                @if ($tip->content)
                    <div class="prose break-words md:prose-xl">
                        {!! Str::markdown($tip->content) !!}
                    </div>
                @endif

                <x:author-card :tip="$tip" />
            </div>
        </x:container>
    </main>
</x:layout>
