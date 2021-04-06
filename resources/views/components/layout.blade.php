<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script type="module" src="{{ mix('js/app.js') }}"></script>
    <link href="https://fonts.rcvd.io/iA%20Writer/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body class="antialiased bg-white">
    <div class="w-full p-3 text-center min-h-screen flex justify-between flex-col">
        {{ $slot }}

        <footer class="space-y-2 text-gray-700 text-sm">
            <p>Found an error? Contact us at <a href="mailto:hello@laravel-code.tips" class="link">support@laravel-code.tips</a>.</p>
            <p>Want to share a tip? Submit it <a href="https://airtable.com/shrBX2ZAfnuAXh3up" target="_blank" class="link">here</a>.</p>
        </footer>
    </div>
</body>
</html>
