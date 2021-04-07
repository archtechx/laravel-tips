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

    @if($preview)
        <meta property="og:image" content="https://i.useflipp.com/g6demrp3y3rz.png?content={{ urlencode(html_entity_decode($preview)) }}" />
        <meta property="twitter:image" content="https://i.useflipp.com/g6demrp3y3rz.png?content={{ urlencode(html_entity_decode($preview)) }}" />
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
<body class="antialiased bg-white">
    <div class="w-full p-3 text-center min-h-screen flex justify-between flex-col">
        {{ $slot }}

        <footer class="space-y-2 text-gray-700 text-sm pt-8">
            <p>Found an error? Contact us at <a href="mailto:hello@laravel-code.tips" class="link">support@laravel-code.tips</a>.</p>
            <p>Want to share a tip? Submit it <a href="https://github.com/stancl/laravel-tips" target="_blank" class="link">here</a>.</p>
        </footer>
    </div>
</body>
</html>
