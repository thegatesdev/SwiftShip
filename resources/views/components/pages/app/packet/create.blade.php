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
                <x-parts.select name="form.packet_type_id" value="Pakket type">
                    @foreach ($packetTypes as $pt)
                            <option value="{{ $pt->id }}">{{ $pt->name }}</option>
                    @endforeach
                </x-parts.select>
                <x-parts.input ver type="text" name="form.receiver_postal_code" value="Postcode" required />
                <x-parts.input ver type="text" name="form.receiver_city" value="Plaatsnaam" required />
                <x-parts.input ver type="text" name="form.receiver_region" value="Regio" required />
                <x-parts.input ver type="email" name="form.receiver_email" value="E-mail" required />
                <x-parts.input ver type="number" name="form.warehouse_location" value="Opslag locatie" required />
                <x-parts.input type="checkbox" name="form.mailbox" value="Past in brievenbus" />
                <x-parts.input type="checkbox" name="form.signature" value="Vereist een handtekening" />
            </span>
            <input type="submit" value="Opslaan" class="btn solid swap primary">
        </form>
    </div>    
</div>
