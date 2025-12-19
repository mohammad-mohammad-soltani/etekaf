<?php

namespace App\Livewire\Levels;

use App\Models\EtekafUsers;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Lvl6 extends Component
{
    #[Validate('required|in:haniyeh,safieddine,mughniyeh,deif,sinwar,yamen,kuntar,muhandis,soleimani,nasrallah' , message: ['location.required' => 'وارد کردن محل استقرار الزامی است' , 'location.in' => 'محور وارد شده نامعتبر است'])]
    public $location;

    
    public function render()
    {
        return view('livewire.levels.lvl6');
    }
    public function next_step(){
        $this->validate();
        $this -> dispatch('level_up' , ['location_selected' => $this->location]);
    }
}
