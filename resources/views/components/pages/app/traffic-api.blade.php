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
            @foreach ($road->segments as $segment)
                <x-parts.collapse name="{{ $segment->start . ' - ' . $segment->end }}">
                    @foreach ($segment->jams ?? [] as $jam)
                        <x-parts.collapse name="File: {{ $jam->from . ' - ' . $jam->to }}">
                            {{ $jam->reason }}
                        </x-parts.collapse>
                    @endforeach
                    @foreach ($segment->roadworks ?? [] as $roadwork)
                        <x-parts.collapse name="Wegwerkzaamheden: {{ $roadwork->incidentType }}">
                            {{ $roadwork->reason }}
                        </x-parts.collapse>
                    @endforeach
                    @foreach ($segment->radars ?? [] as $radar)
                        <x-parts.collapse name="Radar: {{ $radar->from . ' - ' . $radar->to }}">
                            {{ $radar->reason }}
                        </x-parts.collapse>
                    @endforeach
                </x-parts.collapse>
            @endforeach
        </x-parts.collapse>
    @endforeach
</div>
