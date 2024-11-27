<?php

namespace App\View\Components\Pages\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Login')]
class Login extends Component
{
    #[Validate('required|email', 'Vul een email adres in')]
    public $email;

    #[Validate('required', 'Vul een wachtwoord in')]
    public $password;

    public $remember = false;


    public function login()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials, $this->remember))
        {
            session()->regenerate();
            session()->flash('message', 'You have successfully logged in!');
            return $this->redirectRoute('app.dashboard', navigate: true);
        }

        session()->flash('error', 'Invalid credentials!');
    }


    public function render()
    {
        return view('components.pages.auth.login');
    }
}
