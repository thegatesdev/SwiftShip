<x-layouts.base>
    <x-parts.header />
    <div>
        <x-parts.navigation />
        {{ $slot }}
    </div>
    <x-parts.footer></x-parts.footer>
</x-layouts.base>
