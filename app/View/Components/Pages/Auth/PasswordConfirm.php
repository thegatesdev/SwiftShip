<?php

namespace App\View\Components\Pages\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Confirm Password')]
class PasswordConfirm extends Component
{
    public function render()
    {
        return view('components.pages.auth.password-confirm');
    }
}
