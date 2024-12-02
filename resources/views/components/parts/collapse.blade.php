@props(['name'])

<div {{ $attributes->class('collapse shadow') }} x-cloak x-data="{ open: false }" :class="open ? '' : 'hide'">
    <button type="button" class="fill-x" x-on:click="open = ! open">{{ $name }}</button>
    <div class="content">{{ $slot }}</div>
</div>