<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @include('partials.head')
        <title>{{ $title ?? config('app.name') }}</title>
        {!! CookieConsent::styles() !!}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
    @hasrole('admin')
        <x-layouts::app.sidebar-admin :title="$title ?? null">
            <flux:main  >
                    {{ $slot }}
                <livrwire:about.footer/>
            </flux:main>
        </x-layouts::app.sidebar-admin>
    @livewireScripts
    {!! CookieConsent::scripts() !!}
    </body>
</html>
    @elsehasrole('contractor')
    <x-layouts::app.sidebar-contractor :title="$title ?? null">
        <flux:main>
                {{ $slot }}
            <livewire:about.footer/>
        </flux:main>
    </x-layouts::app.sidebar-contractor>
        @livewireScripts
    {!! CookieConsent::scripts() !!}
    </body>
</html>
    @elsehasrole('user')
    <x-layouts::app.sidebar-user :title="$title ?? null">
        <flux:main>
                {{ $slot }}
            <livewire:about.footer/>
        </flux:main>
        </x-layouts::app.sisebar-user>
        @livewireScripts
        {!! CookieConsent::scripts() !!}
        </body>
</html>
        @else {{abort(403,'you are not authorised')}}
@endhasrole
