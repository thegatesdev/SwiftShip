<?php

namespace App\View\Components\Pages\App\PacketType;

use App\Livewire\Forms\PacketTypeForm;
use App\Models\PacketType;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pas een type aan')]
class Update extends Component
{
    public PacketTypeForm $form;

    public function mount(PacketType $packetType)
    {
        $this->form->set($packetType);
    }

    public function save()
    {
        $this->form->update();
        session()->flash('success', 'Pakket-type succesvol aangepast');
    }

    public function next()
    {
        $this->save();
        $this->redirectRoute('app.packet.create');
    }

    public function render()
    {
        $users = User::all(['id', 'email']);
        return view('components.pages.app.packet-type.create', compact('users'));
    }
}
