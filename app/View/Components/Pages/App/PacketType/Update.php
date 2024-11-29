<?php

namespace App\View\Components\Pages\App\PacketType;

use App\Livewire\Forms\PacketTypeForm;
use App\Models\PacketType;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Verander een type')]
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
        session()->flash('success', 'Post succesvol geupdated');
    }

    public function next()
    {
        $this->save();
        // $this->redirectRoute('app.packet.create');
    }

    public function render()
    {
        return view('components.pages.app.packet-type.create');
    }
}
