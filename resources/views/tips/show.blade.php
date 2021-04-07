<x:layout>
    <div
        class="fixed inset-0 z-40 items-center justify-between hidden w-full h-screen p-16 pointer-events-none lg:flex">
        <a class="rounded-full shadow-md pointer-events-auto" href="#">
            <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </div>
        </a>

        <a class="rounded-full shadow-md pointer-events-auto" href="#">
            <div class="flex items-center justify-center w-16 h-16 bg-white rounded-full shadow-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-500" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </div>
        </a>
    </div>

    <main class="relative flex-1 py-24">
        <div
            class="absolute w-full transform skew-y-12 pointer-events-none h-72 md:h-96 -translate-y-1/4 bg-gradient-to-br from-yellow-300 to-pink-400 mix-blend-multiply">
        </div>

        <div class="w-full max-w-4xl px-4 mx-auto sm:px-6 md:px-8">

            <div class="flex flex-col items-center space-y-6 text-center md:space-y-12">
                <div class="space-y-6 text-yellow-900">
                    <h1 class="text-3xl font-bold tracking-tighter md:text-5xl">{{ $tip->title }}</h1>

                    <ul class="inline-grid grid-flow-col gap-4">
                        <li>
                            <a class="transition border-b-2 border-pink-100 hover:border-pink-900 focus:outline-none focus:border-pink-900"
                                href="{{ $twitter }}">Twitter</a>
                        </li>

                        <li>
                            <span>&centerdot;</span>
                        </li>

                        <li>
                            <a class="transition border-b-2 border-pink-100 hover:border-pink-900 focus:outline-none focus:border-pink-900"
                                href="{{ $telegram }}">Telegram</a>
                        </li>

                        <li>
                            <span>&centerdot;</span>
                        </li>

                        <li>
                            <a class="transition border-b-2 border-pink-100 hover:border-pink-900 focus:outline-none focus:border-pink-900"
                                href="{{ $newsletter }}">Newsletter</a>
                        </li>
                    </ul>
                </div>

                @if ($tip->images())
                    @foreach ($tip->images() as $image)
                        <img class="shadow-xl rounded-xl backdrop-filter backdrop-blur-lg backdrop-saturate-125"
                            src="{{ $image->small() }}" alt="{{ $tip->title }}">
                    @endforeach
                @endif

                @if ($tip->content)
                    <div class="prose break-all md:prose-xl">
                        {!! Str::of($tip->content)->markdown() !!}
                    </div>
                @endif

                <div class="flex w-full p-6 space-x-6 bg-gray-50 rounded-2xl">
                    <a href="{{ $tip->author->profile_url }}" target="_blank">
                        <img class="bg-gray-200 rounded-full w-14 h-14" src="{{ asset($tip->author->avatar) }}"
                            alt="{{ $tip->author->name }}">
                    </a>

                    <aside class="flex-1 space-y-2 text-left">
                        <a href="{{ $tip->author->profile_url }}" target="_blank"
                            class="block text-xl font-bold">{{ $tip->author->name }}</a>

                        <dl class="grid gap-6 sm:grid-cols-2 md:grid-cols-4">
                            @if ($tip->thread)
                                <div>
                                    <dt class="text-sm text-gray-500">Thread</dt>

                                    <dd>
                                        <x-link href="{{ route('thread.show', $tip->thread->slug) }}">
                                            {{ $tip->thread->title }}
                                        </x-link>
                                    </dd>
                                </div>
                            @endif

                            <div>
                                <dt class="text-sm text-gray-500">Tweet</dt>

                                <dd>
                                    <x-link href="{{ $tip->tweet_url }}" target="_blank">
                                        twitter.com/...
                                    </x-link>
                                </dd>
                            </div>
                        </dl>
                    </aside>
                </div>
            </div>
        </div>
    </main>
</x:layout>
