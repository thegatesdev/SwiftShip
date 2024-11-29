<?php

namespace App\View\Components\Pages\App\PacketType;

use App\Livewire\Forms\PacketTypeForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Maak een type')]
class Create extends Component
{
    public PacketTypeForm $form;

    public function save()
    {
        $stored = $this->form->store();
        session()->flash('success', 'Post succesvol aangemaakt');
        return $this->redirectRoute('app.pt.update', $stored);
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
