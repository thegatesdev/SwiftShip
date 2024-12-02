<?php

namespace App\View\Components\Pages\App\Packet;

use App\Livewire\Forms\PacketForm;
use App\Models\PacketType;
use App\Models\PacketUpdate;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Maak een pakket')]
class Create extends Component
{
    public bool $sent;
    public PacketForm $form;

    public function save()
    {
        $stored = $this->form->store();
        session()->flash('success', 'Pakket succesvol aangemaakt');
        return $this->redirectRoute('app.packet.update', $stored, navigate: true);
    }

    public function render()
    {
        $packetTypes = PacketType::all(['id', 'name']);
        return view('components.pages.app.packet.create', compact('packetTypes'));
    }
}
