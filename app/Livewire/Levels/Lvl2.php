<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl2 extends Component
{
    #[Validate('required|regex:/^9\d{9}$/' , message:["required" => "ورود شماره تلفن الزامی است" , "regex" => 'شماره تلفن باید معتبر و بدون 0 و +98 ابتدا باشد'])]
    public $phone;
    public function render()
    {
        return view('livewire.levels.lvl2');
    }
    public function next_step(){
        $this -> validate();
        $this -> dispatch('level_up');
    }
}
