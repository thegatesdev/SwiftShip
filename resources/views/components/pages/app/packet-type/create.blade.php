<x-slot:header>
    <x-parts.brand />
    <livewire:parts.logout />
</x-slot:header>
<x-slot:navigation>
    <x-parts.navlinks />
</x-slot:navigation>
<x-slot:footer>
    <x-parts.copyright />
    <x-parts.contact />
</x-slot:footer>
<div class="fill flex scroll">
    @if(session('success'))
        <div class="fill-x center-txt positive apply">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="fill flex center pad scroll">
        <form class="fill flex between gap scroll max" wire:submit="save">
            <span class="fill flex gap">
                <x-parts.input ver type="text" name="form.name" value="Naam" required />
                <x-parts.input ver type="text" name="form.description" value="Omschrijving" required />
                <x-parts.select name="form.user_id" value="Gebruiker">
                    @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->email }}</option>
                    @endforeach
                </x-parts.select>
            </span>
            <input type="submit" value="Opslaan" class="btn solid swap primary">
            <button type="button" wire:click="next" class="btn solid swap active">Nieuw pakket aanmaken</button>
        </form>
    </div>    
</div>
