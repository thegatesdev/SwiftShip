@props([
    'type',
    'name' => null,
    'value',
    'wire' => true,
    'ver',
])
<span @isset($ver)class="flex"@endisset>
    <label for="{{ $name ?? $type }}">{{ $value }}</label>
    <input type="{{ $type }}" id="{{ $name ?? $type }}" @if($wire) wire:model="{{ $name ?? $type }}" @endif {{ $attributes }} placeholder="{{ $value }}...">
</span>