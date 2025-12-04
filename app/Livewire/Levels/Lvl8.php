<?php

namespace App\Livewire\Levels;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Lvl8 extends Component
{
    use WithFileUploads;
    #[Validate('required|image|max:1024' , message : ['resid.max' => 'عکس رسید شما باید کمتر از یک مگابایت باشد'])] // 1MB Max
    public $resid;
    public $national_code;
    public function mount($national_code){
        $this->national_code = $national_code;
    }
    public function render()
    {
        return view('livewire.levels.lvl8');
    }
    public function next_step(){
        $this -> validate();
        $this->resid->storeAs(path: 'resid' , name: $this -> national_code);
        $this -> dispatch('level_up');
    }
}
