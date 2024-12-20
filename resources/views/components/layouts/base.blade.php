@props(['title'])

<!DOCTYPE html>
<html class="fill" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body {{ $attributes }}>
        {{ $slot }}
    </body>
</html>