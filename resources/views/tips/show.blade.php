<x:layout :title="$tip->title" :preview="$tip->content">
    <main class="mx-auto flex justify-between items-center gap-8">
        <aside class="flex flex-col gap-2">
            <h2 class="text-2xl font-medium">
                <a class="block" href="/">
                    Laravel Code Tips
                </a>
            </h2>
            <div class="flex justify-between">
                <a class="block" href="https://twitter.com/LaravelCodeTips" target="_blank">
                    <span class="link">Twitter</span>
                </a>
                <span class="px-2">·</span>
                <a class="block" href="https://newsletter.laravel-code.tips" target="_blank">
                    <span class="link">Newsletter</span>
                </a>
                <span class="px-2">·</span>
                <a class="block" href="https://t.me/laraveltips" target="_blank">
                    <span class="link">Telegram</span>
                </a>
            </div>
            <a class="block" href="/">
                <span class="link">All tips</span>
            </a>
        </aside>
        <article class="max-w-5xl w-full mt-8 text-xl">
            <header class="flex justify-center flex-wrap gap-5">
                <h1 class="text-4xl w-full">🔥 {{ $tip->title }}</h1>

                <div class="flex justify-center w-1/2 gap-1 flex-wrap">
                    @foreach($tip->images() as $image)
                        <a href="{{ $image->large() }}" target="_blank">
                            <img alt="{{ $tip->title }}" src="{{ $image->small() }}">
                        </a>
                    @endforeach
                </div>
            </header>

            <section role="article" class="mt-8 text-xl prose mx-auto">
                @markdown{!! $tip->content !!}@endmarkdown
            </section>
        </article>
        <aside>
            <dl class="grid grid-cols-2 gap-x-5 gap-y-4 items-center">
                <dt class="text-right">Author</dt>
                <dd class="text-left">
                    <a href="{{ $tip->author->profile_url }}" class="flex items-center gap-2" target="_blank">
                        <img src="{{ $tip->author->avatar }}" class="w-8 rounded-full border-blue-800 border-2">
                        <span class="text-blue-800">{{ $tip->author->name }}</span>
                    </a>
                </dd>

                @if($tip->thread)
                    <dt class="text-right">Thread</dt>
                    <dd class="text-left text-blue-800">
                        <a href="{{ route('thread.show', $tip->thread->slug) }}">
                            {{ $tip->thread->title }}
                        </a>
                    </dd>
                @endif

                <dt class="text-right">Tweet</dt>
                <dd class="text-left text-blue-800">
                    <a href="{{ $tip->tweet_url }}" target="_blank">
                        twitter.com/...
                    </a>
                </dd>
            </dl>
        </aside>
    </main>
</x:layout>
