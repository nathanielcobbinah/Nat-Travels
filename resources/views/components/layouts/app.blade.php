<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        <script src="https://cnd.tailwindcss.com"></script>
        @vite('resources/css/app.css')
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body class="bg-blue-950 text-gray-300 px-3">
        @include('partials.header')
        
        {{ $slot }}

        @include('partials.footer')
    </body>
</html>