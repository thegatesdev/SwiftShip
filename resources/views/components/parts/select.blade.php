@props([
    'name',
    'value',
    'nullable' => true,
])

<span class="flex">
    <label for="{{ $name }}">{{ $value }}</label>
    <select title="{{ $name }}" wire:model.blur="{{ $name }}">
        @if($nullable)<option value="null" disabled="disabled">-- Geen {{ strtolower($value) }} --</option>@endif
        {{ $slot }}
    </select>
    @error($name) <span class="negative apply">{{ $message }}</span> @enderror 
</span>