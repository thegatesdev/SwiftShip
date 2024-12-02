<ul class="list col hover">
    @can('packet_type_create')
    <li><a href="{{ route('app.pt.create') }}" wire:navigate>Nieuw Pakket Type</a></li>
    @endcan
    @can('packet_create')
    <li><a href="{{ route('app.packet.create') }}" wire:navigate>Nieuw Pakket</a></li>
    @endcan
    @can('traffic_view')
    <li><a href="{{ route('app.traffic.view') }}" wire:navigate>Verkeersinfo</a></li>
    @endcan
</ul>
