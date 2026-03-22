<x-layouts::app.header :title="$title ?? null">
    <flux:main>
        {{ $slot }}
        <x-app.footer/>
    </flux:main>
 </x-layouts::app.header>
