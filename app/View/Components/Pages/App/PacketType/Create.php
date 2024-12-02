<?php

namespace App\View\Components\Pages\App\PacketType;

use App\Livewire\Forms\PacketTypeForm;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Maak een type')]
class Create extends Component
{
    public PacketTypeForm $form;

    public function save()
    {
        $stored = $this->form->store();
        session()->flash('success', 'Pakket-type succesvol aangemaakt');
        return $this->redirectRoute('app.pt.update', $stored, navigate: true);
    }

    public function next()
    {
        $this->save();
        $this->redirectRoute('app.packet.create', navigate: true);
    }

    public function render()
    {
        $users = User::all(['id', 'email']);
        return view('components.pages.app.packet-type.create', compact('users'));
    }
}
