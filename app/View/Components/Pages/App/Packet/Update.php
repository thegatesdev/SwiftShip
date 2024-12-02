<?php

namespace App\View\Components\Pages\App\Packet;

use App\Livewire\Forms\PacketForm;
use App\Models\Packet;
use App\Models\PacketType;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pas een pakket aan')]
class Update extends Component
{
    public PacketForm $form;

    public function mount(Packet $packet)
    {
        $this->form->set($packet);
    }

    public function save()
    {
        $this->form->update();
        session()->flash('success', 'Pakket succesvol aangepast');
    }

    public function render()
    {
        $packetTypes = PacketType::all(['id', 'name']);
        return view('components.pages.app.packet.create', compact('packetTypes'));
    }
}
