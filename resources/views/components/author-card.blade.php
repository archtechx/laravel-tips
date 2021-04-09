@props([
    'tip',
    'links' => [],
])

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
                        <x-link href="{{ route('thread.show', $tip->thread->slug, false) }}">
                            {{ $tip->thread->title }}
                        </x-link>
                    </dd>
                </div>
            @endif

            @if($tip->tweet_id)
                <div>
                    <dt class="text-sm text-gray-500">Tweet</dt>
                    <dd>
                        <x-link href="{{ $tip->tweet_url }}" target="_blank">
                            twitter.com/...
                        </x-link>
                    </dd>
                </div>
            @endif

            @if($links)
                <div>
                    <dt class="text-sm text-gray-500">Links</dt>

                    <dd>
                        @foreach($links as $text => $url)
                        <x-link href="{{ $url }}" target="_blank">
                            {{ ucfirst($text) }}
                        </x-link>
                        @endforeach
                    </dd>
                </div>
            @endif
        </dl>
    </aside>
</div>
