<x:layout>
    <header class="mt-8">
        <h1 class="text-5xl w-full">Laravel Code Tips</h1>
        <h2 class="mt-6 text-2xl text-gray-700">Make your Laravel code cleaner, faster, and safer.</h2>
        <div class="mt-6 text-gray-800 text-lg">
            <a class="inline" href="https://twitter.com/LaravelCodeTips" target="_blank">
                <span class="link">Twitter</span>
            </a>
            <span class="px-1">·</span>
            <a class="inline" href="https://newsletter.laravel-code.tips" target="_blank">
                <span class="link">Newsletter</span>
            </a>
            <span class="px-1">·</span>
            <a class="inline" href="https://t.me/laraveltips" target="_blank">
                <span class="link">Telegram</span>
            </a>
        </div>
    </header>
    <main class="mx-auto flex justify-between items-center gap-8 w-1/2">
        <x:feed :tips="$tips" />
    </main>
</x:layout>
