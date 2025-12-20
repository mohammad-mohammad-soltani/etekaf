<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl1 extends Component
{
    #[Validate('accepted' , message:'برای رفتن به مرحله بعد باید این متن را بپذیرید.برای پذیرفتن روی متن پذیرش ضوابط کلیک کنید')]
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
