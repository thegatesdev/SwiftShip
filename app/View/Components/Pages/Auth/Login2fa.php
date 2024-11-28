<?php

namespace App\View\Components\Pages\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login 2FA')]
class Login2fa extends Component
{
    public function render()
    {
        return view('components.pages.auth.login2fa');
    }
}
