@props([
    'title' => null,
    'preview' => null,
])

@php
$title = $title
    ? $title . ' | Laravel Code Tips'
    : 'Laravel Code Tips';
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script type="module" src="{{ mix('js/app.js') }}"></script>
    <link href="https://fonts.rcvd.io/iA%20Writer/stylesheet.css" rel="stylesheet" type="text/css">

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Laravel Code Tips">
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="Make your Laravel code cleaner, faster, and safer." />

    @if ($preview)
        <meta property="og:image"
            content="https://i.useflipp.com/g6demrp3y3rz.png?content={{ urlencode(html_entity_decode($preview)) }}" />
        <meta property="twitter:image"
            content="https://i.useflipp.com/g6demrp3y3rz.png?content={{ urlencode(html_entity_decode($preview)) }}" />
    @else
        <meta property="og:image" content="{{ asset('og.png') }}" />
        <meta property="twitter:image" content="{{ asset('og.png') }}" />
    @endif

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="LaravelCodeTips">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="Make your Laravel code cleaner, faster, and safer.">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <meta name="theme-color" content="#fa7c4c">
</head>

<body class="flex flex-col min-h-screen font-sans antialiased text-gray-800">
    {{ $slot }}

    <footer class="py-12 border-t">
        <ul class="px-4 space-y-4 text-center text-gray-500">
            <li>
                Want to share a tip? Submit it
                <x-link href="https://github.com/stancl/laravel-tips">here</x-link>
            </li>
            
            <li>
                Made with <span class="text-red-500">❤️</span> by
                <x-link target="_blank" href="https://archte.ch">ArchTech</x-link>
            </li>

            <li>
                Designed by
                <x-link target="_blank" href="https://twitter.com/LarsKlopstra">Lars Klopstra</x-link>
            </li>
        </ul>
    </footer>
</body>

</html>
