<?php

namespace App\View\Components\Pages;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('components.pages.dashboard');
    }
}
