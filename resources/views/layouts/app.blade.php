<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>
        {!! CookieConsent::styles() !!}
        @include('partials.head')
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <x-layouts::app.sidebar :title="$title ?? null">
            <flux:main>
                {{ $slot }}
                <x-app.footer/>
            </flux:main>
        </x-layouts::app.sidebar>
        @livewireScripts
        {!! CookieConsent::scripts() !!}
    </body>
</html>
