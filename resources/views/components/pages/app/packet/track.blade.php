<x-slot:header>
    <x-parts.brand />
    @auth
    <livewire:parts.logout />
    @endauth
</x-slot:header>
<x-slot:navigation>
    <x-parts.navlinks />
</x-slot:navigation>
<x-slot:footer>
    <x-parts.copyright />
    <x-parts.contact />
</x-slot:footer>
<div class="fill flex scroll center around">
    <span>
        <h3>Pakket: {{ $packet->packetType->name }}</h3>
        <p>{{ $packet->packetType->description }}</p>
    </span>
    <span class="secondary apply pad">
        @foreach ($packet->updates as $update)
            <ul class="list col">
                <li>
                    {{ $update->created_at }}
                    <b>{{ $update->status->label() }}</b>
                </li>
            </ul>
        @endforeach
    </span>
</div>
