<?php

namespace App\View\Components\Pages\App;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('App Dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('components.pages.app.dashboard');
    }
}
