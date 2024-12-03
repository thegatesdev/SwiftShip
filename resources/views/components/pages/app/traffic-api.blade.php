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
<div class="fill flex scroll pad secondary">
    @foreach ($data->roads as $road)
        <x-parts.collapse name="{{ $road->road }}">
            @foreach ($road->segments ?? [] as $segment)
                <x-parts.collapse name="{{ ($segment->start ?? 'Onbekend') . ' - ' . ($segment->end ?? 'Onbekend') }}">
                    @foreach ($segment->jams ?? [] as $jam)
                        <x-parts.collapse name="File: {{ ($jam->from ?? 'Onbekend') . ' - ' . ($jam->to ?? 'Onbekend') }}">
                            {{ $jam->reason ?? 'Onbekend' }}
                        </x-parts.collapse>
                    @endforeach
                    @foreach ($segment->roadworks ?? [] as $roadwork)
                        <x-parts.collapse name="Wegwerkzaamheden: {{ ($roadwork->incidentType ?? 'Onbekend incident') }}">
                            {{ $roadwork->reason ?? 'Onbekend' }}
                        </x-parts.collapse>
                    @endforeach
                    @foreach ($segment->radars ?? [] as $radar)
                        <x-parts.collapse name="Radar: {{ ($radar->from ?? 'Onbekend') . ' - ' . ($radar->to ?? 'Onbekend') }}">
                            {{ $radar->reason ?? 'Onbekend' }}
                        </x-parts.collapse>
                    @endforeach
                </x-parts.collapse>
            @endforeach
        </x-parts.collapse>
    @endforeach
</div>
