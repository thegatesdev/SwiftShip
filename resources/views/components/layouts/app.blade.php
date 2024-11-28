@props(['title', 'header', 'naviation', 'footer'])

<x-layouts.base :$title {{ $attributes->class('theme-example dark apply flex fill noselect') }}>
    @isset($header)
        <header class="primary apply flex row between">
            {{ $header }}
        </header>
    @endisset
    <div class="flex row fill">
        @isset($navigation)
            <nav class="secondary apply">
                {{ $navigation ?? '' }}
            </nav>
        @endisset
        {{ $slot }}
    </div>
    @isset($footer)
        <footer class="secondary apply flex row around">
            {{ $footer ?? '' }}
        </footer>
    @endisset
</x-layouts.base>
