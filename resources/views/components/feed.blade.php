@props(['tips'])

<section role="feed" class="divide-y">
    @foreach ($tips as $tip)
        <div class="py-12 md:py-24 {{ $loop->odd ?: 'bg-gray-50' }}">
            <div class="w-full max-w-4xl px-4 mx-auto sm:px-6 md:px-8">
                <article
                    class="flex flex-col items-center space-y-6 md:space-y-12 text-center group transition transform active:scale-[0.99] duration-75 relative"
                    role="article">
                    <a class="absolute inset-0 w-full h-full" title="{{ $tip->title }}"
                        href="{{ route('tip.show', $tip, false) }}">
                        <span class="sr-only">{{ $tip->title }}</span>
                    </a>

                    <div
                        class="transition duration-200 transform shadow rounded-2xl group-hover:rotate-6 group-hover:-translate-y-2 group-hover:shadow-md">
                        <div
                            class="flex items-center justify-center w-16 h-16 text-2xl font-bold shadow-xl bg-gradient-to-b from-white to-pink-50 rounded-2xl tabular-nums">
                            <p
                                class="text-transparent transition duration-300 transform bg-gradient-to-br from-yellow-400 to-pink-400 bg-clip-text group-hover:scale-105 group-hover:rotate-6">
                                {{ count($tips) - $loop->index }}
                            </p>
                        </div>
                    </div>

                    <h2 class="text-xl font-bold tracking-tight md:text-4xl">
                        🔥 {{ $tip->title }}
                    </h2>

                    @if ($tip->images())
                        @foreach ($tip->images() as $image)
                            <img class="shadow-xl rounded-xl" src="{{ $image->small() }}" alt="{{ $tip->title }}">
                        @endforeach
                    @endif

                    @if ($tip->content)
                        <div class="prose break-all md:prose-xl">
                            {!! Str::of($tip->content)->markdown() !!}
                        </div>
                    @endif
                </article>
            </div>
        </div>
    @endforeach
</section>
