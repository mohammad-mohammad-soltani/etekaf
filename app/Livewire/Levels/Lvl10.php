<?php

namespace App\Livewire\Levels;

use Livewire\Component;

class Lvl10 extends Component
{
    public function render()
    {
        return view('livewire.levels.lvl10');
    }
    public function reform(){
        $this -> dispatch('reform');
    }
}
