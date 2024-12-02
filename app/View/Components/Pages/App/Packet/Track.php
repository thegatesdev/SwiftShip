<?php

namespace App\View\Components\Pages\App\Packet;

use App\Models\Packet;
use App\Models\PacketUpdate;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Track een pakket')]
class Track extends Component
{
    public Packet $packet;

    public function render()
    {
        $packet = $this->packet->with('updates', 'packetType')->get();
        return view('components.pages.app.packet.track', compact('packet'));
    }
}
