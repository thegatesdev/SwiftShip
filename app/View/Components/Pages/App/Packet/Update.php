<?php

namespace App\View\Components\Pages\App\Packet;

use App\Data\PacketStatus;
use App\Livewire\Forms\PacketForm;
use App\Models\Packet;
use App\Models\PacketType;
use App\Models\PacketUpdate;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pas een pakket aan')]
class Update extends Component
{
    public bool $sent;
    public Packet $packet;
    public PacketForm $form;

    public function mount(Packet $packet)
    {
        $this->packet = $packet;
        $this->form->set($packet);
        $this->sent = PacketUpdate::where('packet_id', '=', $packet->id)
            ->where('status', '=', PacketStatus::WH_PENDING->value)->exists();
    }

    public function save()
    {
        $this->form->update();
        session()->flash('success', 'Pakket succesvol aangepast');
    }

    public function markSent()
    {
        $this->sent = true;
        PacketUpdate::create(['packet_id' => $this->packet->id, 'status' => PacketStatus::WH_PENDING->value]);
    }

    public function render()
    {
        $packetTypes = PacketType::all(['id', 'name']);
        return view('components.pages.app.packet.create', compact('packetTypes'));
    }
}
