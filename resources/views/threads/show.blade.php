<x:layout :title="$thread->title">
    <main class="mx-auto flex justify-between items-start gap-8">
        <aside class="flex flex-col gap-2 mt-60">
            <h2 class="text-2xl font-medium">
                <a class="block" href="/">
                    Laravel Code Tips
                </a>
            </h2>
            <div class="flex justify-between">
                <a class="block" href="{{ $twitter }}" target="_blank">
                    <span class="link">Twitter</span>
                </a>
                <span class="px-2">·</span>
                <a class="block" href="{{ $newsletter }}" target="_blank">
                    <span class="link">Newsletter</span>
                </a>
                <span class="px-2">·</span>
                <a class="block" href="{{ $telegram }}" target="_blank">
                    <span class="link">Telegram</span>
                </a>
            </div>
            <a class="block" href="/">
                <span class="link">All tips</span>
            </a>
        </aside>
        <article class="max-w-5xl w-full mt-8">
            <header class="flex justify-center flex-wrap gap-5">
                <h1 class="text-4xl w-full">🔥 {{ $thread->title }}</h1>
                <div class="prose text-xl">@markdown{!! $thread->content !!}@endmarkdown</div>

                <x:feed :tips="$tips" />
            </header>
        </article>
        <aside class="mt-60">
            <dl class="grid grid-cols-2 gap-x-5 gap-y-4 items-center">
                <dt class="text-right">Author</dt>
                <dd class="text-left">
                    <a href="{{ $thread->author->profile_url }}" class="flex items-center gap-2" target="_blank">
                        <img src="{{ $thread->author->avatar }}" class="w-8 rounded-full border-blue-800 border-2">
                        <span class="text-blue-800">{{ $thread->author->name }}</span>
                    </a>
                </dd>

                <dt class="text-right">Tweet</dt>
                <dd class="text-left text-blue-800">
                    <a href="{{ $thread->tweet_url }}" target="_blank">
                        twitter.com/...
                    </a>
                </dd>
            </dl>
        </aside>
    </main>
</x:layout>
