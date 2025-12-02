<?php

namespace App\Livewire;

use Livewire\Component;

class TestFlux extends Component
{
    public bool $terms ;
    public function render()
    {
        return view('livewire.test-flux');
    }
}
