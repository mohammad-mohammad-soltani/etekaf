<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl1 extends Component
{
    #[Validate('accepted' , message:'مطالعه قوانین و پذیرفتن آنها الزامی است')]
    public $terms ;
    public function render()
    {
        return view('livewire.levels.lvl1');
    }
    function next_step(){
        $validate = $this -> validate();
        $this -> dispatch('level_up');
    }
}
