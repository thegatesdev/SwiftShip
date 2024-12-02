<?php

namespace App\View\Components\Pages\App;

use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Verkeersinfo')]
class TrafficAPI extends Component
{
    public function render()
    {
        $data = Cache::remember('traffic-api', 100, function() {
            $json = file_get_contents('https://api.anwb.nl/v2/incidents/desktop-light?apikey=WjJRczouKS0s6RJG9WFBBbe4TzkgnGz8');
            $obj = json_decode($json);
            return $obj;
        });
        return view('components.pages.app.traffic-api', compact('data'));
    }
}
