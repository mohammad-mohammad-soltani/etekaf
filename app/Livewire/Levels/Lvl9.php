<?php

namespace App\Livewire\Levels;

use Livewire\Component;

class Lvl9 extends Component
{
    public $user_data;
    public function mount($user_data){
        $this->user_data = $user_data;
    }
    public function render()
    {
        return view('livewire.levels.lvl9');
    }
    public function reform(){
        $this -> dispatch('reform');
    }
}
