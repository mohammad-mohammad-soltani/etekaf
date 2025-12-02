<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;

class HomePage extends Component
{
    public $current_level = 2;
    public $max_tab = 3;
    public $min_level = 1;
    public function render()
    {
        return view('livewire.home-page');
    }
    #[On('level_up')]
    public function level_up(){
        $this->current_level = $this->current_level + 1;
    }
}
