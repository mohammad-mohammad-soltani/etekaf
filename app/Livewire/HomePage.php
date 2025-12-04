<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;

class HomePage extends Component
{
    public $current_level = 1;
    #[Session('from_payment')]
    public $from_payment = false;
    public $max_tab = 8;
    public $min_level = 1;
    #[Session('user_phone')]
    public $user_phone;

    #[Session('name')]
    public $name;
    #[Session('user_data')]
    public $user_data = [
        'name' => null ,
        'gender' => null,
        'birthyear' => null,
        'national_code' => null,
        'phone_number' => null,
        'parent_number' => null,
        'province' => null,
        'school' => null,
        'location_selected' => null,
        'referral_source' => null,
        'quran_state' => null,
        'activity_area' => null,
    ];

    public function mount()
    {
        if($this -> from_payment && $this -> current_level < 9){
            $this -> current_level = 8;
        }else if($this -> user_phone !== null && $this -> current_level < 4){
            $this->current_level = 4;
            $this->reset('user_data');
        }
    }
    public function render()
    {
        return view('livewire.home-page');
    }
    #[On('level_up')]
    public function level_up($data = []){
        foreach ($data as $key => $value) {
            $this -> user_data[$key] = $value;
        }
        $this->current_level = $this->current_level + 1;
        if($this->current_level == 4){
            $this->user_phone = session() -> get('phone');
        }
        if($this -> current_level == 8 ){
            $this -> from_payment = true;
        }

    }
    #[On('reform')]
    public function reform(){
        $this -> reset('from_payment');
        $this -> reset('user_data');
        $this -> reset('current_level');
    }
}
