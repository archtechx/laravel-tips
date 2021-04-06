@props([
    'tips',
])

<section role="feed" class="my-8">
    @foreach($tips as $tip)
        <article class="border-b-2 border-gray-200 py-16" x-data @click="window.location.href = '{{ route('tip.show', $tip) }}'">
            <h1 class="text-3xl font-medium">
                <a href="{{ route('tip.show', $tip) }}">🔥 {{ $tip->title }}</a>
            </h1>

            <div class="mt-4 flex justify-center w-1/2 gap-1 flex-wrap mx-auto">
                @foreach($tip->images() as $image)
                    <img alt="{{ $tip->title }}" src="{{ $image->small() }}">
                @endforeach
            </div>

            <section role="article" class="mt-8 text-xl prose mx-auto">
                @markdown{!! $tip->content !!}@endmarkdown
            </section>
        </article>
    @endforeach
</section>
